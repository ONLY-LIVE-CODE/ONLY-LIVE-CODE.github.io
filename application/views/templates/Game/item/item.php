
<? if(count($items)): foreach($items as $item): ?>

 
<?php include "application/views/onko_oplat.php"; ?>

<section role="main" class="clearfix">
			<a id="main-content"></a> 
				
											<h1 class="title" id="page-title"><? echo $item->name; ?></h1>
								<div id="page-goods-block-1">
									<h1>Купить <? echo $item->name; ?></h1>
								</div>

						<div id="page-goods-block-2">		
							
							<div class="page-goods-block-2-left">
							
							<div class="field field-name-field-image field-type-image field-label-hidden">
								<div class="field-items">
									<div class="field-item even">
										<img typeof="foaf:Image" src="<? echo $item->iconurl; ?>" width="460" height="250" alt="<? echo $item->name; ?>">

									</div>
									
								</div>
								
							</div>
							
							</div>

						<div class="page-goods-block-2-right">
								<div class="info_price">
									<div>
										<div class="myprice"><? echo round($item->price_final*100)/100;?><span> RUR</span></div>
									</div>
									<div class="delivery_and_info">
								
										<div class="instant_delivery">Мгновенная доставка</div>
									</div>
								</div>
								
								<div>
									<div class="field field-name-field-buy field-type-link-field field-label-hidden">
										<div class="field-items">
											<div class="field-item even">
												<a href="#pay">Купить</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>
						
						
						<div class="panel-panel panel-col-last" style=" height: 230px; position: relative; width: 237px; float: right; top: -250px; ">
										<div class="inside">
											<div class="panel-pane pane-block pane-views-tags-block">
												<h2 class="pane-title">Рекомендуемые товары</h2>
												<div class="pane-content">
													<div class="view view-tags view-id-tags view-display-id-block view-dom-id-8e3af0b371ee4cfd2f062ba6205467a5">
														<div class="view-empty">
															<div class="view view-tags view-id-tags view-display-id-block_1 view-dom-id-069677ab3362486f577ad845992a6801">
																<div class="view-content">
																	<table class="views-view-grid cols-2">
																		<tbody>
																			<tr class="row-1 row-first">
																				
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>	
									</div>		
						
						
					
							
						<section id="block-panels-mini-info-good" class="block block-panels-mini">
							<div class="content">
								<div class="panel-display panel-2col clearfix" id="mini-panel-info_good">
									<div class="panel-panel panel-col-first">
										<div class="inside">
											<div class="panel-pane pane-block pane-quicktabs-product-description">
												<div class="pane-content">
													<div id="quicktabs-product_description" class="quicktabs-ui-wrapper qt-ui-tabs-processed-processed ui-tabs ui-widget ui-widget-content ui-corner-all">
														
														<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
															<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
																<a href="#qt-product_description-ui-tabs1">Описание</a>
															</li>
															
														</ul>
														<div id="qt-product_description-ui-tabs1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" style=" background-color: rgba(0,0,0,0.2); display: block; border-width: 0; padding: 10px; background-color: rgba(0,0,0,0.2); ">
															<div class="view view-product-description view-id-product_description view-display-id-block view-dom-id-fa8fd795a7bef86618d33faa3cd37d89">
																<div class="view-content">
																	<div>
																		<div class="views-field views-field-body">        
																			<div class="field-content"><p><? echo $item->descr; ?></p></div>  
																		</div>  
																	</div>
																</div>
															</div>
														</div>
														
														
														
														</div>

												</div>
											</div>
										</div>
									</div>				
									
		
			<!-- end.Список товаров -->
			
				</div>
			
	
  
		</div></section>
    </section>


</div></div>

<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Товар не найден...Приходите позже!</td>
	</tr>
<? endif; ?>
<? if(count($items)) : ?>
<div class="panel" style="display:none;">
	<div class="row">
	  <div class="col-lg-3">
		<label class="control-label" for="item">Товар:</label>
		<select class="form-controler input-small" name="item" id="item-selected">
		<? foreach($items as $item): ?>
			<option value="<? echo $item->id; ?>" data-id="<? echo $item->id; ?>" data-min_order="<? echo $item->min_order; ?>"><? echo $item->name; ?></option>
		<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-2">
		<label class="control-label" for="funds">Валюта:</label>
		<select class="form-controler input-small"  name="funds" id="fundsSelect">
			<? foreach($funds as $fund): ?>
			<option value="<? echo $fund['fundid']; ?>" data-fund="<? echo $fund['fundname']; ?>"><? echo $fund['fundname']; ?></option>
			<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-3">
		<label class="control-label" for="email">E-mail:</label>
		<input type="email"  id="row-box-email" class="form-controler input-small" name="email">
	  </div>
	  <div class="col-lg-2">
		<button onclick="sendData();" type="button" class="btn btnbuy btn-primary btn-lg btn-block">Оплатить</button>
	  </div>
	</div>
</div>
<? endif; ?>