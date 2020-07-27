<style>
.update {
width:300px;
height:40px;
background:#e03930;
color:#fff;
border-radius:7px;
}
.update:hover{
background:#ef1c12;
}
#upnid {
margin: 0 auto;
width:600px;
font-size:14px;
color:#333;
margin-top:15%;
text-align:center;
}
#meltext {
font-size:11px;
}
</style>
<div id="upnid">
<b>Внимание:</b> на Вашем сайте установлен скрипт "Newabuy 3.0.0".<br> Для установки доступен скрипт "Newabuy 3.0.1".<br> Нажмите "ОБНОВИТЬ", для обновления скрипта. 
<br><center><form method="POST" id="more"><input type="submit" class="update" name='ok' value="ОБНОВИТЬ"></form></center>
<div id="meltext">*- после установки удаление старых настроек не произойдет.<br></div>
<a style="color:#2269de;" target="blank" href="http://newabuy.ru">Информация об обновлении</a>
</div>
    <?
	if(isset($_POST['ok'])) {
	$query = mysql_query("DELETE FROM `version` WHERE `version` = '300';");
	$query = mysql_query("INSERT INTO `version` (`version`) VALUES ('301');");
	$query = mysql_query("ALTER TABLE `goods` ADD `goods_shadow` text");
	$query = mysql_query("ALTER TABLE `goods` ADD `newabuy2_fon` text");
	$query = mysql_query("INSERT INTO `config_data` (`key`, `value`) VALUES
('icobuy', 'http://newabuy.ru/Buy.png'),
('yadok', ''),
('WMU', ''),
('WME', ''),
('qiwiok', ''),
('wmrok', ''),
('wmzok', ''),
('wmuok', ''),
('wmeok', '');");
	header("Location:/admin/user/logout/");
	}
	?>