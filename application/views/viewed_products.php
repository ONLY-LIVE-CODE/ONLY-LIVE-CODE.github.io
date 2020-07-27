<?php
mysql_query("UPDATE goods SET viewed=viewed+1 WHERE id = '".$item->id."'") or die(mysql_error());
?>