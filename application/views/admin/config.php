<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title">Настройки магазина</h6></div>
                    <div class="panel-body">
<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo ' <div class="alert alert-info fade in widget-inner">';
		echo '<button type="button" class="close" data-dismiss="alert">×</button>';
		echo 'Данные успешно сохранены!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>
                       
            <div class="form-group">
                            <label class="col-sm-2 control-label">Название сайта: </label>
                            <div class="col-sm-10">
                             <? echo form_input('site_name', set_value('site_name', $this->config->item('site_name')),'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Мета-описание сайта: </label>
                            <div class="col-sm-10">
                            <? echo form_textarea('metadescr', set_value('metadescr', $this->config->item('metadescr')),'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Теги: </label>
                            <div class="col-sm-10">
							
                            <? echo form_input('tags', set_value('tags', $this->config->item('tags')),'id="tags2" class="tags"'); ?>
                            </div>
                        </div>
						
						
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Robokassa логин: </label>
                            <div class="col-sm-10">
                           <? echo form_input('rk_login', set_value('rk_login', $this->config->item('rk_login')),'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Robokassa 1 пароль: </label>
                            <div class="col-sm-10">
                             <? echo form_input('rk_password1', set_value('rk_password1', $this->config->item('rk_password1')),'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Robokassa 2 пароль: </label>
                            <div class="col-sm-10">
                             <? echo form_input('rk_password2', set_value('rk_password2', $this->config->item('rk_password2')),'class="form-control"'); ?>
                            </div>
                        </div>
						
						
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Яндекс (Client ID): </label>
                            <div class="col-sm-10">
                           <? echo form_input('yad_client_id', set_value('yad_client_id', $this->config->item('yad_client_id')),'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Яндекс (Token): </label>
                            <div class="col-sm-10">
                             <? echo form_input('yad_token', set_value('yad_token', $this->config->item('yad_token')),'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">QIWI (Номер без +): </label>
                            <div class="col-sm-10">
                           <? echo form_input('qiwi_num', set_value('qiwi_num', $this->config->item('qiwi_num')),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">QIWI (Пароль): </label>
                            <div class="col-sm-10">
                           <? echo form_password('qiwi_pass', set_value('wm_pass', '******'),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">WMID: </label>
                            <div class="col-sm-10">
                           <? echo form_input('wmid', set_value('wmid', $this->config->item('wmid')),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">WMR: </label>
                            <div class="col-sm-10">
                           <? echo form_input('WMR', set_value('WMR', $this->config->item('WMR')),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">WMZ: </label>
                            <div class="col-sm-10">
                          <? echo form_input('WMZ', set_value('WMZ', $this->config->item('WMZ')),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Пароль от ключ-файла: </label>
                            <div class="col-sm-10">
                     <? echo form_password('wm_pass', set_value('wm_pass', '******'),'class="form-control"'); ?>
                            </div>
                        </div>
				
						<div class="form-group">
                            <label class="col-sm-2 control-label">Ключ-файл: [<? echo $this->config->item('wm_key_date') ;?>]</label>
                            <div class="col-sm-10">
                                <input type="file" name="userfile" class="styled">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label">UnitPay Код магазина: </label>
                            <div class="col-sm-10">
                <? echo form_input('unitpay_address', set_value('unitpay_address', $this->config->item('unitpay_address')),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Robokassa: </label>
                            <div class="col-sm-10">
               <? echo form_dropdown('rk_status', array('0'=>'Не принимаю','1'=>'Принимаю'), $this->config->item('rk_status'),'class="select-full"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">WebMoney: </label>
                            <div class="col-sm-10">
               <? echo form_dropdown('site_pwebmoney', array('0'=>'Не принимаю','1'=>'Принимаю'), $this->config->item('site_pwebmoney'),'class="select-full"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">QIWI: </label>
                            <div class="col-sm-10">
          <? echo form_dropdown('site_pqiwi', array('0'=>'Не принимаю','1'=>'Принимаю'), $this->config->item('site_pqiwi'),'class="select-full"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Yandex.Money: </label>
                            <div class="col-sm-10">
                <? echo form_dropdown('site_pyandex', array('0'=>'Не принимаю','1'=>'Принимаю'), $this->config->item('site_pyandex'),'class="select-full"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">UnitPay: </label>
                            <div class="col-sm-10">
             <? echo form_dropdown('unitpay_status', array('0'=>'Не принимаю','1'=>'Принимаю'), $this->config->item('unitpay_status'),'class="select-full"'); ?>
                            </div>
                        </div>
								<div class="form-group">
                            <label class="col-sm-2 control-label">Показывать выбор Кол-Во: </label>
                            <div class="col-sm-10">
      <? echo form_dropdown('site_ppkolvo', array('0'=>'Не показывать','1'=>'Показывать'), $this->config->item('site_ppkolvo'),'class="select-full"'); ?>
                            </div>
                        </div>
                        <div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                     
							<? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?>
                        </div>

                    </div>
                </div>

<? echo form_close(); ?>
