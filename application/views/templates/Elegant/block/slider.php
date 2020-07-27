
							<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY price_final ASC ";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo '<a href="/product/'. $row['id'] .'" class="item poster"><div class="info"><div class="row"><span class="coast">';
echo  round( $row['price_final']*100)/100;
echo '</span><span class="price">руб.</span></div><span class="title">'. $row['name'] .'</span></div>';
echo '<img src="'. $row['iconurl'] .'" alt="'. $row['name'] .'" width="225" height="120"></a>';

        }
      }
?>   