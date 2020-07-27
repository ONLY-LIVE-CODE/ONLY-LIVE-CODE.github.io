<div class="right">
   <div class="block">
      <h3>
        <span style="background: url(/templates/Mamba/img/top.png) no-repeat;width: 16px;height: 15px;" class="fa fa-credit-card"></span>
        Популярное</h3>
       <ul style="background: url(/templates/Mamba/img/rating.png) 5px 0 no-repeat;" class="leftnav popular">
<?php include "application/views/templates/Mamba/block/popular.php"; ?>




	   </ul>
    </div>
    <div class="block">
      <h3>
        <span style="background: url(/templates/Mamba/img/rand.png) no-repeat;width: 16px;height: 16px;" class="fa fa-credit-card"></span>
        Рекомендуем</h3>
        
   <?php include "application/views/templates/Mamba/block/recomed.php"; ?>

              
            
    </div>
    
 <div class="block">
      <h3>
        <span style="background: url(/templates/Mamba/img/pay.png) no-repeat;width: 18px;height: 14px;" class="fa fa-credit-card"></span>
        Мы принимаем</h3>
     <center><img src="/img1/paym.png" style="width: 200px;"></center>
  </div>   
</div>

<div id="content">
          
          <div class="center">

<div class="flexslider">
    
<div class="flex-viewport" style="overflow: hidden; position: relative;"></div>

<ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul><div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2400%; transition-duration: 0s; transform: translate3d(-4760px, 0px, 0px);">


<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY id DESC LIMIT 5";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Временно Нету Распродажы";
    else
    {
        while($row = mysql_fetch_assoc($query))
        {  
	
	
  echo ' <li class="clone" aria-hidden="true" style="width: 476px; float: left; display: block;">';

      echo ' <div class="text">';
        echo ' <span><a>'. $row['name'] .'</a></span>';
       echo '</div>';
           echo '  <div class="discount"><span>';
			 echo  round( $row['price_final']*100)/100;
			
		 echo '	р</span></div>';
      
            echo ' <a href="/product/'. $row['id'] .'"><img style="height: 267px; width: 476px;" alt="" src="'. $row['iconurl'] .'"></a>';
   echo '  </li>';
	

    }
      }
?>   
	
	
	
	
	</ul>
	
	</div>
</div>
<script>
  (function ($) {
    $(function () {

      $('ul.tabs').on('click', 'li:not(.current)', function () {
        $(this).addClass('current').siblings().removeClass('current').parents('div.section').find('div.list_box').eq($(this).index()).fadeIn(0).siblings('div.list_box').hide();
      })

    })
  })(jQuery)
</script><div class="section">
  <ul class="tabs">
    <li class="current">Все товары</li>
    <li style="width: 34%;">Популярные</li>
    <li>По названию</li>
  </ul>

 <div class="list_box visible">
     
	 
	 
 <? if(count($items)): foreach($items as $item): ?>	


  <a href="<?php echo base_url("product/".$item->id); ?>">
    <div class="item">
      <div class="img"> <? echo empty($item->iconurl) ? '' : '<img alt="" width="151" height="72" src="'.$item->iconurl.'" />'; ?></div>
        
     <div style="margin-top:36px;" class="price">
	<? echo round($item->price_final*100)/100;?> 
		
	<div style="position: absolute;right: 10px;text-decoration: line-through;background: rgba(140, 133, 133, 0.11);  color: #999797;padding: 0 8px;border-radius: 4px;top: 10px;">
	<? echo round($item->price_rub*100)/100;?> руб.
	</div>	<i class="fa fa-rub" style="background: url(/templates/Mamba/img/rur.png) no-repeat;  width: 14px;  height: 16px;"></i></div>

      <div class="cont">
        <h4> <? echo $item->name; ?></h4>
       
      </div>
    </div>
    </a>



 <? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>

 

 
 
 </div>

 <div class="list_box">
 
 
  
  
<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY price_final ASC ";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 

 echo ' <a href="/product/'. $row['id'] .'">';
  echo '  <div class="item">';
      echo '<div class="img"><img alt="" width="151" height="72" src="'. $row['iconurl'] .'"></div>';
        
        
        
        echo '<div style="margin-top:36px;" class="price">';
		 echo  round( $row['price_final']*100)/100;
		
	echo '<div style="position: absolute;right: 10px;text-decoration: line-through;background: rgba(140, 133, 133, 0.11);  color: #999797;padding: 0 8px;border-radius: 4px;top: 10px;">';
	 echo  round( $row['price_rub']*100)/100;
	echo ' руб.</div>	<i class="fa fa-rub" style="background: url(/templates/Mamba/img/rur.png) no-repeat;  width: 14px;  height: 16px;"></i></div>';
     echo ' <div class="cont">';
       echo ' <h4>'. $row['name'] .'</h4>';
        
     echo ' </div>';
    echo '</div>';
    echo '</a>';

        }
      }
?>   
  
 
 </div>

 <div class="list_box">

  
<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY name DESC ";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 

 echo ' <a href="/product/'. $row['id'] .'">';
  echo '  <div class="item">';
      echo '<div class="img"><img alt="" width="151" height="72" src="'. $row['iconurl'] .'"></div>';
        
        
        
 echo '<div style="margin-top:36px;" class="price">';
		 echo  round( $row['price_final']*100)/100;
		
	echo '<div style="position: absolute;right: 10px;text-decoration: line-through;background: rgba(140, 133, 133, 0.11);  color: #999797;padding: 0 8px;border-radius: 4px;top: 10px;">';
	 echo  round( $row['price_rub']*100)/100;
	echo ' руб.</div>	<i class="fa fa-rub" style="background: url(/templates/Mamba/img/rur.png) no-repeat;  width: 14px;  height: 16px;"></i></div>';
     echo ' <div class="cont">';
       echo ' <h4>'. $row['name'] .'</h4>';
        
     echo ' </div>';
    echo '</div>';
    echo '</a>';

        }
      }
?>   



 </div>

 
</div>

</div>
</div>
