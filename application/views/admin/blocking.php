

<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title">Добавить IP</h6></div>
                    <div class="panel-body">
<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo '<div class="alert alert-success">Данные успешно сохранены!</div>';
	}
	?>

<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>

	<? echo form_hidden('id', set_value('id', $ip->id),'class="form-control"'); ?>
	
	 <div class="form-group">
                            <label class="col-sm-2 control-label">Ip адресс: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('ip', set_value('ip',$ip->ip),'class="form-control"'); ?>

                                
                            </div>
                        </div>
	
	<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                         <? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?>
                        </div>
						     </div>     </div> 
<? echo form_close(); ?>
