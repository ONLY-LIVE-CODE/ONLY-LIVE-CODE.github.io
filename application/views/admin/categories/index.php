
<div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Категории</h6></div>
                <div class="table-responsive">
<table class="table table-striped table-bordered">
				
					
                        <thead>
							
                            <tr>
                              	<th>ID</th>
			<th>Порядок</th>
			<th>Название</th>
			<th>Редактировать</th>
			<th>Удалить</th>
                            </tr>
                        </thead>
                        <tbody>
					<? if(count($categories)): 
	foreach($categories as $category): ?>
                            <tr>
							
                                <td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $category->id; ?>"><? echo $category->id; ?></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $category->id; ?>"><? echo $category->sort; ?></a></center></td>
			<td><center><a style="color: #000;text-decoration: none;" href="/admin/categories/edit/<? echo $category->id; ?>"><? echo $category->title; ?></a></center></td>
			<td><center> <a href="/<? echo ('admin/categories/edit/'.$category->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Редактировать"><i class="fa fa-pencil"></i></a>
                             </center></td>
			<td><center>
				 <a href="/<? echo ('admin/categories/delete/'.$category->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Удалить"><i class="fa fa-trash-o"></i></a>
                                
								   
		
			
			</center></td>
	
														
                            </tr>
	<? endforeach; ?>
                            <? else: ?>
	<tr>
		<td colspan="3">Категории отсутствуют</td>
	</tr>
<? endif; ?>
                        </tbody>
						
						

                    </table>
					
					
					
					   </div>
            </div>
