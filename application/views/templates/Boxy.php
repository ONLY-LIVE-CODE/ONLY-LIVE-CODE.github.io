<?php include "application/views/templates/Boxy/components/page_head.php"; ?>

<?php include "application/views/chat.php"; ?>


<body>

<header>
<div class="header-nav">
<ul class="headmenu">
 <li><a href="/">Главная</a></li>
<? echo get_menu($menu); ?>

 </ul>
</div>
<div class="header-line">
<div class="container">
<div class="header-wrapper">
<div class="logo-wrapper">
<a href="/"><div class="logo"></div></a>
</div>
<form onsubmit="this.sfSbm.disabled=true" action="/search" method="post" class="search-wrapper">
<input type="hidden" name="do" value="search"> 
<input type="hidden" name="subaction" value="search">    
<input type="submit" id="searchb" value="">
<input id="search" name="q" type="text" placeholder="Поиск по товарам..." value="">
</form>
<div id="update"></div>

<ul class="benefits">
<li class="delivery-icon">Моментальная доставка</li>
<li class="best-prices-icon">Лучшие цены</li>
<li class="convenient-payment-methods">Удобные способы оплаты</li>
</ul>
</div>
</div>
</div>
</header> <section>
<div class="wrapper">
 
<div class="left">
<div class="ttttttteees">
<ul class="menu" >
	<?php foreach($categories as $category): ?>
<li><a href='/category/<? echo ($category->id); ?>'"><? echo ($category->title); ?></a></li>
					<?php endforeach; ?>



<?php include "application/views/templates/Boxy/block/posled.php"; ?>
  



    
    
<div style="margin-top:20px;overflow: hidden;width: 160px;">
<div style="text-transform: none;font-weight: normal;"><script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>


    
    </ul>
</div>
</div>
<div class="right">
 
    
      <? $this->load->view($subview); ?>

		
<?php
mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
?>	


    
			<div class="clear"></div>
		</div>
	</section>

	<footer>
		<div class="footer-nav">
			<div style="width: 990px;" class="container">
				
<a class="ft" target="_blank" title="Copyright ДикиЙ " href="http://vk.com/kudo070">Дизайн и разработка ДикиЙ</a> <span class="ft" style="float:right;padding-top: 5px;">Copyright ДикиЙ © 2015</span>
			



			</div>
		</div>
	</footer>


                            
<div style="display:none;"></div>

</body>


<?php include "application/views/templates/Boxy/components/page_foot.php"; ?>
