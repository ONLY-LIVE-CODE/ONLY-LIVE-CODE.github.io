
<?php include "application/views/templates/Premium/components/page_head.php"; ?>

<body>
 <div id="device_type"></div>
 <div id="top_line"></div>
 <div id="main_container">
 
 <!--U1AHEADER1Z--><header id="site_header">
 <h1 id="site_logo"><a href="/"><? echo config_item('premium_logo'); ?></a></h1>
 <style>#site_logo a{background: url("<? echo config_item('premium_logo'); ?>") left no-repeat;)}
 
 body{background: url("<? echo config_item('premium_fon'); ?>") no-repeat top center;    background-size: cover;}
 #footer_logo{background: url("<? echo config_item('premium_logoz'); ?>");}</style>

 <div id="search_form">
 <form onsubmit="this.sfSbm.disabled=true" method="post" action="/search">
 <input type="text" class="search_keyword" name="q" value="Поиск по товарам" >
 <input type="submit" class="search_submit" value="" name="sfSbm">
 </form>
 </div>

</header>
<div id="navi">
 <nav>
 <!-- <sblock_menu> -->
 <!-- <bc> --><ul class="uMenuRoot">
<li class=""><a href="/"><span>Главная</span></a></li>

<?php foreach($categories as $category): ?>
<li class=""><a href="/category/<? echo ($category->id); ?>"><span><? echo ($category->title); ?></span></a></li>
					<?php endforeach; ?>


</ul><script type="text/javascript">$(function(){_uBuildMenu('#uMenuDiv1',0,document.location.href+'/','uMenuItemA','uMenuArrow',2500);})</script><!-- </bc> -->
 <!-- </sblock_menu> --> 
 </nav>
 <div class="some_shadow"></div>
</div><!--/U1AHEADER1Z-->
  <? $this->load->view($subview); ?>

		
<?php
mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
?>	

 </div>
 <footer>
 <div id="footer_container">
 <!--U1BFOOTER1Z--><div id="footer_top">
 <div id="footer_logo"></div>
 <ul>
 <li><a href="/">Главная</a></li>
<? echo get_menu($menu); ?>
 
 <li id="goTop" title="Вверх!"></li>
 </ul>
</div>
<div id="footer_bottom">
 <div class="footer_block">
  <!-- <copy> -->Copyright ДикиЙ © 2015<!-- </copy> -->. <!-- "' -->Дизайн и разработка: <a href="http://vk.com/kudo070" title="ДикиЙ" target="_blank">ДикиЙ</a>
 </div>
 
</div>

 </footer>
 <script src="/templates/Premium/js/slider.js"></script>
 <script>
 $("#slider").easySlider({
 auto: true,
 continuous: true,
 numeric: true,
 pause: 4000
 });
 </script>
 <script src="/templates/Premium/js/ui.js"></script>
<?php include "application/views/templates/Premium/components/page_foot.php"; ?>