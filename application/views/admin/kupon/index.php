<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title">Добавление нового пользователя</h6><? echo anchor('admin/kupon/edit','<i class="glyphicon glyphicon-plus"></i> Создать один купон',array('class'=>'pull-right btn btn-small btn-primary')); ?><? echo anchor('admin/kupon/edit_more','<i class="glyphicon glyphicon-plus"></i> Создать несколько купонов',array('class'=>'pull-right btn left btn-small btn-primary')); ?>
</div>
                        <div class="table-responsive">
<table class="table table-striped table-bordered">
				
					
					
   <thead>
							
                            <tr>
		<th>Купон</th>
                <th>Скидка</th>
				<th>Использован</th>
				<th>Исполь-ий</th>
				<th >ID товара</th>
		<th>Изменить</th>
		<th>Удалить</th>
   </tr>
                        </thead>
                        <tbody>
<? if(count($kupons)): foreach($kupons as $kupon): ?>
		<tr>
			<td><? echo anchor('admin/kupon/edit/'.$kupon->id, $kupon->kupon_name); ?></td>
                        <td><? echo anchor('admin/kupon/edit/'.$kupon->id, $kupon->percentage); ?></td>
						<td>   <?php echo $kupon->order ?></td>
						<td>   <?php if($kupon->pago == 0) {
echo 'Бесконечно ';
}				
else { echo $kupon->pago; } ?></td>
							 <td>   <?php if($kupon->goods == 0) {
echo 'Все ';
}				
else { echo $kupon->goods; } ?></td>
			<td>
			 <a href="/<? echo ('admin/kupon/edit/'.$kupon->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Редактировать"><i class="fa fa-pencil"></i></a>
                          
			</td>
			<td>
			 <a href="/<? echo ('admin/kupon/delete/'.$kupon->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Удалить"><i class="fa fa-trash-o"></i></a>
                                
								  
			
			
			</td>
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="7">Вы ещё не создавали купонов!</td>
	</tr>
<? endif; ?>

    </tbody>
						
						

                    </table>
</div></div>
