

<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY price_final DESC LIMIT 4";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товара";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
 echo '<div class="discount">';
echo '<a href="/product/'. $row['id'] .'"><img style="width:204px; height:96px;" src="'. $row['iconurl'] .'"></a>';
       echo ' <div class="title">'. $row['name'] .'</div>';
       echo ' <div class="sale"><span>';
		 echo  round( $row['price_final']*100)/100;
		
	echo '	р</span></div></div>';

        }
      }
?>   
