 <? $query = mysql_query("SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 1");
       $order = mysql_fetch_assoc($query);
       //коннектим на страницу оплаты
       header('Location: /pay/?id='.$order['id'].'&new=1');
       ?>
       