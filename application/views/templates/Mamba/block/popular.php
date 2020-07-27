
<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY price_final ASC LIMIT 10";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товара";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
 echo '<li><a href="/product/'. $row['id'] .'">'. $row['name'] .'</a></li><div class="special-today">';

        }
      }
?>   