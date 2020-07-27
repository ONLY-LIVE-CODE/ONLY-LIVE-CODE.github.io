<? $this->load->view('admin/components/adm_head')?>
<body class="wysihtml5-supported">

    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="hidden-lg pull-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-right">
                        <span class="sr-only">Свернуть</span>
                        <i class="fa fa-chevron-down"></i>
                    </button>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">
                        <span class="sr-only">Toggle sidebar</span>
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <ul class="nav navbar-nav navbar-left-custom">
                  <div class="logo"><a href="/admin/" title=""><img src="/templates/admin/images/logo.png" width="150" height="50"></a></div>
                    <li><a class="nav-icon sidebar-toggle"><i class="fa fa-bars"></i></a></li>
                </ul> </div>
				<ul class="nav navbar-nav navbar-right collapse" id="navbar-right">
						<?php
  $query = mysql_query("SELECT * FROM `version`");
while ($arr = mysql_fetch_array($query)) {
$ver = $arr['version']; } 
if(6 == $ver) {
$update = '0';
}
else {
$update = '1';
}?>
                <li>
                    <a href="/admin/updatecenter">
                        <i class="fa fa-rotate-right"></i>
                        <span>Обновлений</span>
                        <strong class="label label-danger"><? echo $update; ?></strong>
                    </a>
                </li>

                

                
            </ul>
           

          
        </div>
    </div>
    <!-- /navbar -->




    <!-- Page header -->
    <div class="container-fluid">
	
        <div class="page-header">
          <br>
			<div class="panel-body" style=" width: 400px; left: 285px; top: 65px; position: absolute; ">

                            
                            
                            
                            
                            <!----div class="widget">
                                <div class="well">
                                    <blockquote>
                                        <p>Вы используете скрипт FULLHACK SHOP.</p>
                                        <small>Ваша версия : 1.0 |<cite title="Source Title">Последняя версия:  <?php echo file_get_contents('http://4ise.com/ver.txt') ?></cite></small>
                                    </blockquote>
                                </div>
                            </div--->
                            
                            
                            
                        </div>
            <!----ul class="middle-nav">
			<?php
  $query = mysql_query("SELECT * FROM `version`");
while ($arr = mysql_fetch_array($query)) {
$ver = $arr['version']; } 
if(5 == $ver) {
$update = ' <li>0 ОБНОВЛЕНИЙ</li>';
}
else {
$update = ' <li>1 ОБНОВЛЕНИЕ</li>';
}?>
                <li><a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i> <span>Тикеты</span></a><div class="label label-info">0</div></li>
                <li><a href="/admin/stat" class="btn btn-default"><i class="fa fa-bars"></i> <span>Статистика</span></a></li>
                <li><a href="/admin/users" class="btn btn-default"><i class="fa fa-male"></i> <span>Пользователи</span></a></li>
                <li><a href="/admin/config" class="btn btn-default"><i class="fa fa-money"></i> <span>Бухгалтерия</span></a></li>
				<li><a href="/admin/coments/" class="btn btn-default"><i class="fa fa-comments-o"></i> <span>Коментарии</span></a></li>
            </ul--->
        </div>
    </div>
    <!-- /page header -->


    <!-- Page container -->
    <div class="page-container container-fluid">
    	
    	<!-- Sidebar -->
        <div class="sidebar collapse">
        	<ul class="navigation">
            	<li><a href="/admin/"><i style="font-size: 20px;" class="fa fa-home "></i>Главная</a></li>
					<li><a href="/"><i style="font-size: 20px;" class="fa fa-shopping-cart"></i>Магазин</a></li>
               
                <li>
                    <a href="#" class="expand level-closed"><i style="font-size: 20px;" class="fa fa-gavel"></i>Товары</a>
                    <ul style="display: none;">
                        <li><a href="/admin/goods/">Товар</a></li>
                        <li><a href="/admin/goods/edit">Добавить товар</a></li>
              
                    </ul>
                </li>
				<li>
                    <a href="#" class="expand level-closed"><i style="font-size: 20px;" class="fa fa-bars"></i>Категории</a>
                    <ul style="display: none;">
                    <li><a href="/admin/categories">Категории</a></li>
                        <li><a href="/admin/categories/edit">Добавить категорию</a></li>
         
                    </ul>
                </li>
				<li>
                    <a href="#" class="expand level-closed"><i style="font-size: 20px;" class="fa fa-ticket"></i>Купоны</a>
                    <ul style="display: none;">
                    <li><a href="/admin/kupon">Купоны</a></li>
                        <li><a href="/admin/kupon/edit">Добавить купон</a></li>
         
                    </ul>
                </li>
                <li>
                    <a href="/admin/templates"><i style="font-size: 20px;" class="fa fa-puzzle-piece"></i>Дизайн</a>
                </li>
				<li>
                    <a href="#" class="expand level-closed"><i style="font-size: 20px;" class="fa fa-file-text"></i>Страницы</a>
                    <ul style="display: none;">
                        <li><a href="/admin/page/">Страницы</a></li>
                        <li><a href="/admin/page/edit">Добавить страницу</a></li>
         
                    </ul>
                </li>
             
                <li><a href="#" class="expand level-closed"><i style="font-size: 20px;" class="fa fa-user"></i>Пользователь</a>
                	<ul style="display: none;">
					 <li><a href="/admin/users">Пользователи</a></li>
					 <li><a href="/admin/users/edit">Добавить пользователя</a></li>
                      <li><a href="/admin/users/settings">Настройки</a></li>
                        <li><a href="/admin/security">Заблокированные IP</a></li>
                        <li><a href="/admin/security/edit">Заблокировать IP</a></li>
                    </ul>
                </li>
				<li><a href="/admin/stat"><i style="font-size: 20px;" class="fa fa-bars"></i> <span>Статистика</span></a></li>
                <li><a href="/admin/config"><i style="font-size: 20px;" class="fa fa-cog"></i>Настройки</a></li>
				<li><a href="/admin/coments/"><i style="font-size: 20px;" class="fa fa-comments-o"></i> <span>Коментарии</span></a></li>
				<li><a href="/admin/users/settings"><i style="font-size: 20px;" class="fa fa-cog"></i>Настройки Пользователя</a></li>
				<li><a href="/admin/user/logout/"><i style="font-size: 20px;" class="fa fa-mail-forward"></i>Выйти</a></li>
            </ul>
			</div>
        <!-- /sidebar -->
		
		

    
        <!-- Page content -->
        <div class="page-content">

            <!-- Page title -->
        	<div class="page-title">
                <h5><i class="fa fa-bars"></i> Магазин <small>Добро пожаловать, <? echo $this->config->item('site_name'); ?>!</small></h5>
                
            </div>
            <!-- /page title -->

			
			
            
         
			
			

					<? empty($subview) ? "" : $this->load->view($subview)  ?>
							<? if($subview != 'admin/orders'): ?>
			<? endif; ?>
                    
             
			
			
			
            <!-- Footer -->
            <div class="footer">
                © Copyright 2016. All rights reserved. Дизайн и разработка: <a href="http://lime-art.ru" title="Lime-ART" target="_blank">Lime-ART</a>
            </div>
            <!-- /footer -->

        </div>
    </div>



</body></html>
<? $this->load->view('admin/components/adm_foot'); ?>