
</style>
<? if(count($items)): foreach($items as $item): ?>
<?php include "application/views/onko_oplat.php"; ?>
<div class="speedbar">
   <a href="/" class="home"></a>
   <span>Купить <? echo $item->name; ?></span>
</div>
<div id="full-page">
   <div class="lcol" style="width: 500px;">
      <div id="poster-box">
         <center>
            <div class="general">
               <img src="<? echo $item->iconurl; ?>" style=" height: 100%; width: 500px;">
            </div>
         </center>
      </div>
   </div>
   <div id="item-caption">
      <ul class="sustem">
         <li style="overflow: hidden;  text-overflow: ellipsis;  white-space: nowrap;"><b><? echo $item->name; ?></b></li>
         <li style="color: #108ade;font-size: 34px;padding: 34px;text-align: center;"><b><? echo round($item->price_final*100)/100;?> руб.</b></li>
         <li style="font-size: 14px;background-color: #e9edf2;">
            Данные придут через несколько секунд после покупки, на Ваш почтовый ящик!
         </li>
      </ul>
      <div id="coast-row">
         <div class="rcol">
            <a class="buying right" href="#pay">
            <b>Купить</b>
            </a>
         </div>
      </div>
   </div>
</div>
<div style="display:none">
</div>
<div id="full-item-info">
   <ul class="tab-nav">
      <li class="cur"><span>Описание</span></li>
   </ul>
   <div class="tab-box cur" style="display: block;">
      <? echo $item->descr; ?>
   </div>
</div>
<style>
   aside#side-right {
   display: none;
   }
</style>

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