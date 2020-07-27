

<? if(count($items)): foreach($items as $item): ?>
<?php include "application/views/onko_oplat.php"; ?>
<table class="table table-bordered">
	<thead>
	</thead>
	<tbody>
	<div style="margin-top: 5px;" class="product-info">

		<div class="fleft left spacing">
		<div rel='<? echo $item->id; ?>' title="<? echo $item->name; ?>">
				
				
				<div class='extra-wrap'>
					<div>


<div class="tab-box cur" style="font-size: 20px; display: block;"><center><h2><span><? echo $item->name; ?></h2></center></span></div>


<div class="tab-box cur" style="display: block;"><center><h1><span><?php echo $item->descr;  ?></h1></center></span></div>


<ul style="margin-top: 15px;" class="block-title1">
<center><b><a href="#pay"" style="cursor: pointer; font-size: 20px; color:white;">Купить</a></b></center>
</ul>

		</div>
		</div>
		</div>
		<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Товар не найден...Приходите позже!</td>
	</tr>
<? endif; ?>
	</tbody>
</table>
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
<!--/Нижняя часть товара-->

