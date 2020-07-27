<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title"><? echo empty($goods->id) ? 'Добавить товар' : 'Изменить товар: ' . $goods->name; ?></h6></div>
                    <div class="panel-body">


<? echo !empty($errors) ? $errors : "" ; ?>
<? echo validation_errors(); ?>
<? echo form_open_multipart();?>

<?php 
$list = array('0'=>'...');
foreach ($categories as $key => $value) 
{
	$list[$value->id] = $value->title;
}
 ?>
 <div class="form-group">
                            <label class="col-sm-2 control-label">Категория: </label>
                            <div class="col-sm-10">
                                
<?php echo form_dropdown('category', $list, $goods->category,'class="form-control"'); ?>

                                
                            </div>
                        </div>
<div class="form-group">
                            <label class="col-sm-2 control-label">На главной: </label>
                            <div class="col-sm-10">
						
                                    </label>
                                
<?php echo form_dropdown('onmain',array('0'=>'Не показывать','1'=>'Показывать'), $goods->onmain,'class="form-control"'); ?>

                                
                            </div>
                        </div>
						
						
						<div class="form-group">
                            <label class="col-sm-2 control-label">Название: </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('name', set_value('name', $goods->name),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Описание: </label>
                            <div class="col-sm-10">
                               
								<? echo form_textarea('descr', set_value('descr', $goods->descr),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Иконка (URL): </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('iconurl', set_value('iconurl', $goods->iconurl),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Фото №1: </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('foto1', set_value('foto1', $goods->foto1),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Фото №2: </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('foto2', set_value('foto2', $goods->foto2),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Фото №3: </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('foto3', set_value('foto3', $goods->foto3),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Фото №4: </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('foto4', set_value('foto4', $goods->foto4),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Цена (Рубли): </label>
                            <div class="col-sm-10">
							<div class="input-group">
                               <span class="input-group-addon">₽</span>
								<? echo form_input('price_rub', set_value('price_rub', $goods->price_rub),'class="form-control"'); ?>
							
								</div>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Тип товара: </label>
                            <div class="col-sm-10">
                               
						<?php echo form_dropdown('type_Item', array('0'=>'Обычный','2'=>'Распродажа'), $goods->type_Item,'class="form-control"'); ?>

                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Скидка(Распродажа): </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('skidka', set_value('skidka', $goods->skidka),'class="form-control"'); ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-2 control-label">Мин. кол-во для заказа: </label>
                            <div class="col-sm-10">
                               
								<? echo form_input('min_order', set_value('min_order', $goods->min_order),'class="form-control"'); ?>
                            </div>
                        </div>
							<? if($goods->sell_method == 0): ?>
						<div class="form-group" >
                            <label class="col-sm-2 control-label">Товар: </label>
                            <div class="col-sm-10">
                               
							<? echo form_textarea('goods', set_value('goods', $goods->goods),'class="required form-control"'); ?>
							
                            </div>
                        </div>
						
							<? elseif($goods->sell_method == 1): ?>
		<td>Товар (файл):</br>
		<span class="label label-success"><? echo $goods->goods;?></span></td>
		<td><input type="file" name="userfile" size="20" class="form-control"/></td>
	<? endif; ?>
							
							<tr style="display: none;">
		<td style="display: none;>Метод продажи:</td>
		<td style="display: none;">
			<div class="btn-group" style="display: none;" data-toggle="buttons" data-toggle-name="sell_method">
			  <label data-id="0" class="btn btn-primary <? echo $goods->sell_method == 0 ? 'active' : ''?>">
				<input style="display: none;" type="radio">Строки
			  </label>
			  <label data-id="1" style="display: none;" class="btn btn-primary <? echo $goods->sell_method == 1 ? 'active' : ''?>">
				<input  style="display: none;" type="radio">Файл
			  </label>
			</div>
			 <? echo form_hidden('sell_method', set_value('sell_method', $goods->sell_method),'style="display: none;""'); ?>
		</td>
	</tr>
						
<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                         <? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?>
                        </div>
	

<? echo form_close(); ?>
</div></div>