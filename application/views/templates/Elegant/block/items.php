<aside class="side-right">
<div class="block">
<div class="block-top">
Действующие акции
</div>
<?php include "application/views/templates/Lite/block/aktc.php"; ?>
</div>
		
					
					
				
			
 </aside>
<aside class="side-middle">
<div class="c-detail">
<div class="view-item">
<span class="lcol">Вид товара</span>
<a class="item-block cur"></a>
<a class="item-list"></a>
</div>

</div>
<div class="content-item">
 
		<? if(count($items)): foreach($items as $item): ?>	
<a class="c-item" href="<?php echo base_url("product/".$item->id); ?>">
<span class="coast"><? echo round($item->price_final*100)/100;?> руб.</span>
 <?php
 $nis = '2';
 if ($item->type_Item == $nis) { 
 
 echo	'<span class="stock">- '.$item->skidka.'%</span>';
 }
?>
<span class="title"><? echo $item->name; ?></span>
<span class="img"><img src="<? echo $item->iconurl; ?>" alt="<? echo $item->name; ?>"></span>
<span class="cat">
</span></a>

					<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>
  </a></div> </aside>