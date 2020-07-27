<?php

class m191101_102240_70000_2 extends CDbMigration
{
	public function up()
	{
	    $requests = Request::model()->findAll();
	    foreach ($requests as $request){
	        if(isset($request->CUsers_id) AND isset($request->company)){
                $user = CUsers::model()->findByAttributes(['Username' => $request->CUsers_id]);
                $company = Companies::model()->findByAttributes(['name' => $user->company]);
                $depart = Depart::model()->findByAttributes(['name' => $user->department, 'company' => $company->name]);
                Request::model()->updateByPk($request->id, [
                    'company_id' => $company->id,
                    'depart' => $depart->name,
                    'depart_id' => $depart->id,
                ]);
            }
            if(isset($request->creator)){
                $creator = CUsers::model()->findByAttributes(['fullname' => $request->creator]);
                if(isset($creator)){
                    Request::model()->updateByPk($request->id, [
                        'creator_id' => $creator->id,
                    ]);
                }
            }
        }
	}

	public function down()
	{
		echo "m191101_102240_611112 does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}