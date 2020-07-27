    <link href="/templates/oplata.css" rel="stylesheet" type="text/css">

	<script src="/templates/payment.js"></script>
<script src="/assets/js/app.js"></script>

<script src="/assets/js/popup_buy.js"></script>


<a href="#x" class="overlay" id="pay"></a>
<div class="popup">

            <div style="color: #fff;" class="title_modal">Покупка <? echo $item->name; ?></div>


  <div class="select_pay">Выберите способ оплаты:</div>
<div style="margin-left: 56px;" id="paym" class="tabs"> 
    <ul class="tabNavigation"> 
       <?php
if(1 == config_item('site_pqiwi')){
echo ' <li><a class="" href="#qiwi"><img src="/templates/qiwi.png"></a></li>';
		
}
else{
}?>	
       <?php
if(1 == config_item('site_pyandex')){
echo ' <li><a class="" href="#yandex"><img src="/templates/yandex.png"></a></li>';
}
else{
}?>	
      <?php
if(1 == config_item('site_pwebmoney')){
echo '  <li><a class="" href="#wm"><img src="/templates/webmoney.png"></a></li>';
		
}
else{
}?>	
         <?php
if(1 == config_item('unitpay_status')){
echo ' <li><a class="" href="#unitpay"><img src="/templates/unitpay.jpg"></a></li>';
		
}
else{
}?>	
         <?php
if(1 == config_item('rk_status')){
echo ' <li><a class="" href="#rk"><img src="/templates/rk.png"></a></li>';
		
}
?>	

    </ul>
	
<form onsubmit="return false;">
<input style="margin-top: 15px; width: 290px;" class="captcha-shop-input" placeholder="Введите свой email" name="email" id="alert-box-email" type="email" required="">
<input style="margin-top: -45px;width: 120px;margin-left: 327px;" name="count"  id="end-number"  class="captcha-shop-input" placeholder="Кол-во" required="">
</form>
<div id="wm" style="display: block;"> 

<br>
<center>
<?php
if(1 == config_item('site_pwebmoney')){
echo '<input type="submit" class="buy_game" onclick="setWayForMoney(1);setEmail();" style=" width: 426px; right: 38px; position: relative; " name="" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal"  value="перейти к оплате">';
}
else{
}
?>
</center>

</div> 
<div id="qiwi" style="display: none;"> 

<br>
<center>
<?php
if(1 == config_item('site_pqiwi')){
echo '<input type="submit" class="buy_game" onclick="setWayForMoney(4);setEmail();" style=" width: 426px; right: 38px; position: relative; " name="" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal"  value="перейти к оплате">';
}
else{
}
?>	
</center>

</div> 
<div id="yandex" style="display: none;"> 
<br>
<center>
<?php
if(1 == config_item('site_pyandex')){
echo '<input type="submit" class="buy_game" onclick="setWayForMoney(3);setEmail();" style=" width: 426px; right: 38px; position: relative; " name="" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal"  value="перейти к оплате">';
}
else{
}
?>
</center>
</div> 
<div id="unitpay" style="display:  none;"> 
<br>
<center>
<?php
if(1 == config_item('unitpay_status')){
echo '<input class="buy_game" onclick="setWayForMoney(6);setEmail();" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal" class="buy_now" type="button" style=" width: 426px; right: 38px; position: relative; " value="перейти к оплате">';
}
else{
}
?>
</center>
</div> 
<div id="rk" style="display:  none;"> 
<br>
<center>
<?php
if(1 == config_item('rk_status')){
echo '<input type="submit" class="buy_game" onclick="setWayForMoney(7);setEmail();" style=" width: 426px; right: 38px; position: relative; " name="" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal"  value="перейти к оплате">';
}
?>
</center>
</div> 

</div> 

			
        </div>