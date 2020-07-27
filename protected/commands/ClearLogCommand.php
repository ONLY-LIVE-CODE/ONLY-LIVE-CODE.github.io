<?php
/**
 *  * @author Alexandr Ivanov <ivanov@vsdesk.ru>
 *  * @link http://vsdesk.ru/
 *  * @copyright 2012-2016 Alexandr Ivanov
 *  * @license Non Free Commercial
 */


class ClearLogCommand extends CConsoleCommand
{
    public $clearLog;

    public function run($args)
    {
        $connection = Yii::app()->db;
        $clearLog = "DELETE FROM YiiLog";
        $connection->createCommand($clearLog)->query();
    }

}
