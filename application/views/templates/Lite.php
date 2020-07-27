<?php include "application/views/templates/Lite/components/page_head.php"; ?>
<body>
   <div id="main">
      <header id="header">
         <ul id="t-nav">
            <li><a href="/">Главная</a></li>
            <? echo get_menu($menu); ?>
			<li style="float:right;"><a  target="_blank" href="https://vk.com/coc_sh">Мы ВКонтакте</a></li>	
         </ul>
         <div id="m-nav">
          <img style=" height: 102px; width: 100%; " src="<? echo config_item('lite_logo'); ?>" >
         </div>

   <div id="main">
            <header id="header">
                <ul id="t-nav">
<li><a href="/">Все товары</a></li>
                    <?php foreach($categories as $category): ?>
                     <li><a href="/category/<? echo ($category->id); ?>"><? echo ($category->title); ?></a></li>
                     <?php endforeach; ?>


</ul></header>

</div>

       
   </header>
   <section id="middle">
      <aside id="side-left">
         <div class="block">
            <div class="top">Разделы магазина</div>
            <div class="cont">
               <ul class="b-nav">
                  <? echo get_menu($menu); ?>
               </ul>
            </div>
         </div>
         <div class="block">
            <div class="top">Категории товаров</div>
            <div class="cont">
               <ul class="b-nav">
                  <li><a href="/">Все товары</a></li>
                    <?php foreach($categories as $category): ?>
                     <li><a href="/category/<? echo ($category->id); ?>"><? echo ($category->title); ?></a></li>
                     <?php endforeach; ?>
               </ul>
            </div>
         </div>
         <div class="block">
            <div class="top">Популярные товары</div>
            <div class="cont">
			
		<?php
    $sql = "SELECT * FROM `orders` WHERE `paid` = '1'  ORDER BY `id` ASC LIMIT 4";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
	?>
               <div class="b-poster">
                  <div class="coast rpsn">
                     <?= round( $row['price']*100)/100;?> <i>руб.</i>
                  </div>
                  <div class="title"><?= $row['name']?></div>
                  <a href="/product/<?= $row['item_id']?>">
                  <img style="height: 88px;width: 188px;" src="<?= $row['photo']?>">
                  </a>
               </div>
			  
<?
  }
      }
			?>
            </div>
         </div>
      </aside>
      <aside id="side-right">
         <div class="block">
            <div class="top">Контакты</div>
            <div class="cont">
               <? echo config_item('lite_kontakt'); ?>
            </div>
         </div>
         <div class="block">
            <div class="top">Рекомендуем</div>
            <div class="cont">

							<?php
$query = mysql_query("SELECT * FROM `goods` WHERE type_Item = '2' LIMIT 4");

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
?>
               <div class="b-poster">
                  <div class="coast rpsn">
                     <?=round( $row['price_final']*100)/100?><i>руб.</i>
                  </div>
                  <div class="title"><?=$row['name']?></div>
                  <a href="/item/<?=$row['id']?>">
                  <img style="height: 88px;width: 188px;" src="<?=$row['iconurl']?>" alt="<?=$row['name']?>">
                  </a>
               </div>
<?
  }
      }
?>   
            </div>
         </div>
<div class="block">
    <div class="cont">
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "188", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '108ade'}, 93065171);
</script>
			
			
	    </div>
                    </div>                </aside>
                <aside id="side-center">
  <? $this->load->view($subview); ?>
         <?php
            mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
            ?>	
         <div id="dle-content"></div>
      </aside>
   </section>
   <div id="hFoot"></div>
   </div>
   <script>
      $(document).ready(function(){ $('#footer').show(); });
</script>
        <footer id="footer">
            
<div id="f-mid">
    <div id="copy">2016 © Clash-Store.ru</div>
    <ul style="padding-top: 1px;" id="f-nav">
<li><a href="/">Главная</a></li>
<li><a href="/page/agreement">Соглашение</a></li>
<li><a href="/page/buy">Как купить?</a></li>
<li><a href="/page/support">Поддержка</a></li>
<li><a target="_blank" href="https://vk.com/coc_sh">Мы ВКонтакте</a></li>	
    </ul>
    <div id="ws-copy">
<div id="f-bot">

<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t40.5;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->

 </div>
</div>
        </footer>






</body></html>
<style>
#header #m-nav #h-search {
    margin-left: 160px;
}
input[type="submit"] {
    height: 38px;
}
</style>

  <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'xf7U2w93lF';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script type="text/javascript">
    var _cp = {trackerId: 21979};
    (function(d){
        var cp=d.createElement('script');cp.type='text/javascript';cp.async = true;
        cp.src='//tracker.cartprotector.com/cartprotector.js';
        var s=d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cp, s);
    })(document);
</script>

</body>
 
      <?php include "application/views/templates/Lite/components/page_foot.php"; ?>