
<? if(count($items)): foreach($items as $item): ?>

 
<?php include "application/views/onko_oplat.php"; ?>

<div id="dle-content">
<style>

 
ul.tabNavigation {
list-style: none;
margin-left: 20px;
padding: 0;
}
 
ul.tabNavigation li {
display: inline;
}
 
ul.tabNavigation li a {
padding: 24px 18px 6px 18px;
color: #000;
text-decoration: none;
}
 
ul.tabNavigation li a.selected,
ul.tabNavigation li a.selected:hover {
background: rgba(177, 182, 184, 0.24);
color: #000;
border-radius: 4px;
}
 
ul.tabNavigation li a:hover {
background: rgba(177, 182, 184, 0.24);
color: #000;
border-radius: 4px;
-webkit-transition: all ease .9s;
-moz-transition: all ease .9s;
-ms-transition: all ease .9s;
-o-transition: all ease .9s;
transition: all ease .9s;    
}
 
ul.tabNavigation li a:focus {
outline: 0;
}
 
div.tabs div {

}
 
div.tabs div h2 {
margin-top: 0;
}
</style>

<div class="breadcrumb">
<a href="/">Главная</a>
<div class="crumb"></div>
<a href="#"><? echo $item->name; ?></a>
</div>
<br>
 
<h1 itemprop="name">
<? echo $item->name; ?>
</h1>
<div class="big-info">
<div class="inf-left">
<div class="gallery-block-one">
 <div class="gallery" style="overflow: hidden; width: 475px; height: 272px;">
<img src="<? echo $item->iconurl; ?>" style="display:inline;height:267px;width:475px;">
</div>
  
  <div class="buy-block">
<div class="big-price">
<span itemprop="price"><? echo round($item->price_final*100)/100;?></span> руб.
</div>
<meta itemprop="priceCurrency" content="RUR">
<div style="height: 15px;" class="safe"></div>
<a href="#pay"><div class="buy-button">Купить</div></a> 
  

</div>
</div>
<div class="inf">
<div style="font-weight: bold;">Моментальная доставка</div>
Данные придут через несколько секунд после покупки, на Ваш почтовый ящик!
</div>    
    
<div id="goods">
<nav class="main-tabs" style="width: 787px;margin-top: 10px;">
<div class="op">Описание</div>

<div class="info">
<? echo $item->descr; ?>
</div>

</nav></div>
</div></div>
</div>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Товар не найден...Приходите позже!</td>
	</tr>
<? endif; ?>
<? if(count($items)) : ?>
<div class="panel" style="display:none;">
	<div class="row">
	  <div class="col-lg-3">
		<label class="control-label" for="item">Товар:</label>
		<select class="form-controler input-small" name="item" id="item-selected">
		<? foreach($items as $item): ?>
			<option value="<? echo $item->id; ?>" data-id="<? echo $item->id; ?>" data-min_order="<? echo $item->min_order; ?>"><? echo $item->name; ?></option>
		<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-2">
		<label class="control-label" for="funds">Валюта:</label>
		<select class="form-controler input-small"  name="funds" id="fundsSelect">
			<? foreach($funds as $fund): ?>
			<option value="<? echo $fund['fundid']; ?>" data-fund="<? echo $fund['fundname']; ?>"><? echo $fund['fundname']; ?></option>
			<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-3">
		<label class="control-label" for="email">E-mail:</label>
		<input type="email"  id="row-box-email" class="form-controler input-small" name="email">
	  </div>
	  <div class="col-lg-2">
		<button onclick="sendData();" type="button" class="btn btnbuy btn-primary btn-lg btn-block">Оплатить</button>
	  </div>
	</div>
</div>
<? endif; ?>