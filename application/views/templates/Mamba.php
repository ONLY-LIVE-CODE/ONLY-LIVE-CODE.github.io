<?php include "application/views/templates/Mamba/components/page_head.php"; ?>



<body>
    <div class="wrapper">
      <header class="header">
        <div class="submenu">
          <div class="topbar">
            <div class="left">
<ul class="tmenu">
<li><a href="/">Главная</a></li>
<? echo get_menu($menu); ?>
</ul>
            </div>
              
              
 
          </div>
          <div class="topbar2">
            <div class="section">
              <script>
                $(window).load(function () {
                  $('.flexslider').flexslider({
                    animation: "slide"
                  });
                });
              </script>




        	</div>
   	 </div>
   </div>
        <div class="top">
          <a class="logo" href="/"><img style="max-width: 300px; max-height: 80px;" src="<? echo config_item('mamba_logo'); ?>"></a>
            
            <form style="position: absolute;right: 50px;top: 50px;" id="h-search" action="/search" method="post" > 
			<input type="hidden" name="q" value="search"> 
			<input type="hidden" name="q" value="search">
                        <input type="text" name="q" placeholder="Поиск по товарам..." style="background-color: #e9eff2;  border: none;  border-bottom: 2px solid #d4dee3; width: 272px;  margin-right: 10px;  font-family: tahoma; padding: 8px 12px;">
                        <input class="but" type="submit" name="q" value="Искать">
                    </form>
        </div>
       <div id="sidebar">
</div>    

      </header>
      <div class="container">
      
      

    <div id="notification"></div>
          
          
        <div class="left">


    <div class="block">
            <h3>
              <span class="fa fa-newspaper-o" style="background: url(/templates/Mamba/img/cat.png) no-repeat;width: 14px;height: 14px;"></span>
              Категории</h3>
            <ul class="leftnav">
<?php foreach($categories as $category): ?>
<li><a href='/category/<? echo ($category->id); ?>'"><? echo ($category->title); ?></a></li>
					<?php endforeach; ?>
</ul>
        </div>    

 <div class="block">
<h3>
            <span style="background: url(/templates/Mamba/img/static.png) no-repeat;width: 18px;height: 14px;" class="fa fa-newspaper-o"></span>
            Разделы</h3>
          <ul class="news">
<? echo get_menu($menu); ?>

          </ul>
      </div>  
 



       
 
  </div>
          
          		<? $this->load->view($subview); ?>
<?php
mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
?>	

           <div id="dle-content"></div> 
              
<div class="clear"></div>
<footer>



<div class="clear"></div>
    <div class="copyright">
	
				
<a class="ft" target="_blank" title="Copyright ДикиЙ " href="http://vk.com/kudo070">Дизайн и разработка ДикиЙ</a> <span class="ft" style="float:right;padding-top: 5px;">Copyright ДикиЙ © 2015</span>
	
	</div>
</footer>
</div>
</div>

		

</body>




<?php include "application/views/templates/Mamba/components/page_foot.php"; ?>
