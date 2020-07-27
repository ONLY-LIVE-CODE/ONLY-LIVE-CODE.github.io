<div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Страницы</h6></div>
                <div class="table-responsive">
<table class="table table-striped table-bordered">
				
					
                        <thead>
							
                            <tr>
                               <th>Заголовок</th>
		<th>Изменить</th>
		<th>Удалить</th>
                            </tr>
                        </thead>
                        <tbody>
						<? if(count($pages)): foreach($pages as $page): ?>
                            <tr>
							
                               	<td><center><? echo anchor('admin/page/edit/'.$page->id, $page->title); ?></center></td>
                                <td class="text-center">
                             
							   <a href="/<? echo ('admin/page/edit/'.$page->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Редактировать"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>
								 <a href="/<? echo ('admin/page/delete/'.$page->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Удалить"><i class="fa fa-trash-o"></i></a>
                                
								   
                                </td>
														
                            </tr>
	<? endforeach; ?>
                            <? else: ?>
	<tr>
		<td colspan="3">Записи отсутствуют<</td>
	</tr>
<? endif; ?>
                        </tbody>
						
						

                    </table>
					
					
					
					   </div>
            </div>
