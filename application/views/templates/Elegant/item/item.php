
<? if(count($items)): foreach($items as $item): ?>

 
<?php include "application/views/onko_oplat.php"; ?>


<aside style="padding: 50px;" class="side-middle">
<div class="speedbar">
<a href="/" class="home"></a>
<span class="green"><? echo $item->name; ?></span>
</div>
<div class="item-view">
<div class="poster">
<div class="title"><? echo $item->name; ?></div>
<div class="sp-slideshow">

    <input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
    <label for="button-1" class="button-label-1"></label>

    <input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
    <label for="button-2" class="button-label-2"></label>

    <input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
    <label for="button-3" class="button-label-3"></label>

    <input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
    <label for="button-4" class="button-label-4"></label>
	
	  <input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
    <label for="button-5" class="button-label-5"></label>

    <label for="button-1" class="sp-arrow sp-a1"></label>
    <label for="button-2" class="sp-arrow sp-a2"></label>
    <label for="button-3" class="sp-arrow sp-a3"></label>
    <label for="button-4" class="sp-arrow sp-a4"></label>
   <label for="button-5" class="sp-arrow sp-a5"></label>

    <div class="sp-content">
        <div class="sp-parallax-bg"></div>
        <ul class="sp-slider clearfix">
		    <li><img src="<? echo $item->iconurl; ?>" /></li>
            <li><img src="<? echo $item->foto1; ?>" /></li>
            <li><img src="<? echo $item->foto2; ?>"/></li>
            <li><img src="<? echo $item->foto3; ?>" /></li>
            <li><img src="<? echo $item->foto4; ?>" /></li>
        </ul>
    </div><!-- sp-content -->
</div><!-- sp-slideshow -->

<style>
sp-slideshow {
    position: relative;
    margin: 10px auto;
    width: 80%;
    max-width: 1000px;
    min-width: 260px;
    height: 460px;
    border: 10px solid #fff;
    border: 10px solid rgba(255,255,255,0.9);
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.sp-content {
    background: #7d7f72 url(../images/grid.png) repeat scroll 0 0;
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.sp-parallax-bg {
    background: url(../images/map.png) repeat-x scroll 0 0;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.sp-slideshow input {
    position: absolute;
    bottom: 15px;
    left: 50%;
    width: 9px;
    height: 9px;
    z-index: 1001;
    cursor: pointer;
    opacity: 0;
}

.sp-slideshow input + label {
    position: absolute;
    bottom: 15px;
    left: 50%;
    width: 6px;
    height: 6px;
    display: none;
    z-index: 1000;
    border: 3px solid #fff;
    border: 3px solid rgba(255,255,255,0.9);
    border-radius: 50%;
    transition: background-color linear 0.1s;
}
.sp-slideshow input:checked + label {
    background-color: #fff;
    background-color: rgba(255,255,255,0.9);
}

.sp-selector-1, .button-label-1 {
    margin-left: -36px;
}

.sp-selector-2, .button-label-2 {
    margin-left: -18px;
}

.sp-selector-4, .button-label-4 {
    margin-left: 18px;
}
.sp-selector-5, .button-label-5 {
    margin-left: 36px;
}
.sp-arrow {
    position: absolute;
    top: 50%;
    width: 28px;
    height: 38px;
    margin-top: -19px;
    display: none;
    opacity: 0.8;
    cursor: pointer;
    z-index: 1000;
    background: transparent url(../images/arrows.png) no-repeat;
    transition: opacity linear 0.3s;
}
.sp-arrow:hover{
    opacity: 1;
}
.sp-arrow:active{
    margin-top: -18px;
}
.sp-selector-1:checked ~ .sp-arrow.sp-a2,
.sp-selector-2:checked ~ .sp-arrow.sp-a3,
.sp-selector-3:checked ~ .sp-arrow.sp-a4,
.sp-selector-4:checked ~ .sp-arrow.sp-a5 {
    right: 15px;
    display: block;
    background-position: top right;
}
.sp-selector-2:checked ~ .sp-arrow.sp-a1,
.sp-selector-3:checked ~ .sp-arrow.sp-a2,
.sp-selector-4:checked ~ .sp-arrow.sp-a3,
.sp-selector-5:checked ~ .sp-arrow.sp-a4 {
    left: 15px;
    display: block;
    background-position: top left;
}
.sp-slideshow input:checked ~ .sp-content {
    transition: background-position linear 0.6s, background-color linear 0.8s;
}
.sp-slideshow input:checked ~ .sp-content .sp-parallax-bg {
    transition: background-position linear 0.7s;
}
input.sp-selector-1:checked ~ .sp-content {
    background-position: 0 0;
    background-color: #727b7f;
}

input.sp-selector-2:checked ~ .sp-content {
    background-position: -100px 0;
    background-color: #7f7276;
}

input.sp-selector-3:checked ~ .sp-content {
    background-position: -200px 0;
    background-color: #737f72;
}

input.sp-selector-4:checked ~ .sp-content {
    background-position: -300px 0;
    background-color: #79727f;
}
input.sp-selector-5:checked ~ .sp-content {
    background-position: -400px 0;
    background-color: #7d7f72;
}
input.sp-selector-1:checked ~ .sp-content .sp-parallax-bg {
    background-position: 0 0;
}

input.sp-selector-2:checked ~ .sp-content .sp-parallax-bg {
    background-position: -200px 0;
}

input.sp-selector-3:checked ~ .sp-content .sp-parallax-bg {
    background-position: -400px 0;
}

input.sp-selector-4:checked ~ .sp-content .sp-parallax-bg {
    background-position: -600px 0;
}
input.sp-selector-5:checked ~ .sp-content .sp-parallax-bg {
    background-position: -800px 0;
}
.sp-slider {
    position: relative;
    left: 0;
    width: 500%;
    height: 100%;
    list-style: none;
    margin: 0;
    padding: 0;
    transition: left ease-in 0.8s;
}
.sp-slider > li {
  color: #fff;
  width: 600px;
  box-sizing: border-box;
  height: 100%;
  /* padding: 0 60px; */
  float: left;
  text-align: center;
  opacity: 0.4;
  transition: opacity ease-in 0.4s 0.8s;
}
input.sp-selector-1:checked ~ .sp-content .sp-slider {
    left: 0;
}

input.sp-selector-2:checked ~ .sp-content .sp-slider {
    left: -100%;
}

input.sp-selector-3:checked ~ .sp-content .sp-slider {
    left: -200%;
}

input.sp-selector-4:checked ~ .sp-content .sp-slider {
    left: -300%;
}
input.sp-selector-5:checked ~ .sp-content .sp-slider {
    left: -400%;
}
input.sp-selector-1:checked ~ .sp-content .sp-slider > li:first-child,
input.sp-selector-2:checked ~ .sp-content .sp-slider > li:nth-child(2),
input.sp-selector-3:checked ~ .sp-content .sp-slider > li:nth-child(3),
input.sp-selector-4:checked ~ .sp-content .sp-slider > li:nth-child(4),
input.sp-selector-5:checked ~ .sp-content .sp-slider > li:nth-child(5){
    opacity: 1;
}
</style>



</div>
<ul class="item-sub">
<li class="item-type">
	
							<!--
							<span> <? echo $item->category; ?> </span>
							-->

	

                          




	
														
                    

                        

</li>
<li><span class="item-order">Товар в наличии</span></li>
<li><span class="item-order">Моментальная доставка</span></li>
<li><span class="item-order">Безопасная сделка</span></li>
<li><span class="item-order">Выгодная цена</span></li>

<br>
<div style="padding: 5px; margin-left: 5px;" class="block-cont">
<div class="client-info">
<div class="num">1</div>
<div class="msg">
Весь товар загруженный у нас,
проходит строгую проверку
перед продажей.
</div>
</div>
<div class="client-info">
<div class="num">2</div>
<div class="msg">
Обращаться с заменой аккаунта можно только в течении 20 минут, если обратились позднее аккаунт замене не подлежит.
</div>
</div>
<div class="client-info">
<div class="num">3</div>
<div class="msg">
Не весь товар является полностью нашим.
При покупке вы соглашаетесь с правилами,
претензий к магазину не иметь.
Либо откажитесь от покупки.
</div>
</div>
</div>

</ul>
<div class="item-detail">
<div class="price">
<? echo round($item->price_final*100)/100;?><span>руб.</span> </div>
<a href="#pay" class="buying"><b>Купить</b></a>
</div>
</div>
<ul class="tab-nav">
<li class="cur"><span>Описание</span></li></ul>
<div class="tab-box cur">
<p><? echo $item->descr; ?></p>


</div>
<div class="tab-box">
<ul class="default">
<p style="text-align: center;"><strong>Гарантия на аккаунты:</strong><br>
<span style="color:#FF0000"><strong>Только на момент продажи</strong></span></p>

<p style="text-align: center;">Если после покупки прошло более 20 минут, с нас снимается ответственность за аккаунт.</p>

<p style="text-align: center;">Если что-то случится после 20 минут, замены не будет (не обижайтесь, такие правила)</p>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;"><strong>Гарантия на ключи:</strong></p>

<p style="text-align: center;">Замена по ключам присуствует но при некоторых условиях</p>

<p style="text-align: center;"><span style="color:#FF0000"><span style="line-height:1.6em">Доказать что ключ не активирован на Ваш аккаунт.</span></span></p>

<p style="text-align: center;">В случае если с вашей стороны не будет доказательств, будет отказ в замене.</p>
</ul>
</div>
<div class="tab-box">
<iframe class="lcol frame" style="margin-left:-10px;" width="432" height="300" src="http://www.youtube.com/embed/JOgZZdQnyuo?rel=0" frameborder="0"></iframe>
</div>



<!--
<ul class="tab-nav">
<li class="cur"><span>Описание</span></li> </ul>
<div class="tab-box cur">
<p>
<? echo $item->descr; ?></p>

-->

							
							
							
											
							
							
							

							
							
							
							

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

</aside>