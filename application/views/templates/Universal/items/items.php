
<!--СЛАЙДШОУ-->
<script src="/templates/Universal/img/jquery.flexslider.js"></script>
<div class="flexslider">
 <ul class="slides">
 
 	<?php
    $sql = "SELECT * FROM `goods` ORDER BY id DESC LIMIT 4";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
$text = $row['descr'];
$third = mb_substr($text,0,120,'UTF-8'); // Покажет ВСЕ символы начиная с 8-ого
$third  .= "...";

	echo ' <li><span class="h_slide_text"><span class="h_slide_text_in"><span class="h_slide_title"><span>'. $row['name'] .'</span></span>';
	echo '  <span class="h_slide_description">';
	 echo $third; // выведет 'and text'
	
	echo '</span></span></span>';
            echo ' <a href="/product/'. $row['id'] .'"><img src="'. $row['iconurl'] .'"" alt="" draggable="false"></a>';
 echo ' </li>';


        }
      }
?>   
 
 

</ul><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>

<script type="text/javascript">$(window).load(function() {$('.flexslider').flexslider({animation: "fade"})});</script>
<!--/СЛАЙДШОУ-->


<!--КОНТЕНТ-->
<div class="h_content">



<div class="h_title">Товар</div>
 <div class="over_cnt">
 <div class="cnt_in">
 
<div class="goods-list with-clear">
	<? if(count($items)): foreach($items as $item): ?>	
	
<div class="list-item" id="last_add-item-14"><div class="one_mtr">
 <div class="one_mtr_image">
 <div class="one_mtr_links">

 <a href="<?php echo base_url("product/".$item->id); ?>" class="one_mtr_zoom">&nbsp;</a></div>
 <a href="<?php echo base_url("product/".$item->id); ?>"><span class="one_mtr_bottom">
 <span class="one_mtr_name"><span class="one_mtr_name_in"><? echo $item->name; ?></span>
 </span><span class="one_mtr_price"><span class="last_add-good-14-price"><? echo round($item->price_final*100)/100;?> руб.</span> </span>
 </span><img id="top_view-gphoto-14" src="<? echo $item->iconurl; ?>" alt=""></a></div>
 </div></div>
 

	
	
<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>


</div>
<script type="text/javascript">
			if(typeof(uCoz) != 'object'){window.uCoz = {"sh_curr":{"1":{"rate":1,"name":"Доллары","default":1,"code":"USD","dpos":1,"disp":"$"},"2":{"rate":37,"name":"Рубли","default":0,"code":"RUR","dpos":0,"disp":"руб."}},"mf":"kuniversalshop","shop_price_f":["%01.2f",""],"ver":1,"sh_curr_def":1,"sh_goods":{}};};uCoz.sh_goods[21] = {price:130.00,old_price:0.00,imgs:["/_sh/00/21m.jpg","/_sh/00/21m_1.jpg","/_sh/00/21m_2.jpg"]};uCoz.sh_goods[12] = {price:110.00,old_price:0.00,imgs:["/_sh/00/12m.jpg","/_sh/00/12m_1.jpg","/_sh/00/12m_2.jpg"]};uCoz.sh_goods[17] = {price:85.00,old_price:100.00,imgs:["/_sh/00/17m.jpg","/_sh/00/17m_1.jpg","/_sh/00/17m_2.jpg"]};uCoz.sh_goods[15] = {price:80.00,old_price:0.00,imgs:["/_sh/00/15m.jpg","/_sh/00/15m_1.jpg"]};uCoz.sh_goods[14] = {price:160.00,old_price:0.00,imgs:["/_sh/00/14m.jpg","/_sh/00/14m_1.jpg","/_sh/00/14m_2.jpg","/_sh/00/14m_3.jpg","/_sh/00/14m_4.jpg"]};uCoz.sh_goods[18] = {price:110.00,old_price:0.00,imgs:["/_sh/00/18m.jpg","/_sh/00/18m_1.jpg"]};uCoz.sh_goods[19] = {price:110.00,old_price:0.00,imgs:["/_sh/00/19m.jpg","/_sh/00/19m_1.jpg","/_sh/00/19m_2.jpg"]};uCoz.sh_goods[16] = {price:80.00,old_price:0.00,imgs:["/_sh/00/16m.jpg","/_sh/00/16m_1.jpg","/_sh/00/16m_2.jpg"]};</script>
 </div>
 </div>




<div class="h_content_index">

 <div class="h_title">О сайте</div> 
<? echo config_item('universal_onas'); ?>
 <div class="h_title">Контакты</div> 

<? echo config_item('universal_kontakt'); ?>
</div>


</div>
<!--/КОНТЕНТ-->