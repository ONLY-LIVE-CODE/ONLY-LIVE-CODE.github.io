


<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo '<div class="alert alert-success">Данные успешно сохранены!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>


<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title">Блокировка по IP</h6></div>
                    <div class="panel-body">

					<table class="table table-striped table-bordered">
				
					
                        <thead>
							
                            <tr>
                             	<th>IP адрес</th>
		<th>Дата добавления</th>
		<th>Удалить</th>
                            </tr>
                        </thead>
                        <tbody>
					<? if(count($ips)): foreach($ips as $page): ?>
                            <tr>
							
                                <td><? echo anchor($page->id, $page->ip); ?></td>
			<td>
			  <a href="/<? echo ('admin/security/edit/'.$page->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Редактировать"><i class="fa fa-pencil"></i></a>
                             
			
			
			</td>
			<td>
			 <a href="/<? echo ('admin/security/delete/'.$page->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Удалить"><i class="fa fa-trash-o"></i></a>
                                
			
			</td>
														
                            </tr>
							
							<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Записи отсутствуют</td>
	</tr>
<? endif; ?>

                        </tbody>
						
						

                    </table>

		
	</br>
		<div class="form-actions text-right">
                       <? echo anchor('admin/security/edit','<i class="glyphicon glyphicon-plus"></i> Заблокировать IP Адрес',array('class'=>'pull-right btn btn-small btn-primary')); ?>

                        </div>
		
		

	 </div>
   </div>
<? echo form_close(); ?>
