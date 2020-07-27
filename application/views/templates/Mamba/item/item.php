
<? if(count($items)): foreach($items as $item): ?>

 
<?php include "application/views/onko_oplat.php"; ?>


<div class="information"><div class="section">
  <h1 style="margin-top: 8px; margin-left: 13px; color: #45b29d; font-size: 18px; line-height: 29px; font-weight: bold;">Купить <? echo $item->name; ?></h1>
  <div style="margin-right: 0px;" class="center2">
            <div class="cont">
              
                <div style="
    height: 270px;
">
              <div class="gamepic"><img alt="" src="<? echo $item->iconurl; ?>" style="
    width: 450px;
    height: 255px;
"></div>
              <div style="
    background: rgba(69, 178, 157, 0.09);
    padding: 4px 7px;
    color: #59545E;
"><div style="
    font-weight: bold;
    color: #309380;
    font-size: 15px;
">Способы оплаты</div>
  Вы можете оплатить данный товар наиболее подходящей для Вас платежной системой.
</div><div style="
    background: rgba(69, 178, 157, 0.09);  
    color: #59545E;
    margin-top: 15px;
    padding: 4px 7px;"><div style="font-weight: bold;  color: #309380;  font-size: 15px;
">Моментальная доставка</div>Данные придут через несколько секунд после покупки, на Ваш почтовый ящик!
</div>
<div class="cont" style="margin-top: 15px; ">


 <div class="value"><span><? echo round($item->price_final*100)/100;?><i class="fa fa-rub" style="margin-left: 5px;background: url(/011/rur1.png) no-repeat;  width: 14px;  height: 16px;"></i></span></div>
 <a style="color:#fff;" class="add" href="#pay">Купить</a>

</div>

</div>              </div>
              
           

                    </div>  

                    </div>

  </div>
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