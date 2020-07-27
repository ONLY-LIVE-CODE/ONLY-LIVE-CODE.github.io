<?php include "application/views/templates/Game/components/page_head.php"; ?>


<body class="html front not-logged-in one-sidebar sidebar-second page-frontpage" >
	<div id="background">
				<div class="view view-background view-id-background view-display-id-default view-dom-id-8d0b1d13f76428712b8152629536f4ff">
			<div class="view-content">
				<div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
					<div class="views-field views-field-field-background">        
						<div class="field-content">
								<img typeof="foaf:Image" src="<? echo config_item('game_fon'); ?>" width="1920" height="1080" alt="" />
						</div>  
					</div>  
				</div>
			</div>
		</div>	</div>

	<div id="menu_head">
				<div class="region region-menu-head">
			<section id="block-menu-menu-menu" class="block block-menu">
				<div class="content">
					<ul class="menu">
						<li class="first leaf"><a href="/" title="">Главная</a></li>
						<? echo get_menu($menu); ?>
					</ul>  
				</div>
			</section> <!-- /.block -->
		</div><!-- /.region -->	</div>

	<div id="container" class="clearfix">
		<header id="header" role="banner" class="clearfix">
						<div class="block_one">
				<a href="/" title="Главная" id="logo">
					<img src="<? echo config_item('game_logo'); ?>" alt="Главная" />
				</a>
				<nav id="navigation" role="navigation" class="clearfix">
                	<h2 class="element-invisible">Главное меню</h2>
					<ul id="main-menu" class="links clearfix">
						<li class="menu-332 first"><a href="#">Гарантии</a></li>
						<li class="menu-741"><a href="#">Поддержка</a></li>
						<li class="menu-333"><a href="#">Отзывы</a></li>
						<li class="menu-383"><a href="#">Скидка</a></li>
						<li class="menu-811 last"><a href="#" title="">Оплата</a></li>
					</ul>		                
				</nav> <!-- /#navigation -->
			
			</div>

			<div class="region region-header">
				<section id="block-block-16" class="block block-block">
					<div class="content">
						<div id="nav">
							<ul>
							
							<li class="dropdown"><a href="#"><span>Категории</span></a>
								<ul>
								<?php foreach($categories as $category): ?>
<li><a href='/category/<? echo ($category->id); ?>'"><? echo ($category->title); ?></a></li>
					<?php endforeach; ?>		

					</ul>
							</li>
							
							</ul>
						</div>
					</div>
				</section> <!-- /.block -->
			
				<section id="block-search-form" class="block block-search">
					<div class="content">
						<form action="/search" method="post" id="search-block-form" accept-charset="UTF-8">
							<div>
								<div class="container-inline">
									<h2 class="element-invisible">Форма поиска</h2>
									<div class="form-item form-type-textfield form-item-search-block-form">
										<label class="element-invisible" for="edit-search-block-form--2">Поиск </label>
										<input title="Введите ключевые слова для поиска." placeholder="Начните вводить название игры..." type="search" id="edit-search-block-form--2" name="q" value="" size="15" maxlength="128" class="form-text" />
									</div>

									
								</div>
							</div>
						</form>  
					</div>
				</section> <!-- /.block -->
				
			</div><!-- /.region -->		</header>
  
      <? $this->load->view($subview); ?>

		
<?php
mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
?>	

</div>
	<footer id="footer" role="contentinfo" class="clearfix">
				<div class="region region-footer">
			<section id="block-block-2" class="block block-block">
				<div class="content">
					<div class="footer_left"><a class="ft" target="_blank" title="Copyright ДикиЙ " href="http://vk.com/kudo070">Дизайн и разработка ДикиЙ</a> <span class="ft" style="float:right;padding-top: 5px;">Copyright ДикиЙ © 2015</span>
		</div>
					<div class="footer_right">
						
					</div>  
				</div>
			</section> <!-- /.block -->
		</div><!-- /.region -->
		<div id="footer_bootom"></div>	</footer>

</body>

<?php include "application/views/templates/Game/components/page_foot.php"; ?>