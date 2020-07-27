 <!-- <middle> -->
 <section id="slider_container">
 <div id="slider">
 <ul>
 
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

	echo ' <li><img src="'. $row['iconurl'] .'" alt="" /> <div class="sl_text"><div class="sl_title">'. $row['name'] .'</div>';
	 echo $third; // выведет 'and text'
	
	echo ' <div class="sl_price">₽';
	 echo  round( $row['price_final']*100)/100;
            echo ' </div><a class="big_more" href="/product/'. $row['id'] .'">Подробности</a>';
 echo ' </li>';


        }
      }
?>   


 
 </ul>
 </div>
 </section>
 <section>
 <div class="main_title">
 <h3>Товар</h3>
 <div class="some_shadow"></div>
 </div>
 
<div class="goods-list with-clear">
<? if(count($items)): foreach($items as $item): ?>	
<div class="list-item" id="last_add-item-7"><div class="list-item-image-preview">
 <img src="<? echo $item->iconurl; ?>" alt="" id="last_add-gphoto-7">
 <a class="quick_view big_more ulightbox" href="<? echo $item->iconurl; ?>">Увеличить</a>
</div>
<div class="list-item-title"> <a href="<?php echo base_url("product/".$item->id); ?>"><? echo $item->name; ?></a></div>
<div class="list-item-descr"></div>
<div class="list-item-price"><span class="last_add-good-7-price">₽<? echo round($item->price_final*100)/100;?></span> </div>
<div class="list-item-buttons">

 <a href="<?php echo base_url("product/".$item->id); ?>" class="big_more_inverse">Подробнее</a>
</div>


</div>

<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>
</div>
<script type="text/javascript">
			if(typeof(uCoz) != 'object'){window.uCoz = {"sh_curr":{"1":{"rate":1,"name":"Доллары","default":1,"code":"USD","dpos":1,"disp":"$"},"2":{"rate":32.25,"name":"Рубли","default":0,"code":"RUR","dpos":0,"disp":"руб."}},"mf":"017-imobile","shop_price_f":["%01.2f",""],"ver":1,"sh_curr_def":1,"sh_goods":{}};};uCoz.sh_goods[7] = {price:15.00,old_price:0.00,imgs:["/_sh/00/7m.jpg","/_sh/00/7m_1.jpg","/_sh/00/7m_2.jpg"]};uCoz.sh_goods[3] = {price:430.00,old_price:0.00,imgs:["/_sh/00/3m.jpg","/_sh/00/3m_1.jpg","/_sh/00/3m_2.jpg"]};uCoz.sh_goods[12] = {price:630.00,old_price:650.00,imgs:["/_sh/00/12m.jpg","/_sh/00/12m_1.jpg","/_sh/00/12m_2.jpg"]};uCoz.sh_goods[4] = {price:460.00,old_price:0.00,imgs:["/_sh/00/4m.jpg","/_sh/00/4m_1.jpg","/_sh/00/4m_2.jpg"]};</script>
 <div class="clr"></div>
 
 
 </section>
 
 <!-- </middle> -->