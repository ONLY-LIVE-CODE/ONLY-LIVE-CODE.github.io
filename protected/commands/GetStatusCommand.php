<?php

/**
 *  * @author Alexandr Ivanov <ivanov@vsdesk.ru>
 *  * @link http://vsdesk.ru/
 *  * @copyright 2012-2016 Alexandr Ivanov
 *  * @license Non Free Commercial
 */
class GetStatusCommand extends CConsoleCommand
{
    const REQUEST_PER_ITERATION = 500;

    /**
     * @param array $args
     * @return int|void
     * @throws CException
     * @throws \Telegram\Bot\Exceptions\TelegramSDKException
     * @throws Exception
     */
    public function run($args)
    {
        define('ROOT_PATH', dirname(__FILE__));
        $path = ROOT_PATH . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

        if (YII_DEBUG == true) {
            ini_set('display_errors', 'On');
            error_reporting(E_ALL);
        } else {
            ini_set('display_errors', 'Off');
            error_reporting(0);
        }

        //setting dafault timezone to Moscow
        date_default_timezone_set(Yii::app()->params['timezone']);

        Yii::import('application.models.Request', true);
        $criteria = new CDbCriteria();
        $criteria->addInCondition('timestampfEnd', array(null), 'OR');
        $dataProvider = new CActiveDataProvider("Request", [
            'criteria' => $criteria,
            'sort' => [
                'defaultOrder' => 't.id DESC'
            ]
        ]);
        $zayavki = new CDataProviderIterator($dataProvider, self::REQUEST_PER_ITERATION);
        $now = date("d.m.Y H:i");
        foreach ($zayavki as $item) {
            //echo($item->id."\n");
            /** @var Request $item */
            $starttime = $item->StartTime;
            $fstarttime = $item->fStartTime;
            $endtime = $item->EndTime;
            $close_time = $item->timestampClose;
            $fendtime = $item->fEndTime;
            $sstat = Status::model()->findByAttributes(['name' => $item->Status]);
            $gstatus = $sstat['freeze'];
            if (isset ($item->service_id)) {
                $service = Service::model()->findByPk($item->service_id);
                $sla = Sla::model()->findByAttributes(['name' => $service->sla]);
            } else {
                $sla = Sla::model()->findByPk(Yii::app()->params['zdsla']);
            }

            $ntretimeUnix = (int)$sla->ntretimeh * 3600 + (int)$sla->ntretimem * 60;
            $ntretimeStart = strtotime($starttime) - $ntretimeUnix;

            /** @var gtvolk\WorkingTime\WorkingTime $workingTime */
            $workingTime = WorkingTimeComponent::createFromSla($sla);
            // эскалация реакции
            if (empty($item->timestampfStart)) {
                $criteria = new CDbCriteria;
                if(isset($item->service_id) AND !empty($item->service_id)){
                    $criteria->condition = "service_id = {$item->service_id} AND type_id = " . Escalates::TYPE_REACTION . " ORDER BY minutes ASC";
                    $escalates = Escalates::model()->findAll($criteria);
                }
                // Находим все настройки для этого сервиса
                if ($escalates) {
                    foreach ($escalates as $escalate) {
                        $escalate_time = $workingTime->modify($escalate->minutes, $item->timestamp);
                        // Проверяем подходит ли по времени
                        if (strtotime($escalate_time) <= time()) {
                            // Проверяем обработали ли мы это случай или нет
                            $requestEscalate = RequestEscalates::model()->findByAttributes([
                                'request_id' => $item->id,
                                'escalate_id' => $escalate->id,
                            ]);
                            if (!$requestEscalate) {
                                // применим настройки эскалации
                                $ret = EscalatesComponent::reaction($item, $escalate);
                                if ($ret) {
                                    // Дальше нет смысла продолжать
                                    break;
                                }
                            }
                        }
                    }
                }
            }
            // END эскалация реакции

            // эскалация решения
            if (empty($item->timestampfEnd)) {
                $criteria = new CDbCriteria;
                if(isset($item->service_id) AND !empty($item->service_id)){
                    $criteria->condition = "service_id = {$item->service_id} AND type_id = " . Escalates::TYPE_EXECUTION . " ORDER BY minutes ASC";
                    $escalates = Escalates::model()->findAll($criteria);
                }
                // Находим все настройки для этого сервиса
                if ($escalates) {
                    foreach ($escalates as $escalate) {
                        $escalate_time = $workingTime->modify($escalate->minutes, $item->timestamp);
                        // Проверяем подходит ли по времени
                        if (strtotime($escalate_time) <= time()) {
                            // Проверяем обработали ли мы это случай или нет
                            $requestEscalate = RequestEscalates::model()->findByAttributes([
                                'request_id' => $item->id,
                                'escalate_id' => $escalate->id,
                            ]);
                            if (!$requestEscalate) {
                                // применим настройки эскалации
                                $ret = EscalatesComponent::reaction($item, $escalate);
                                if ($ret) {
                                    // Дальше нет смысла продолжать
                                    break;
                                }
                            }
                        }
                    }
                }
            }
            // END эскалация решения

            // Истекает время реагирования
            if ($ntretimeStart != strtotime($starttime) and strtotime($now) > $ntretimeStart and strtotime($now) < strtotime($starttime) and $fstarttime == '' and $gstatus !== '1') {
                if ($item->slabel !== '<span style="display: inline-block; padding: 2px 4px; font-size: 11.844px; font-weight: bold; line-height: 14px; color: #fcb117; vertical-align: baseline; white-space: nowrap; border: 1px solid #fcb117; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px;">Время реакции истекает</span>') {
                    Request::model()->updateByPk($item->id,
                        [
                            'slabel' => '<span style="display: inline-block; padding: 2px 4px; font-size: 11.844px; font-weight: bold; line-height: 14px; color: #fcb117; vertical-align: baseline; white-space: nowrap; border: 1px solid #fcb117; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px;">Время реакции истекает</span>',
                            'lastactivity' => date("Y-m-d H:i:s")
                        ]);
                    Email::prepare($item->id, 2, []);
                }
            }

            $ntsltimeUnix = (int)$sla->ntsltimeh * 3600 + (int)$sla->ntsltimem * 60;
            $ntsltimeStart = strtotime($endtime) - $ntsltimeUnix;

            // Истекает время исполнения
            if ($ntsltimeStart != strtotime($endtime) and strtotime($now) > $ntsltimeStart and strtotime($now) < strtotime($endtime) and $gstatus !== '1' and $fendtime == '') {
                if ($item->slabel !== '<span style="display: inline-block; padding: 2px 4px; font-size: 11.844px; font-weight: bold; line-height: 14px; color: #756994; vertical-align: baseline; white-space: nowrap; border: 1px solid #756994; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px;">Время исполнения истекает</span>') {
                    Request::model()->updateByPk($item->id,
                        [
                            'slabel' => '<span style="display: inline-block; padding: 2px 4px; font-size: 11.844px; font-weight: bold; line-height: 14px; color: #756994; vertical-align: baseline; white-space: nowrap; border: 1px solid #756994; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px;">Время исполнения истекает</span>',
                            'lastactivity' => date("Y-m-d H:i:s")
                        ]);
                    Email::prepare($item->id, 3, []);
                }
            }
            //авто-закрытие заявки 
            if (!empty($close_time) AND strtotime($now) > strtotime($close_time)) {
                $status = Status::model()->findByAttributes(['close' => '3']);
                $model = Request::model()->findByPk($item->id);
                $message = 'Auto Close ticket #' . $item->id . ' named "' . $model->Name . '"';
                Yii::log($message, 'updated', 'UPDATED');

                $start = new DateTime($model->Date);
                $end = new DateTime(date('Y-m-d H:i:s'));
                $lead_time = $end->diff($start);

                $t = new Timing();
                $hours = $t->getExpiredHours($model->timestampEnd, date('Y-m-d H:i:s'), $sla->wstime, $sla->wetime,
                    $sla->round_days, $sla->taxes);

                Request::model()->updateByPk($item->id, [
                    'Status' => $status->name,
                    'slabel' => $status->label,
                    'closed' => 3,
                    'fEndTime' => date("d.m.Y H:i"),
                    'fStartTime' => date("d.m.Y H:i"),
                    'lead_time' => $lead_time->format("%h:%i:%s"),
                    'delayedHours' => $hours,
                    'lastactivity' => date("Y-m-d H:i:s"),
                    'timestampClose' => null,
                    'wasautoclosed' => 1
                ]);

                $this->AddHistory('Изменен статус: ' . $status->label . '', $item);
                $afiles = [];

                foreach ($item->files as $file) {
                    $afiles[] = $path . 'uploads' . DIRECTORY_SEPARATOR . $file;
                }

                Email::prepare($item->id, 0, $afiles);

            }

            if (strtotime($now) > strtotime($starttime) && strtotime($now) < strtotime($endtime) && $fstarttime == '' && $gstatus !== '1' && $item->closed !== '1') {
                $rstatus = Status::model()->findByAttributes(['enabled' => 1, 'close' => 4]);
                if ($rstatus) {
                    Request::model()->updateByPk($item->id, [
                        'Status' => $rstatus->name,
                        'slabel' => $rstatus->label,
                        'closed' => 1,
                        'delayed_start' => 1,
                        'lastactivity' => date("Y-m-d H:i:s")
                    ]);
                } else {
                    Request::model()->updateByPk($item->id, [
                        'Status' => 'Просрочена реакция',
                        'slabel' => '<span style="display: inline-block; padding: 2px 4px; font-size: 11.844px; font-weight: bold; line-height: 14px; color: #fcb117; vertical-align: baseline; white-space: nowrap; border: 1px solid #fcb117; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px;">Просрочена реакция</span>',
                        'closed' => 1,
                        'delayed_start' => 1,
                        'lastactivity' => date("Y-m-d H:i:s")
                    ]);
                }
                $this->setAutoCloseTime($item->id);
                if ($item->closed == null) {
                    $this->AddHistory('Изменен статус: ' . $rstatus->label . '', $item);

                    $afiles = array();
                    /* $files = $item->image;
                    if ($files) {
                        $filelist = explode(",", $files);
                        foreach ($filelist as $file => $value) {
                            $afiles[] = $path . 'media' . DIRECTORY_SEPARATOR . $item->id . DIRECTORY_SEPARATOR . $value;
                        }
                    } */

                    foreach ($item->files as $file) {
                        $afiles[] = $path . 'uploads' . DIRECTORY_SEPARATOR . $file;
                    }

                    Email::prepare($item->id, 0, $afiles);
                }
            }

            if (strtotime($now) > strtotime($endtime) && $fendtime == '' && $gstatus !== '1') {

                $currentTime = null === $item->paused ? date('Y-m-d H:i:s') : $item->paused;

                $workingTime = WorkingTimeComponent::createFromSla($sla);

                $start = new DateTime($item->Date);
                $end = new DateTime($currentTime);

                $leadMinutes = $workingTime->calculatingWorkingTime($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));

                if (0 !== (int)$item->paused_total_time) {
                    $leadMinutes = $leadMinutes - (int)$item->paused_total_time;
                }

                $hours = (int)($leadMinutes / 60);
                $minutes = $leadMinutes % 60;

                $lead_time = "$hours:$minutes:00";

                $status = Status::model()->findByAttributes(['enabled' => 1, 'close' => 5]);
                if ($status) {
                    if ($item->delayed_end != 1) {
                        Request::model()->updateByPk($item->id, [
                            'Status' => $status->name,
                            'slabel' => $status->label,
                            'closed' => 9,
                            'delayed_end' => 1,
                            'lead_time' => $lead_time,
                            'lastactivity' => date("Y-m-d H:i:s")
                        ]);
                    }
                } else {
                    if ($item->delayed_end != 1) {
                        Request::model()->updateByPk($item->id, [
                            'Status' => 'Просрочено исполнение',
                            'slabel' => '<span style="display: inline-block; padding: 2px 4px; font-size: 11.844px; font-weight: bold; line-height: 14px; color: #756994; vertical-align: baseline; white-space: nowrap; border: 1px solid #756994; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px;">Просрочено исполнение</span>',
                            'closed' => 9,
                            'delayed_end' => 1,
                            'lead_time' => $lead_time,
                            'lastactivity' => date("Y-m-d H:i:s")
                        ]);
                    }
                }
                $this->setAutoCloseTime($item->id);
                if (($item->closed == null OR $item->closed == 1) AND $item->delayed_end != 1) {

                    $this->AddHistory('Изменен статус: ' . $status->label . '', $item);
                    $afiles = array();

                    foreach ($item->files as $file) {
                        $afiles[] = $path . 'uploads' . DIRECTORY_SEPARATOR . $file;
                    }

                    Email::prepare($item->id, 0, $afiles);

                }

            }

        }

    }

    /**
     * @param $req_id
     */
    protected function setAutoCloseTime($req_id)
    {
        /** @var Request $request */
        $request = Request::model()->findByPk($req_id);
        $status = Status::model()->findByAttributes(['name' => $request->Status]);

        $service = Service::model()->findByPk($request->service_id);
        $sla = Sla::model()->findByAttributes(['name' => $service->sla]);
        $priority = Zpriority::model()->findByAttributes(['name' => $request->Priority]);

        $timing = new Timing();
        $timing->set_format('d.m.Y H:i');
        if ($sla->autoClose && $sla->autoCloseStatus == $status->id) {
            $mod = $timing->get_lead_time(date('Y-m-d H:i'), $sla->rhours, $sla->shours, $sla->wstime, $sla->wetime,
                $sla->round_days, $priority->rcost, $priority->scost, $sla->taxes, $sla->autoCloseHours);

            Request::model()->updateByPk($req_id, [
                'timestampClose' => date('Y-m-d H:i:s', strtotime($mod['auto_close']))
            ]);
        }
    }

    /**
     * Adding new record to history action
     *
     * @param $action
     * @param $item
     */
    public function AddHistory($action, $item)
    {
        $history = new History();
        $history->datetime = date("d.m.Y H:i");
        $history->cusers_id = 'system';
        $history->zid = $item->id;
        $history->action = $action;
        $history->save(false);

    }
}
