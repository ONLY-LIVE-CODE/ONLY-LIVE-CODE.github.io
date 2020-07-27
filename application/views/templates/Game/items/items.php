
		<section id="main" role="main" class="clearfix">
			<a id="main-content"></a> 
			
			<section id="block-quicktabs-the-main-unit-of-goods" class="block block-quicktabs">
				<div class="content">
					<div  id="quicktabs-the_main_unit_of_goods" class="quicktabs-ui-wrapper">
						<ul>
							<li><a href="#qt-the_main_unit_of_goods-ui-tabs1">Все товары</a></li>
							<li><a href="#qt-the_main_unit_of_goods-ui-tabs2">Популярное</a></li>
						</ul>
						<div  id="qt-the_main_unit_of_goods-ui-tabs1">
						
									
						<section id="block-views-goods-block" class="block block-views">
							<div class="content">
								<div class="view view-goods view-id-goods view-display-id-block view-dom-id-0360474a33e5c35727ec79d722867d49">
									<div class="view-content">
										<table class="views-view-grid cols-3">
											<tbody>
												
								<tr class="row-1 row-first">
							<? if(count($items)): foreach($items as $item): ?>	
								<td class="col-1">
									<div class="views-field views-field-field-price">
										<div class="field-content"><? echo round($item->price_final*100)/100;?> RUR</div>  
									</div>  
									<div class="views-field views-field-field-image">        
										<div class="field-content">
											<a href="<?php echo base_url("product/".$item->id); ?>">
												<img src="<? echo $item->iconurl; ?>" width="230" height="107" alt="<? echo $item->name; ?>">

											</a>
										</div>  
									</div>  
									<div class="views-field views-field-title">        
										<span class="field-content">
											<a href="<?php echo base_url("product/".$item->id); ?>"><? echo $item->name; ?></a>
										</span>  
									</div>          
								</td>
								<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>

								</tr>
								
																	



											</tbody>
										</table>
									</div>
								</div>  
							</div>
						</section>  
							
						</div>
						
						<div  id="qt-the_main_unit_of_goods-ui-tabs2">
							<section id="block-views-goods-block-2" class="block block-views">
								<div class="content">
									<div class="view view-goods view-id-goods view-display-id-block_2 view-dom-id-4e636eb388f8912769b20950a0c6fdbb">
										<div class="view-content">
											<table class="views-view-grid cols-3">
												<tbody>
														<tr class="row-1 row-first">
								<?php
    $sql = "SELECT * FROM `goods` WHERE onmain = '1' ORDER BY price_final ASC ";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo ' <td class="col-1"><div class="views-field views-field-field-price"><div class="field-content">';
	 echo  round( $row['price_final']*100)/100;
echo ' RUR</div>	</div>  ';
echo ' <div class="views-field views-field-field-image"> 	<div class="field-content">  ';
echo ' <a href="/product/'. $row['id'] .'">';
echo ' 	<img src="'. $row['iconurl'] .'" width="230" height="107" alt="'. $row['name'] .'">	</a>		</div>  		</div>  ';
echo '	<div class="views-field views-field-title">  	<span class="field-content"> 	<a href="/product/'. $row['id'] .'">'. $row['name'] .'</a></span>   ';
echo ' </div>  ';
echo ' 	</td>';

        }
      }
?>   
								

								</tr>
												</tbody>
											</table>
										</div>
									</div>  
								</div>
							</section>
						</div>
					</div>  
				</div>
			</section>

			<section id="block-block-15" class="block block-block">
								<h2 class="block-title">Купить в магазине дешево и просто</h2>
						</section>
		
		</section>

		<aside id="sidebar-second" role="complementary" class="sidebar clearfix">
						<div class="region region-sidebar-second">
				<section id="block-block-7" class="block block-block">
					<h2 class="block-title">Последняя продажа</h2>
					
					<div class="content">
						<div id="block-block-7-ajax-content" class="ajaxblocks-wrapper">
																					<?php
    $sql = "SELECT * FROM `orders` WHERE paid = '1' ORDER BY date DESC LIMIT 1";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo ' <span id="data">	<div class="crop">';
		echo '	<div class="last_sale_date">';
				echo '<div class="field-content">';
				  date_default_timezone_set('Europe/Moscow');
            echo date('d-m H:i',$row['date']);
				
echo '</div>  ';
			echo '</div>';
		echo '	<a href="/product/'. $row['id'] .'">';
			echo '<img src="'. $row['photo'] .'" alt="'. $row['name'] .'">';
		echo '	</a>';
		echo '</div>';
	echo '	<div class="GoodName">';
		echo '	<a style="text-decoration: none;    text-shadow: 1px 1px 1px #000;    position: absolute;    width: 220px;    font-size: 12px;    color: #ffffff;    background: url(/templates/Game/images/special_offer/black_opacity.png) repeat;    white-space: nowrap;    overflow: hidden;    text-overflow: ellipsis;" href="/product/'. $row['id'] .'">';
			
			echo ''. $row['name'] .'</a>';
		echo '</div>';
echo '</span>';

        }
      }
?>  	


						</div> 				 
					</div>
				</section> <!-- /.block -->
				
				<section id="block-block-19" class="block block-block">
					<h2 class="block-title">СНИЖЕННАЯ ЦЕНА</h2>
					<div class="content">
						<div id="csgo">
							<span id="csgo_overall_cnt"></span>		
							<div id="csgo_hdata">
								
				
			<?php
    $sql = "SELECT * FROM `goods` WHERE type_Item = '2' ORDER BY price_final ASC LIMIT 2";
    $query = mysql_query($sql);

    if(!mysql_num_rows($query)) 
        echo "Нет товаров";
    else
    {
        while($row = mysql_fetch_assoc($query))
        { 
echo ' 	<a class="buy" href="/product/'. $row['id'] .'" target="_blank">';
		echo '<div class="price">';
		 echo  round( $row['price_final']*100)/100;
		echo ' RUR</div><div class="image">';
	;
			echo '<img src="'. $row['iconurl'] .'" style="width: 110px;" width="110" height="73" alt="'. $row['name'] .'" /></div>';
		echo '	<div class="name">'. $row['name'] .'</div>	</a>';
			

        }
      }
?>  	

			
										
							</div>
						</div>
					</div>
				</section> <!-- /.block -->
				
				
				
			</div><!-- /.region -->		</aside>
    </div>