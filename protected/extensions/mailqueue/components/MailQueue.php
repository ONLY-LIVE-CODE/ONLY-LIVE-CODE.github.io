<?php

namespace yiicod\mailqueue\components;

require __DIR__ . '/../../../vendors/phpmailer/vendor/autoload.php';
require __DIR__ . '/../../../components/DetectOS.php';
if (PHP_SAPI == 'cli') {
    require __DIR__ . '/../../../models/Files.php';
}

use CApplicationComponent;
use CConsoleApplication;
use CDbCriteria;
use CLogger;
use Yii;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use DetectOS;
use Files;

class MailQueue extends CApplicationComponent
{
    /**
     * @var type
     */
    public $afterSendDelete = true;

    /**
     * @var type
     */
    public $partSize = 50;

    /**
     * Push mass
     * array(
     *    array(
     *      'field name to' => '',
     *      'field name subject' => '',
     *      'field name body' => '',
     *      'field name priority' => '',
     *      'field name from' => '',
     *      'field name attachs' => '',
     *    )
     * ).
     *
     * @param array $data
     *
     * @return int Return int
     */
    public function pushMass($data)
    {
        $table = Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['class'];
        $model = new $table();

        $prepareData = [];
        $prepareMessages = [];
        $index = 1;
        foreach ($data as $item) {
            if (is_array($item)) {
                $prepareData = \CMap::mergeArray([
                        $model->fieldFrom => '',
                        $model->fieldTo => '',
                        $model->fieldSubject => '',
                        $model->fieldBody => '',
                        $model->fieldAttachs => [],
                        $model->fieldStatus => Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['unsend'],
                        ], $item);
                $prepareData[$model->fieldAttachs] = \CJSON::encode($prepareData[$model->fieldAttachs]);
                if (in_array($model->fieldCreateDate, $model->attributeNames())) {
                    $prepareData[$model->fieldCreateDate] = date('Y-m-d H:i:s');
                }
                $prepareMessages[] = $prepareData;
            }
            if (($index % $this->partSize === 0 || $index >= count($data)) && false === empty($prepareMessages)) {
                //Reconnect for big duration
                Yii::app()->db->setActive(false);
                Yii::app()->db->setActive(true);
                Yii::app()->db->commandBuilder->createMultipleInsertCommand($model->tableName(), $prepareMessages)->execute();
                $prepareMessages = [];
            }
            ++$index;
        }
        //Reconnect for db stable works 
        Yii::app()->db->setActive(false);
        Yii::app()->db->setActive(true);
    }

    /**
     * Add mail from queue.
     *
     * @param string $to      Email to
     * @param string $subject Email subject
     * @param string Body email, html
     * @param string|array From email
     * @param string Attach for email array('path' => 'file path', 'name' => 'file bname')
     * 
     * @return bool Save or not
     */
    public function push($to, $subject, $body, $priority = 0, $from = '', $attachs = [], $additionalFields = [])
    {
        $table = Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['class'];
        $model = new $table();

        $model->from = $from;
        $model->to = $to;
        $model->subject = $subject;
        $model->body = $body;
        $model->attachs = $attachs;
        $model->priority = $priority;
        $model->status = Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['unsend'];

        // foreach ($additionalFields as $field => $value) {
        //     $model->{$field} = $value;
        // }

        return $model->save(false);
    }

    /**
     * Send mail from queue.
     *
     * @param CDbCriteria
     */
    public function delivery($criteria)
    {
        $table = Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['class'];
        $item = null;
        $ids = [];
        $failedIds = [];
        $deliveringCount = $criteria->limit;
        $statusSended = isset(Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['send']) ?
            Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['send'] :
            Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['sended'];
        $statusUnsended = isset(Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['unsend']) ?
            Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['unsend'] :
            Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['unsended'];
        $statusFailed = Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['status']['failed'];
        $fieldStatus = $table::model()->fieldStatus;

        while ($deliveringCount > 0) {
            $criteria->limit = min($this->partSize, $deliveringCount);
            $models = $table::model()->findAll($criteria);

            foreach ($models as $item) {
                $to = $item->to;
                $subject = $item->subject;
                $body = $item->body;
                $attachs = json_decode($item->attachs);
                $from = $item->from;

                if ($isSuccess = $this->send($to, $subject, $body, $attachs)) {
                    $ids[] = $item->id;
                } else {
                    if (YII_DEBUG && Yii::app() instanceof CConsoleApplication) {
                        echo "MailQueue send false to - $to, subject - $subject \n";
                    }
                    Yii::log("MailQueue send false to - $to, subject - $subject \n", CLogger::LEVEL_ERROR, 'system.mailqueue');
                    $failedIds[] = $item->id;
                }
            }

            if (count($ids)) {
                if ($this->afterSendDelete) {
                    $table::model()->deleteAll($criteria);
                } elseif (in_array($fieldStatus, $item->attributeNames())) {
                    $status = $statusSended;
                    $this->updateMailQueue($ids, $status);
                }
            }
            if (count($failedIds) && in_array($fieldStatus, $item->attributeNames())) {
                $status = $statusUnsended;
                if ($statusFailed != $statusUnsended) {
                    $status = $statusFailed;
                }
                $this->updateMailQueue($failedIds, $status);
            }

            $deliveringCount = $deliveringCount - $this->partSize;
        }
    }

    protected function updateMailQueue($ids, $status)
    {
        $table = Yii::app()->getComponent('mailqueue')->modelMap['MailQueue']['class'];
        $fieldStatus = $table::model()->fieldStatus;
        $fieldUpdate = $table::model()->fieldUpdateDate;

        $criteria = new CDbCriteria();
        $criteria->addInCondition('id', $ids);
        if (in_array($fieldUpdate, $table::model()->attributeNames())) {
            $table::model()->updateAll([
                $fieldStatus => $status,
                $fieldUpdate => date('Y-m-d H:i:s'),
                ], $criteria);
        } else {
            $table::model()->updateAll([
                $fieldStatus => $status,
                ], $criteria);
        }
    }
    static function send($to, $subject, $message, $afiles)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = (isset(Yii::app()->params['smdebug']) AND Yii::app()->params['smdebug'] == 1) ? 3 : 0;  // Verbose debug output
            $mail->CharSet = 'UTF-8';                             // Charset to utf-8
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->setLanguage('ru',
                __DIR__ . '/../vendors/phpmailer/vendor/phpmailer/phpmailer/language/'); // Set language codes

            $mail->Host = Yii::app()->params['smhost'];           // Specify main and backup SMTP servers
            if (Yii::app()->params['smtpauth'] == 1) {
                $mail->SMTPAuth = true;                             // Enable SMTP authentication
            } else {
                $mail->SMTPAuth = false;                            // Disable SMTP authentication
            }
            $mail->SMTPKeepAlive = true;                          // Keep alive SMTP connection
            //$mail->SingleTo = true;                               // Sending each single message
            $mail->Username = Yii::app()->params['smusername'];   // SMTP username
            $mail->Password = Yii::app()->params['smpassword'];   // SMTP password
            $mail->setFrom(Yii::app()->params['smfrom'], Yii::app()->params['smfromname']); //From email and email
            $mail->addReplyTo(Yii::app()->params['smfrom'], Yii::app()->params['smfromname']); //Reply to

            if (!empty(Yii::app()->params['smsec'])) {
                $mail->SMTPSecure = Yii::app()->params['smsec'];    // Enable SSL or TLS encryption
            } else {
                $mail->SMTPSecure = '';                          // Disable SSL or TLS encryption
            }
            $mail->Port = Yii::app()->params['smport'];           // TCP port to connect to

            if (isset(Yii::app()->params['smignoressl']) AND Yii::app()->params['smignoressl'] == 1) { //ignoring SSL or TLS certificate verify
                $mail->SMTPOptions = [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    ]
                ];
            }

            //Recipients
            if (is_array($to)) {
                $addr = implode(',', $to);
                foreach ($to as $value) {
                    if (!empty($value)) {
                        $mail->addAddress($value);
                    }
                }
            } else {
                $mail->addAddress($to);
            }
            //Attachments
            if ($afiles) {
                foreach ($afiles as $path) {
                    $os_type = DetectOS::getOS();
                    $dir = substr(strrchr($path, '/'), 1);
                    $fileObj = Files::model()->findByAttributes(['file_name' => $dir]);
                    $mail->addAttachment($path, $fileObj->name);
                }
            }

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            $mail->clearAddresses();
            $mail->clearAttachments();
            if (is_array($to)) {
                $message = 'Сообщение "' . $subject . '" для ' . $addr . ' было успешно отправлено.';
            } else {
                $message = 'Сообщение "' . $subject . '" для ' . $to . ' было успешно отправлено.';
            }
            Yii::log($message, 'info', 'MAIL_SEND');
            return true;

        } catch (Exception $e) {
            if (is_array($to)) {
                $message = 'Получена ошибка при отправке сообщения "' . $subject . '" для ' . $addr . ': ' . $mail->ErrorInfo;
                Yii::log($message, 'error', 'MAIL_ERR');
            } else {
                $message = 'Получена ошибка при отправке сообщения "' . $subject . '" для ' . $to . ': ' . $mail->ErrorInfo;
                Yii::log($message, 'error', 'MAIL_ERR');
            }
        }
    }
}
