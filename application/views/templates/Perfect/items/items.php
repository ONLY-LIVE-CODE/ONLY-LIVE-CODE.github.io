
<table class="table table-bordered">
	<thead>
	</thead>
	<tbody>
	<tb>&nbsp;</tb>
	<? if(count($items)): foreach($items as $item): ?>	
	
 <div class="item-loop">

        <div class="poster">

            <? echo empty($item->iconurl) ? '' : '<img style="width:60px;height:60px;cursor:pointer;" src="'.$item->iconurl.'" />'; ?>
            <a class="modgl" data-toggle="modal" data-target="#myModal_<? echo $item->id;?>">
<a href='<?php echo base_url("product/".$item->id); ?>'>
            <span class="macpay-snapprice price"><? echo round($item->price_rub*100)/100;?> РУБЛЕЙ</span></a></a>

        </div>

        <div style="padding-top: 8px;" data-id="<? echo $item->count == "Файл" ? "" : $item->id ;?>" class="title">
            <? echo $item->name; ?>
<center><span style="color: #7e8d95; margin-left: 0px;font-size: 14px; float: left;margin-top: 4px;" class="macpay-snapprice price">В Наличии: <? echo $item->count; ?> Шт.</span> <input type="text" class="form-control input-micro" id="number-of-items-<? echo $item->id;?>" style="width:30px; height:20px;display:none;padding:0;" value="<? echo $item->min_order;?>">

        </div>

      <div class="block-title2">
 <center><a href='<?php echo base_url("product/".$item->id); ?>' style="color:#fff;">Kупить</a></center>
 </div>   

 </div>   

<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>
	</tbody>
</table>