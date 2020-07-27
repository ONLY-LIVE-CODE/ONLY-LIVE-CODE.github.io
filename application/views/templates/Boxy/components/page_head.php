
<!doctype html>
<html lang="ru">
<head>
 <title><? echo config_item('site_name'); ?></title>
 <meta name="keywords" content="<? echo config_item('tags'); ?>">
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/templates/Elegant/js/jquery-1.7.2.js"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="/templates/Boxy/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<script src="/templates/Boxy/js/unslider.min.js"></script>
<script src="/templates/Boxy/js/tabs.js"></script>
<style>
html,body{width:1024px;margin:0 auto;background:#000 url(<? echo config_item('boxy_fon'); ?>) no-repeat top center;background-attachment:fixed;}    
.logo{width:150px;height:55px;background:url(<? echo config_item('boxy_logo'); ?>) no-repeat;}
    
</style>       
<script>
		$(function() {
			$('.slider').unslider({
				delay: 4000,
				keys: true,
				dots: true,
				fluid: true
			});
		});
	</script>
</head>
<body>

<header>
