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
                            <label class="col-sm-2 control-label">Лого: </label>
                            <div class="col-sm-10">
                <? echo form_input('elegant_logo', set_value('elegant_logo', $this->config->item('elegant_logo')),'class="form-control"'); ?>
                            </div>
                        </div>
   <div class="form-group">
                            <label class="col-sm-2 control-label">Фон: </label>
                            <div class="col-sm-10">
                <? echo form_input('elegantfon', set_value('elegantfon', $this->config->item('elegantfon')),'class="form-control"'); ?>
                            </div>
                        </div>
						
						    <div class="form-group">
                            <label class="col-sm-2 control-label">О нас: </label>
                            <div class="col-sm-10">
                           <? echo form_textarea('elegant_onas', set_value('elegant_onas', $this->config->item('elegant_onas')),'class="editor"'); ?>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Баннер [Слева]: </label>
                            <div class="col-sm-10">
                           <? echo form_textarea('banner_lev', set_value('banner_lev', $this->config->item('banner_lev')),'class="editor"'); ?>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Баннер [Нижний]: </label>
                            <div class="col-sm-10">
                           <? echo form_textarea('banner_niz', set_value('banner_niz', $this->config->item('banner_niz')),'class="editor"'); ?>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Информация: </label>
                            <div class="col-sm-10">
               <? echo form_textarea('elegant_info', set_value('elegant_info', $this->config->item('elegant_info')),'class="editor"'); ?>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Читайте нас: </label>
                            <div class="col-sm-10">
                <? echo form_textarea('elegant_read', set_value('elegant_read', $this->config->item('elegant_read')),'class="editor"'); ?>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Контакты: </label>
                            <div class="col-sm-10">
                <? echo form_textarea('elegant_kontakt', set_value('elegant_kontakt', $this->config->item('elegant_kontakt')),'class="editor"'); ?>
                            </div>
                        </div>
						
					

	
	<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                     
							<? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?>
                        </div>

	
<? echo form_close(); ?>
  </div>  </div>