<? error_reporting(0); ?>
<? if($_GET['type'] == 'search'): ?>
	<? $query = mysql_query("SELECT * FROM `orders` WHERE `id` = '".mysql_real_escape_string($_GET['id'])."'");
		$order = mysql_fetch_assoc($query);
		if($order['paid'] == 1) {
			echo "<script>location.replace('/views/?id=".$_GET['id']."&email=".$order['email']."');</script>";
		}
		else {
			echo "<script>alert('Платеж не найден');</script>";
			echo "<script>location.replace('/pay/?id=".$_GET['id']."');</script>";
		}
	?>

<? else: ?>
<?
$query = mysql_query("SELECT * FROM `orders` WHERE `id` = '".mysql_real_escape_string($_GET['id'])."' AND `email` = '".mysql_real_escape_string($_GET['email'])."'");
		$order = mysql_fetch_assoc($query);
?>
<? if($order['paid'] == 1):?>
<div style="margin-top:50px;">
Спасибо за покупку.
Скачать купивший товар: <a download="" href="/payorder/<?=$order['goods'];?>.txt">Скачать</a></div>
<?else:?>
<script>location.replace('/payorder/?id=<?=$_GET['id'];?>');</script>
<?endif;?>
<?endif;?>