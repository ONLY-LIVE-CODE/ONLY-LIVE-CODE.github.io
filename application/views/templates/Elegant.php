<?php include "application/views/templates/Elegant/components/page_head.php"; ?>
<link href='//fonts.googleapis.com/css?family=Cuprum:400normal,400italic,700normal,700italic|Open+Sans:400normal|Oswald:400normal|PT+Sans:400normal|Ubuntu:400normal|Droid+Sans:400normal|Lobster:400normal|Lato:400normal|Roboto:400normal|Droid+Serif:400normal|Raleway:400normal&subset=all' rel='stylesheet' type='text/css'>
<body>
<style>
#h-slider { display: none; }
</style>

<div id="slide-nav">
<a class="navbar-brand" href="/"><!---img src="/images/materials-skinpay-logo.svg"---> GOOD<font style="color:#997ff9">ACC</font></a>
<div class="wrap">
<ul class="h-nav">
<li class="cur"><a href="/">Главная</a></li>
<? echo get_menu($menu); ?>
<li><a target="_blank" href="https://new.vk.com/public106457290">Мы ВКонтакте</a></li>	
</ul>

</div> 
</div>
</div>  
 
<div class="wrapper">  

<div id="container">

<aside class="side-left">
<div class="block">
<div class="block-top">Разделы магазина</div>
<div class="block-cont">
<ul class="b-nav">
	<?php foreach($categories as $category): ?>
<li><a href='/category/<? echo ($category->id); ?>'"><? echo ($category->title); ?></a></li>
					<?php endforeach; ?>
</ul>

</div>
</div> 

<div class="block">
<div class="block-top">Связаться с нами</div>
<div class="block-cont">
<ul id="contacts">
<li> <a href="http://vk.com/im?media=&sel=-106457290" target="_blank"><b class="vk"></b>Написать сообщение</a> </li>
</ul>

</div>
</div>
 
<div class="block">
<div class="block-top">Уголок для покупателя</div>
<div class="block-cont">
<div class="client-info">
<div class="num">1</div>
<div class="msg">
Весь товар загруженный у нас,
проходит строгую проверку
перед продажей.
</div>
</div>
<div class="client-info">
<div class="num">2</div>
<div class="msg">
Обращаться с заменой аккаунта можно только в течении 20 минут, если обратились позднее аккаунт замене не подлежит.
</div>
</div>
<div class="client-info">
<div class="num">3</div>
<div class="msg">
Не весь товар является полностью нашим.
При покупке вы соглашаетесь с правилами,
претензий к магазину не иметь.
Либо откажитесь от покупки.
</div>
</div>
</div>
 
<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?117"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "190", height: "200", color1: 'FFFFFF', color2: '000000', color3: '5da000'}, 106457290);
</script>
</ul>
</div>

</a>

 </aside>
    
      <? $this->load->view($subview); ?>

		
<?php
mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
?>	


</div> 



</body></html>
<style>
#header #m-nav #h-search {
    margin-left: 160px;
}
input[type="submit"] {
    height: 38px;
}
</style>


<script type="text/javascript">
    var _cp = {trackerId: 21979};
    (function(d){
        var cp=d.createElement('script');cp.type='text/javascript';cp.async = true;
        cp.src='//tracker.cartprotector.com/cartprotector.js';
        var s=d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cp, s);
    })(document);
</script>

</body>
<?php include "application/views/templates/Elegant/components/page_foot.php"; ?>