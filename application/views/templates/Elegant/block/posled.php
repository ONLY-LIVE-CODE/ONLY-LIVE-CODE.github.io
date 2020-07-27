


							<?php
    $sql = "SELECT * FROM `orders`  WHERE paid = '1' LIMIT 4";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo '<div class="block-cont">';
echo '<a href="/product/'. $row['item_id'] .'" class="b-item">';
echo '<span class="coast">';
echo  round( $row['price']*100)/100;
echo ' руб.</span>';
echo '<span class="title">'. $row['name'] .'</span>';
echo '<img src="'. $row['photo'] .'" alt="'. $row['name'] .'">';
echo '</a>';
echo '</div>';
  }
      }
?>   
