<aside class="side-right">
<div class="block">
<div class="block-top">
Действующие акции
</div>
<?php include "application/views/templates/Lite/block/aktc.php"; ?>
</div>					
					
				
			
 </aside>
 
 
 <?php include "application/views/templates/Elegant/block/lndex.php"; ?>
 
<aside class="side-middle">
<div class="landing landing-block4">
	<div class="container">
		<div class="row">
			<div class="col-xs-9">
				<p><strong>Каталог Товаров</strong> в нашем магазине более 100 товаров</p>
				<p class="m-t-10"> <?php foreach($categories as $category): ?>
<li class="cater"><a href="/category/<? echo ($category->id); ?>"><span><? echo ($category->title); ?></span></a></li>
					<?php endforeach; ?> </p>
			</div>
		</div>
	</div>
</div>
<div id="cat"> </div>
<br>

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
  
  
  
  <div class="landing landing-block5">
	<div class="container">
		<h3 class="text-center t_t_c" style="margin-top: 50px; text-align: center; margin-left: 400px; text-transform: capitalize;">материалы</h3>
		<div class="hr"></div>

		<div class="row m-t-50">
			<div class="col-xs-4 col-xs-offset-1">
				<div>
					<span class="icn icn-default">
						<img src="/images/materials-connect.svg">
					</span>
					<p class="title">shop@good-acc.ru</p>
					<p class="descr">Отдел Продаж</p>
				</div>
				<div class="m-t-50">
					<span class="icn icn-default">
						<img src="/images/materials-support.svg">
					</span>
					<p class="title">support@good-acc.ru</p>
					<p class="descr">Техническая поддержка</p>
				</div>
			</div>
			<div class="col-xs-5 col-xs-offset-2">
			<a href="/faq" class="t_dec_n">
				<div>
					<span class="icn icn-default">
						<img src="/images/materials-faq.svg">
					</span>
					<p class="title">F.A.Q.</p>
					<p class="descr">Ответы на популярные вопросы</p>
				</div>
			</a>
				<div class="m-t-50">
					<span class="icn icn-blue">
						<img src="/images/vk.svg">
					</span>
					<p class="title">vk.com/gdacc_ru</p>
					<p class="descr">Мы ВКонтакте</p>
				</div>
			</div> <div class="clearfix"></div>
		</div>
	</div>
</div>