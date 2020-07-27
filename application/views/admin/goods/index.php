<div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Товары</h6></div>
                <div class="table-responsive">
<table class="table table-striped table-bordered">
				
					
                        <thead>
							
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Кол-во</th>
                                <th>Цена</th>
								<th>Изменить</th>
								<th>Удалить</th>
                            </tr>
                        </thead>
                        <tbody>
						<? if(count($goods)): foreach($goods as $good): ?>
                            <tr>
							
                                <td class="text-center"><a style="color: #000;text-decoration: none;" href="/admin/goods/edit/<? echo $good->id; ?>"><? echo $good->id; ?></a></td>
                                <td class="text-center">
                                   
									<a style="color: #000;text-decoration: none;" href="/admin/goods/edit/<? echo $good->id; ?>"><? echo $good->name; ?></a>
                                </td>
								   <td class="text-center">
								    <a style="color: #000;text-decoration: none;" href="/admin/goods/edit/<? echo $good->id; ?>"><? echo $good->count; ?></a>
                                   
                                </td>
								   <td class="text-center">
                                     <? echo $good->price_rub * $good->min_order ?> Руб за <? echo $good->min_order ?> шт
                                </td>
                                <td class="text-center">
                             
							   <a href="/<? echo ('admin/goods/edit/'.$good->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Редактировать"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>
								 <a href="/<? echo ('admin/goods/delete/'.$good->id); ?>" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Удалить"><i class="fa fa-trash-o"></i></a>
                                
								   
                                </td>
														
                            </tr>
	<? endforeach; ?>
                            <? else: ?>
	<tr>
		<td colspan="3">Товары отсутствуют</td>
	</tr>
<? endif; ?>
                        </tbody>
						
						

                    </table>
					
					
					
					   </div>
            </div>
