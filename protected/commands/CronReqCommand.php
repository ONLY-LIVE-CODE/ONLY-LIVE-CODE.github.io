<?php
/**
 *  * @author Alexandr Ivanov <ivanov@vsdesk.ru>
 *  * @link http://vsdesk.ru/
 *  * @copyright 2012-2016 Alexandr Ivanov
 *  * @license Non Free Commercial
 */

class CronReqCommand extends CConsoleCommand
{
    public function run($args)
    {
        if (YII_DEBUG == true) {
            ini_set('display_errors', 'On');
            error_reporting(E_ALL);
        } else {
            ini_set('display_errors', 'Off');
            error_reporting(0);
        }

        date_default_timezone_set(Yii::app()->params['timezone']);
        $criteria = new CDbCriteria;
        $now = date('Y-m-d H:i:s');
        $criteria->condition = 'enabled = 1';
        $criteria->addCondition('Date < "' . $now . '" ');

        $cronReqs = CronReq::model()->findAll($criteria);

        if (!empty($cronReqs)) {
            foreach ($cronReqs as $cronReq) {
                /** @var $cronReq CronReq */

                //echo $cronReq->Name . "\r\n";

                /** @var MailRequest */
                $newReq = new MailRequest();
                $newReq->attachEventHandler('onAfterSave', ['JiraTicket', 'createJiraTicket']);
                $newReq->channel = 'Planned';
                $newReq->channel_icon = 'iicon iicon-calendar-full';

                // Start copy attributes
                $newReq->service_id = $cronReq->service_id;
                $newReq->CUsers_id = $cronReq->CUsers_id;
                $newReq->Status = $cronReq->Status;
                $newReq->ZayavCategory_id = $cronReq->ZayavCategory_id;
                $newReq->Priority = $cronReq->Priority;
                $newReq->Name = $cronReq->Name;
                $newReq->Content = $cronReq->Content;
                if (!empty($cronReq->watchers))
                    $newReq->watchers = $cronReq->watchers;
                if (!empty($cronReq->cunits))
                    $newReq->cunits = $cronReq->cunits;
                // End copy attributes

                /** @var CUsers */
                $user = CUsers::model()->findByAttributes(array('Username' => $newReq->CUsers_id));
                $newReq->fullname = $user->fullname;
                $newReq->creator = $user->fullname;
                $newReq->company = $user->company ? $user->company : NULL;
                $address = Companies::model()->findByAttributes(['name' => $user->company]);
                $newReq->company_id = $address->id;
                $newReq->depart = $user->department;
                $depart = Depart::model()->findByAttributes(['name' => $user->department, 'company' => $user->company]);
                $newReq->depart_id = $depart->id;
                $newReq->room = $user->room ? $user->room : NULL;
                $newReq->phone = $user->Phone ? $user->Phone : NULL;

                /** @var Service */
                $service = Service::model()->findByPk($cronReq->service_id);
                $newReq->service_name = $service->name ? $service->name : NULL;

                /** @var CUsers */
                if(isset($service['manager']) AND !empty($service['manager'] AND empty($service['group']))){
                    $manager = CUsers::model()->findByAttributes(array('Username' => $service['manager']));
                    $newReq->mfullname = $manager->fullname ? $manager->fullname : NULL;
                    $newReq->Managers_id = $manager->Username ? $manager->Username : NULL;
                }
                if(isset($service['group']) AND !empty($service['group'])){
                    $group = Groups::model()->findByAttributes(array('name' => $service['group']));
                    $newReq->gfullname = $group->name ? $group->name : NULL;
                    $newReq->groups_id = $group->id ? $group->id : NULL;
                }

                $newReq->Date = date("d.m.Y H:i");
                $newReq->timestamp = date('Y-m-d H:i:s');

                /** @var Status */
                $status = Status::model()->findByAttributes(array('name' => $cronReq->Status));
                $newReq->slabel = $status->label;

                if ($newReq->save(false)) {
                    if (isset($cronReq->fields)){
                        $fields = json_decode($cronReq->fields);
                        foreach ($fields as $field) {
                                $fieldset = new RequestFields();
                                $fieldset->rid = $newReq->id;
                                $fieldset->name = $field->name;
                                $fieldset->type = $field->type;
                                $fieldset->value = $field->value;
                                $fieldset->save(false);
                        }
                    }

                    Email::prepare($newReq->id, 1, NULL);

                    // Определяемся что делать дальше с плановой заявкой
                    switch ($cronReq->repeats) {
                        case 0:
                            $cronReq->enabled = 0; // Отключаем задание
                            break;

                        case 1:
                            $cronReq->Date = date('Y-m-d H:i:s', strtotime($cronReq->Date . "+1 days")); // Переносим на завтра
                            break;

                        case 2:
                            $cronReq->Date = date('Y-m-d H:i:s', strtotime($cronReq->Date . "+1 week")); // Переносим на неделю
                            break;

                        case 3:
                            $cronReq->Date = date('Y-m-d H:i:s', strtotime($cronReq->Date . "+1 month")); // Переносим на месяц
                            break;

                        case 4:
                            $cronReq->Date = date('Y-m-d H:i:s', strtotime($cronReq->Date . "+1 year")); // Переносим на год
                            break;

                        default:
                            $cronReq->enabled = 0; // Отключаем задание
                    }
                    $cronReq->save();


                } else {
                    /* обработчик ошибок */
                }

            } // end foreach
        }

    }
}