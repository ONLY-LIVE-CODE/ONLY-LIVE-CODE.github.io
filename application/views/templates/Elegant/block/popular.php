		<div class="block">
 <div class="block-title">
 <i class="fa fa-star-o"></i>
 
 Популярное
 </div>
	<div class="block-body clr">
	<?php
    $sql = "SELECT * FROM `goods` ORDER BY viewed DESC LIMIT 6";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товара";
    else
    {
        while($row = mysql_fetch_assoc($query))
        {  
	echo '<div class="popular-item clr">  ';
	echo '<img id="inf1-gphoto-9" src="'. $row['iconurl'] .'" alt="">  <p>';
            echo '  <a href="/product/'. $row['id'] .'">'. $row['name'] .'</a><br>';
 echo ' <span><span class="inf1-good-9-price">';
 echo  round( $row['price_final']*100)/100;
  echo ' руб.</span></span>  </p> </div>';

        }
      }
?>   


 

 </div>
</div>