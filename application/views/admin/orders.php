<div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Заказы</h6></div>
                <div class="table-responsive">
<table class="table table-striped table-bordered">
				
					
                        <thead>
							
                            <tr>
                             <th>ID</th>
		<th>Примечание</th>
		<th>Дата</th>
		<th>Товар</th>
		<th style="min-width:70px;">Кол-во</th>
		<th>Цена</th>
		<th>E-mail</th>
		<th>IP</th>
		<th>Скачать</th>
                            </tr>
                        </thead>
                        <tbody>
				<? if(count($orders)): foreach($orders as $order): ?>
                            <tr>
							
                            <td><? echo $order->id; ?></td>
			<td><? echo $order->bill; ?></td>
			<td style="font-size:11px;"><? echo date('d-m-Y H:i:s',$order->date); ?></td>
			<td style="font-size:11px;"><? echo $order->name; ?></td>
			<td><? echo $order->count; ?></td>
			<td><? echo $order->price.' '.$order->fund; ?></td>
			<td><? echo $order->email; ?></td>
			<td><? echo $order->ip_address; ?></td>
		
		<td>
		<a download="" href="/payorder/<? echo $order->bill; ?>.txt" class="btn btn-default btn-icon btn-xs tip" title="" data-original-title="Скачать купленный товар"><i class="fa fa-download"></i></a>
                   </td>
		
														
                            </tr>
	<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="8">Покупки отсутствуют</td>
	</tr>
<? endif; ?>
                        </tbody>
						
						

                    </table>
					
					
					
					   </div>
            </div>
