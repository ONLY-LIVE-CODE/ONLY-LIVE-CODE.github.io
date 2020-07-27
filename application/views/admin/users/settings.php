<div class="panel panel-default form-horizontal">
                                            <div class="panel-heading"><h6 class="panel-title">Настройки</h6></div>
											<div class="panel-body">
                                         
<? if(isset($error)) {
		echo '<div class="alert alert-danger fade in widget-inner"><button type="button" class="close" data-dismiss="alert">×</button><i class="fa fa-times"></i>';
		echo $error;
				echo '</div>';
	}
	elseif(isset($ok)) {
		echo '<div class="alert alert-success">Данные успешно сохранены!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>


        <div class="form-group">
                            <label class="col-sm-2 control-label">Введите текущий пароль: </label>
                            <div class="col-sm-10">
                                
<? echo  form_input('old_password', set_value('old_password'),'class="form-control"'); ?>

                                
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Введите новый пароль: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('password', set_value('password'),'class="form-control"'); ?>

                                
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Повторите новый пароль: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('password1', set_value('password1'),'class="form-control"'); ?>
                                
                            </div>
                        </div>
 

	
	<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                         <? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?>
                        </div>
	   </div>
   </div>
<? echo form_close(); ?>


