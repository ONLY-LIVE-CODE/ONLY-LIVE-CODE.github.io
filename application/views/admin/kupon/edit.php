
<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title"><? echo empty($kupon->id) ? 'Создание купона' : 'Редактировать купон: ' . $kupon->kupon_name; ?></h6></div>
                    <div class="panel-body">

<? echo validation_errors(); ?>
<? echo form_open(); ?>
 <div class="form-group">
                            <label class="col-sm-2 control-label">Купон: </label>
                            <div class="col-sm-10">
       <? echo form_input('kupon_name', set_value('kupon_name', $kupon->kupon_name),'class="form-control"'); ?>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Процент скидки: </label>
                            <div class="col-sm-10">
  <? echo form_input('percentage', set_value('percentage', $kupon->percentage), 'class="form-control"'); ?>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Количество использований: </label>
                            <div class="col-sm-10">
<? echo form_input('pago', set_value('pago', $kupon->pago), 'placeholder="0 - бесконечное число использований" class="form-control"'); ?>
                            </div>
                        </div>
	
		
	<div class="form-group">
                            <label class="col-sm-2 control-label">ID товара:</label>
                            <div class="col-sm-10">
	
	<? echo form_input('goods', set_value('goods', $kupon->goods), '0 - для всех товаров" class="form-control"'); ?>
 </div>
                        </div>
						
							<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                <? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?></div>
	
<? echo form_close(); ?>
 </div>
                        </div>
						