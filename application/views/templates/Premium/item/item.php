
<? if(count($items)): foreach($items as $item): ?>
<?php include "application/views/onko_oplat.php"; ?>
<div id="middle">
 <div>
 <!-- <body> -->
 <h2 class="good-title"><span><? echo $item->name; ?></span> </h2>
 <div class="cnt">
 <div class="good_top">
 <div class="good_img">
 <script type="text/javascript">
//['original_img_url','org_width','org_height','resized_img_url','res_width','res_height']
var allEntImgs6=[['<? echo $item->foto1; ?>',0,0,'<? echo $item->foto1; ?>',240,210],['<? echo $item->foto2; ?>',0,0,'<? echo $item->foto2; ?>',240,210],['<? echo $item->foto3; ?>',0,0,'<? echo $item->foto3; ?>',240,210]];
</script>
 <script type="text/javascript">
 function _bldCont(indx){
 var bck=indx-1;var nxt=indx+1;
 if (bck<0){bck = allEntImgs6.length-1;}
 if (nxt>=allEntImgs6.length){nxt=0;}
 var imgs='';
 if (allEntImgs6.length>1){
 for (var i=0;i<allEntImgs6.length;i++){var img=i+1;
 if(allEntImgs6[i][0].length<1){continue;}
 if (i==indx){imgs += '<b class="pgSwchA">'+img+'</b> ';}
 else {imgs += '<a class="pgSwch" href="javascript://" rel="nofollow" onclick="_bldCont('+i+');return false;">'+img+'</a> ';}
 }
 imgs = '<div align="center" style="padding:8px 0 5px 0;white-space:nowrap;overflow:auto;overflow-x:auto;overflow-y:hidden;"><a class="pgSwch" href="javascript://" rel="nofollow" onclick="_bldCont('+bck+');return false;">&laquo; Back</a> '+imgs+'<a class="pgSwch" href="javascript://" rel="nofollow" onclick="_bldCont('+nxt+');return false;">Next &raquo;</a> </div> ';}
 var hght = parseInt(allEntImgs6[indx][2]); if ($.browser.msie) { hght += 28; };
 _picsCont = '<div id="_prCont" style="position:relative;"><img alt="" border="0" src="' + allEntImgs6[indx][0] + '"/>'+imgs+'</div>';
 new _uWnd('wnd_prv', "Изображения товара", 10, 10, { waitimages:300000, autosizewidth:1, hideonresize:1, autosize:1, fadetype:1, closeonesc:1, align:'center', min:0, max:0, resize:1 }, _picsCont);
 }
 </script>
 
 <img alt="" src="<? echo $item->foto1; ?>" class="gphoto big" onclick="_bldCont1(6, this.getAttribute('idx'));" id="ipreview" idx="0" title="Кликните для увеличения изображения">
 
 
 <img alt="" src="<? echo $item->foto2; ?>" class="gphoto small" onclick="var el=getElementById('ipreview'); el.src='<? echo $item->foto1; ?>'; el.setAttribute('idx',0);">
 <img alt="" src="<? echo $item->foto3; ?>" class="gphoto small" onclick="var el=getElementById('ipreview'); el.src='<? echo $item->foto4; ?>'; el.setAttribute('idx',1);">
 
 <img alt="" src="<? echo $item->foto4; ?>" class="gphoto small" onclick="var el=getElementById('ipreview'); el.src='<? echo $item->foto3; ?>'; el.setAttribute('idx',2);">
  
 </div>
 <div class="good_info">
 <div class="g_price"><span class="id-good-6-price">₽<? echo $item->price_final; ?></span> </div>
 <div class="g_buttons">
  <a type="button" href="#pay" class="big_more" style="float: right; border: none; border-radius: 5px; margin: 0px;">Купить</a>
 </div>
 <ul class="shop-options" id="id-6-options">

 
 
 
 </ul>
 
 </div>
 </div>
 <div id="tabs">
 <div id="tabsHead">
 <a data-tabid="#tabDescrC" href="javascript:void(0)">Описание</a>
 <a data-tabid="#tabCommC" href="javascript:void(0)" class="bigBtnHov">Комментарии</a>
 <a data-tabid="#tabImgC" href="javascript:void(0)" class="bigBtnHov">Изображения</a>
 </div>
 <div id="tabDescrC" class="tabsCnt">
<? echo $item->descr; ?>

 </div>
 <div id="tabCommC" class="tabsCnt">
тут блок
  </div>
 </div>
 <div id="tabImgC" class="tabsCnt">
 <div class="shop-imgs with-clear">
 <img alt="" src="<? echo $item->foto1; ?>" class="gphoto" onclick="_bldCont1(6, this.getAttribute('idx'));" idx="0" title="Кликните для увеличения изображения">
 <img alt="" src="<? echo $item->foto2; ?>" class="gphoto" onclick="_bldCont1(6, this.getAttribute('idx'));" idx="1" title="Кликните для увеличения изображения">
 <img alt="" src="<? echo $item->foto3; ?>" class="gphoto" onclick="_bldCont1(6, this.getAttribute('idx'));" idx="2" title="Кликните для увеличения изображения">

 
 </div>
 </div> 
 </div>
 </div> 
 
 
 

<script type="text/javascript" src="http://s83.ucoz.net/src/shop_utils.js?2"></script><script type="text/javascript">
			if(typeof(uCoz) != 'object'){window.uCoz = {"sh_curr":{"1":{"rate":1,"name":"Доллары","default":1,"code":"USD","dpos":1,"disp":"$"},"2":{"rate":32.25,"name":"Рубли","default":0,"code":"RUR","dpos":0,"disp":"руб."}},"mf":"017-imobile","shop_price_f":["%01.2f",""],"ver":1,"sh_curr_def":1,"sh_goods":{}};};uCoz.sh_goods[3] = {price:430.00,old_price:0.00,imgs:["/_sh/00/3m.jpg","/_sh/00/3m_1.jpg","/_sh/00/3m_2.jpg"]};</script>
 <!-- </body> -->
 
 </div>
 
 <div class="clr"></div>
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
<!--/Нижняя часть товара-->


<!-- </body> -->

</div>
</div>