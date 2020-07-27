
<div class="slider has-dots" style="overflow: hidden; width: 100%; height: 360px;">
<ul style="width: 500%; position: relative; left: -200%; height: 360px;">
 
	<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY id DESC LIMIT 5";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Временно Нету Распродажы";
    else
    {
        while($row = mysql_fetch_assoc($query))
        {  
	
	
  echo ' <li style="width: 20%; background-image: url('. $row['iconurl'] .'); background-size: 100%;" onclick="location.href=`/product/'. $row['id'] .'`">';
 echo ' <div class="slider-blick"></div> ';
 echo ' <div class="slider-info">';
 echo ' <div class="big-title"><a href="/product/'. $row['id'] .'">'. $row['name'] .'</a></div> ';
 echo ' <div class="slider-price"> ';
	 echo  round( $row['price_final']*100)/100;
  echo ' руб.</div> ';
 echo ' </div> ';
 echo ' </li> ';

    }
      }
?>   


</ul>
</div>
<div id="goods">
<nav class="main-tabs">
<a href="javascript:;" id="tab1" class="tabs">В алфавитном порядке</a>
<a href="javascript:;" id="tab2" class="tabs active">Все товары</a>
<a href="javascript:;" id="tab3" class="tabs">Популярные товары</a>
</nav>

<div class="teeeest">
<div id="con_tab1" class="tabs">
<div class="rows">

 
<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY name DESC ";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo ' <div class="row">';
echo ' <div class="img" onclick="location.href=`/product/'. $row['id'] .'`">';
  echo '   <img class="lazy img" src="'. $row['iconurl'] .'">';
echo ' </div>';
echo ' <div class="row-info">';
echo ' <div class="title"><a href="/product/'. $row['id'] .'" title="ArmA III">'. $row['name'] .'</a></div>';
echo '     <div class="price">';
	 echo  round( $row['price_final']*100)/100;
	
echo ' 	 руб. <span class="oldprice">';
	  echo  round( $row['price_rub']*100)/100;
	echo '  руб.</span></div>';
echo ' </div>';
echo ' </div>';

        }
      }
?>   


</div>
</div>
<div id="con_tab2" class="tabs active">
<div class="rows">
 	<? if(count($items)): foreach($items as $item): ?>	
<div class="row">
<div class="img" onclick="location.href='<?php echo base_url("product/".$item->id); ?>'">

	
            <? echo empty($item->iconurl) ? '' : '<img class="lazy img" src="'.$item->iconurl.'" />'; ?>
</div>
<div class="row-info">
<div class="title"><a href="<?php echo base_url("product/".$item->id); ?>" title="Counter-Strike: Global Offensive"> <? echo $item->name; ?></a></div>

    <div class="price"><? echo round($item->price_final*100)/100;?> руб. <span class="oldprice"><? echo round($item->price_rub*100)/100;?> руб.</span></div>
</div>
</div>
<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>
</div>
</div>
<div id="con_tab3" class="tabs">
<div class="rows">
<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY price_final ASC ";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo ' <div class="row">';
echo ' <div class="img" onclick="location.href=`/product/'. $row['id'] .'`">';
  echo '   <img class="lazy img" src="'. $row['iconurl'] .'">';
echo ' </div>';
echo ' <div class="row-info">';
echo ' <div class="title"><a href="/product/'. $row['id'] .'" title="'. $row['name'] .'">'. $row['name'] .'</a></div>';
echo '     <div class="price">';
	 echo  round( $row['price_final']*100)/100;
	
echo ' 	 руб. <span class="oldprice">';
	  echo  round( $row['price_rub']*100)/100;
	echo '  руб.</span></div>';
echo ' </div>';
echo ' </div>';

        }
      }
?>   
</div>
</div>
</div>
				</div>

			</div>
    