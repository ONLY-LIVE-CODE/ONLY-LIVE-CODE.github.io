<!DOCTYPE html>
<html>
  <head>
    <title><? echo config_item('site_name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<? echo $this->config->item('metadescr'); ?>">
    <!-- Bootstrap -->
    <script type="text/javascript" src="path_to/jquery.leanModal.min.js"></script>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
	
	<script src="<? echo site_url('assets/js/jquery-ui-1.9.2.custom.min.js');?>"></script>
	<script src="<? echo site_url('assets/js/bootstrap.min.js');?>"></script>
	<script src="<? echo site_url('assets/js/bootstrap.js');?>"></script>
	<script src="<? echo site_url('assets/js/respond.js');?>"></script>
	<script src="<? echo site_url('assets/js/app.js');?>"></script>
	<script src="<? echo site_url('assets/js/jquery.toastmessage.js');?>"></script>
	<script src="<? echo site_url('assets/js/popup_buy.js');?>"></script>
	<script src="<? echo site_url('assets/js/main.js');?>"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="http://mvcreative.ru/example/6/2/snow.js"></script>
 <link rel="stylesheet" type="text/css" href="/css/styles.css">
<link type="image/x-icon" rel="icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" href="/css/mac.css">
<link rel="stylesheet" type="text/css" href="/css/avatar.css">
<script>
$(document).ready(function(){
	$('#tabs > a').on('click',function(){
		$('#tabs > a').removeClass('selected');
		var index=$(this).attr('rel');
		$('#tabs_this > div').css('display','none');
		$("#"+index).css('display','block');
		$(this).addClass('selected');
	});
});
</script>
 </head>
 