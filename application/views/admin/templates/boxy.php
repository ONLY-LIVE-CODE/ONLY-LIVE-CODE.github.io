<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title">Настройки дизайна</h6></div>
                    <div class="panel-body">

<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo ' <div class="alert alert-info fade in widget-inner">';
		echo '<button type="button" class="close" data-dismiss="alert">?</button>';
		echo 'Данные успешно сохранены!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>


   <div class="form-group">
                            <label class="col-sm-2 control-label">Фон: </label>
                            <div class="col-sm-10">
                <? echo form_input('boxy_fon', set_value('boxy_fon', $this->config->item('boxy_fon')),'class="form-control"'); ?>
                            </div>
                        </div>
						
						    <div class="form-group">
                            <label class="col-sm-2 control-label">Лого: </label>
                            <div class="col-sm-10">
                           <? echo form_input('boxy_logo', set_value('boxy_logo', $this->config->item('boxy_logo')),'class="form-control"'); ?>
                            </div>
                        </div>
						 
						
						
					

	
	<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                     
							<? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?>
                        </div>

	
<? echo form_close(); ?>
  </div>  </div>