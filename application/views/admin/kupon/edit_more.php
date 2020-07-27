<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title"><? echo empty($kupon->id) ? 'Создание купонов' : 'Редактировать купон: ' . $kupon->kupon_name; ?></h6></div>
                    <div class="panel-body">


<? echo validation_errors(); ?>
<? echo form_open(); ?>
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
                            <label class="col-sm-2 control-label">ID товара: </label>
                            <div class="col-sm-10">
        <? echo form_input('goods', set_value('goods', $kupon->goods), 'placeholder="0 - для всех товаров" class="form-control"'); ?>
		
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Слог купона: </label>
                            <div class="col-sm-10">
      	<input type='text' class="form-control" name='slog' placeholder="Например: FULLHACK SHOP" id="slog" value=''>
	
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label">Количество купонов: </label>
                            <div class="col-sm-10">
 <input type='text' class="form-control" name='colvo' id="colvo" placeholder="Максимально 20 за раз" value=''>

                            </div>
                        </div>
	 


	<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                     <input type="submit"  name="submit_more" class="btn btn-primary" value="Создать" /></div>
	
<? 
 if(isset($_POST['submit_more'])) {
$procent = $_POST['percentage'];
   $used = $_POST['pago'];
   $id_good = $_POST['goods'];
   $kupon = $_POST['colvo'];
   $slog = $_POST['slog'];

  
   if(20 >= $kupon) {
   for($i = 1; $i<=$kupon; $i++){ 
   $rand = ''.$slog.''.rand(1,100000).'';
 $query = mysql_query("INSERT INTO `kupons` (`kupon_name`,`pago`,`goods`,`percentage`) VALUES ('$rand','$used','$id_goods','$procent')");
 header('Location:/admin/kupon');
}  
}
else{
echo 'Нельзя создать больше 20-и купонов за раз';
}
   }

?>
<? echo form_close(); ?>

  </div>  </div>