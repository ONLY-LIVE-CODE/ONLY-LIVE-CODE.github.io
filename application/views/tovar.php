<? echo $modals; ?>
<style>
.paytable > tbody > tr > td{border: 1px solid #797360;padding: 5px 10px;vertical-align: middle;}
.paytable{color: #000;}
</style>
  <div class="modal fade" id="paymodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
        <table style="width: auto; margin: auto; height: auto;" class="paytable">
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">�����:</td>
			  <td style="border: 2px solid #000000;" class="payitem">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">���-��:</td>
			  <td style="border: 2px solid #000000;" class="paycount">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">� ������:</td>
			  <td style="border: 2px solid #000000;" class="payprice">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">���� ������:</td>
			  <td style="border: 2px solid #000000;" class="paypercentage">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">������� ��� �������:</td>
			  <td style="border: 2px solid #000000;" id="copyfund" class="payfund">...</td>
		  </tr>
		  <tr>
			  <td style="width: 258px;border: 2px solid #000000;">���������� � �������:</td>
			  <td style="border: 2px solid #000000;"id="copybill" class="paybill">...</td>
		  </tr>
		</table>
        </div>
		<div style="padding-left: 72px; padding-right: 72px;" class="alert alert-danger">
			<strong>�����������</strong> ���������� ������ ������ � ����� �����������!
		</div>
        <div class="payfoot modal-footer">
          <button type="button" onclick="" data-loading-text="���������..." class="checkpaybtn btn btn-primary">���������</button>
        </div>
      </div>
    </div>
  </div>
<table class="table table-bordered">
	<thead>
	</thead>
	<tbody>
	<div style="margin-top: -35px; margin-left: -15px;" class="product-info">
<? if(count($items)): foreach($items as $item): ?>
<div class="speedbar">
        <a href="/" class="home"></a>
        <a href="/" >������</a>
        <a style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;background: none;color: #1656B8;" href="/product/<? echo $item->id; ?>" ><? echo $item->name; ?></a>
    </div>
		<div class="fleft left spacing">
					<center style="margin: auto;padding-right: 332px;">
						<ul><? echo empty($item->iconurl) ? '' : '<img style="margin-top: 0px; padding-right: 0px;border-radius: 5px;width: 390px; height: 263px;display:block;margin-left: -20px;" src="'.$item->iconurl.'" />'; ?>
						<h1 style="margin-top: 0px; margin-bottom: 0px; font-size: 22px;">������ ������ ��?</h1>
						<ul style="text-align: left;padding-left: 4px;">
                    				<li style="height: 13px; line-height: 13px; padding-left: 20px; margin-bottom: 4px; background: url(/goodakk/b-icn.png) no-repeat 0 -268px;">����������� �������� ����� �� E-mail;</li>
                    				<li style="height: 13px; line-height: 13px; padding-left: 20px; margin-bottom: 4px; background: url(/goodakk/b-icn.png) no-repeat 0 -281px;">������ ����������������� ���. ���������;</li>
                    				<li style="height: 13px; line-height: 13px; padding-left: 20px; margin-bottom: 4px; background: url(/goodakk/b-icn.png) no-repeat 0 -294px;">�������� ����� (� ������ �������������);</li>
                				</ul></ul>
					</center>
		<div style="padding-top: 13px;" rel='<? echo $item->id; ?>' title="<? echo $item->name; ?>">
				<div class="image" data-target="#myModal_<? echo $item->id;?>">
				<div id="wrap" style="margin-top: -360px;top:0px;z-index:9999;">
						<h1 style="font-size: 24px; color: #2a88c5; padding-left: 420px; margin: auto; width: 765px;white-space: nowrap; text-overflow: ellipsis; overflow: hidden;"><? echo $item->name; ?></h1>
				    <ul style="margin: auto; width: 745px; padding-left: 420px;" class="sustem">
                                    <li style="text-align: left;background-color: #e9edf2; padding: 7px 13px; color: #383838;"><b>����:</b> <? echo $item->janr; ?></li>
                                    <li style="text-align: left;background-color: #fff; padding: 7px 13px; color: #383838;;"><b>����:</b> <? echo $item->yazuk; ?></li>
                                    <li style="text-align: left;background-color: #e9edf2; padding: 7px 13px; color: #383838;"><b>���������:</b> <? echo $item->platforma; ?></li>
                                    <li style="text-align: left;background-color: #fff; padding: 7px 13px; color: #383838;"><b>�����������:</b> <? echo $item->mylytplayeer; ?></li>
                                    <li style="text-align: left;background-color: #e9edf2; padding: 7px 13px; color: #383838;"><b>���� ������:</b> <? echo $item->relyz; ?></li>
                                    <li style="text-align: left;background-color: #fff; padding: 7px 13px; color: #383838;"><b>��������:</b> <? echo $item->izdatel; ?></li>
				    <li style="text-align: left;background-color: #e9edf2; padding: 7px 13px; color: #383838;"><b>���������:</b> <? echo $item->atkiv; ?></li>
				    </ul>
						<ul style="margin: auto;padding-top: 15px; padding-left: 260px;"><ul style="background: #2a88c5 url(/goodakk/buy-but.png) no-repeat 110px 0!important; border-bottom: 2px solid #2a88c5; -webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px; cursor: pointer; height: 48px; width: 164px; margin: auto; display: block; color: #fff; font-family: 'Arial'; font-size: 16px; overflow: hidden; background-position: 22px -48px!important;" class='buy'>
						<input type="text" style='display:none;'  class="form-control input-micro" id="number-of-items-<? echo $item->id;?>" style="width:30px; height:20px;display:inline;padding:0; " value="<? echo $item->min_order;?>">
						<a style="color: #FFFFFF;display: block; cursor: pointer; font-weight: bold; width: 110px; text-align: center; margin-top: 14px; font-size: 16px; margin-left: 55px;" class="macpay-buyButton" data-toggle="modal" data-target="#setWayForMoney" style="display:inline;cursor:pointer;" onclick="BuyButtonClick(<? echo $item->id;?>)">������</a></div></ul></ul>
						</ul>
						<ul style="padding-top: 0px;margin: auto;padding-left: 100px; width: 830px;">
						<ul style="width: 60px; margin: auto;"><span class="price_holder "><span style="margin-top: -55px; margin-left: 0px; margin-right: 0px; margin-bottom: 0px;padding-left: 185px;font-family: Arial; font-size: 45px; font-weight: 700; color: #e91d1f; float: left;" class="price"><? echo round($item->price_final*100)/100;?>P</span></ul>
						
				</div>
				</div>
				
				<div class='extra-wrap'>
					<div>
<ul style="width: 745px;margin-top: 25px;" class="tab-nav">
<li class="cur"><span>��������</span></li>
<li class=""><span>������</span></li>
<li class=""><span>�������������� ����������</span></li>
</ul>
<div class="tab-box cur" style="display: block;"><p><span><?php echo $item->descr;  ?></p></span></div>
<div class="tab-box" style="display: none;">
<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>

<script type="text/javascript">
  VK.init({apiId: 4616767, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 20, width: "704", attach: "*"});
</script>
</div>
<div class="tab-box" style="display: none;">

<p style="text-align: center;"><strong>�������� �� ��������:</strong><br>
<span style="color:#FF0000"><strong>������ �� ������ �������</strong></span></p>

<p style="text-align: center;">���� ����� ������� ������ ����� 20 �����, � ��� ��������� ��������������� �� �������.</p>

<p style="text-align: center;">���� ���-�� �������� ����� 20 �����, ������ �� ����� (�� ����������, ����� �������)</p>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;"><strong>�������� �� �����:</strong></p>

<p style="text-align: center;">������ �� ������ ����������� �� ��� ��������� ��������</p>

<p style="text-align: center;"><span style="color:#FF0000"><span style="line-height:1.6em">�������� ��� ���� �� ����������� �� ��� �������.</span></span></p>

<p style="text-align: center;">� ������ ���� � ����� ������� �� ����� �������������, ����� ����� � ������.</p>

</div>
						<div class="description">
						<br>
				   		</div><br>
					</div>
					</div>
					<div style="padding-top: 10px;" class='wrapper mb-1'>
					<div id="tabs" class="htabs">
					</div>
					</div>
						<div id="tab-�oments" class="tab-content" style="display: none;">
							<ul>
			                    <?php if (count($coments)): foreach ($coments as $coment): ?>
			                        <li>
			                        	<b><?php  echo $coment->user_name; ?></b>
			                        	<small><?php  echo $coment->created; ?></small><br/>
			                        	<p><?php  echo $coment->body; ?></p>
			                         </li>
			                    <?php endforeach; endif; ?>
			                </ul>
			                 <div class="listing">
			                    <?php if($pagination): ?>
			                        <?php echo $pagination; ?>
			                    <?php endif; ?>
			                </div>
			                <?php $this->load->view('components/coments_form');?>
			            </div>

					</div>


					

				</div>
		</div>
		</div>
		</div>
		<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">����� �� ������...��������� �����!</td>
	</tr>
<? endif; ?>
	</tbody>
</table>
<? if(count($items)) : ?>
<div class="panel" style="display:none;">
	<div class="row">
	  <div class="col-lg-3">
		<label class="control-label" for="item">�����:</label>
		<select class="form-controler input-small" name="item" id="item-selected">
		<? foreach($items as $item): ?>
			<option value="<? echo $item->id; ?>" data-id="<? echo $item->id; ?>" data-min_order="<? echo $item->min_order; ?>"><? echo $item->name; ?></option>
		<? endforeach; ?>
		</select>
	  </div>
	  <div class="col-lg-2">
		<label class="control-label" for="funds">������:</label>
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
		<button onclick="sendData();" type="button" class="btn btnbuy btn-primary btn-lg btn-block">��������</button>
	  </div>
	</div>
</div>
<? endif; ?>
	  <div class="modal fade" id="setWayForMoney">
		<div style="margin-top: 30px;margin-centre: 10px;width:600px;" class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			  <h4 style="display: none;padding-left: 200px; padding-right: 200px;" class="modal-title">�������� ������ ������</h4>
			</div>
			<div class="modal-body"></a>
		<input type="email" placeholder="���-��" class="form-control input-small" name="count"  id="end-number"><br>
				<input type="email" class="form-control input-small" id="alert-box-email" placeholder="��� Email" onInput="checkEmail();"><br>
				<input type="cupon" id="cupon" class="form-control input-small" name="cupon" placeholder="�������� ����� (���� ����)">
	  </div>
				<center><?php
if(1 == config_item('unitpay_status')){
echo '<button onclick="setWayForMoney(6);setEmail();" id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal" type="button" class="btn btnbuy btn-white btn-lg btn-block" style="padding: 5px;margin-left: 0px;margin-top: 1px;"><img src="/img/pay.png" style="height:45px;"></button>';
}
else{
}
?>


</center>


				</div>
			</div>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	  <div class="modal fade" id="agreement">
		<div style="margin-top: 30px;margin-centre: 10px;width:350px;" class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" style="opacity:1;font-size:28px;" data-dismiss="modal" aria-hidden="true"></button>
			  	<input type="cupon" id="cupon" class="form-control input-small" name="cupon" placeholder="�������� �����" style="width:280px;margin-centre:5px;">

			</div>
			<div class="">
               <? echo config_item('sogl'); ?>
			</div>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div>


	 <style>
	  .product-info {
margin-top: -11px;
background-color: rgb(255, 255, 255);
padding: 15px;
border-radius: 5px;
box-shadow: rgba(0, 0, 0, 0.0901961);
}

#content .box .box-content {
margin-top: -100;
background: none;
}


.modal {
overflow-y: auto;
}



</style>


  <style>
.btn-block {
    display: block;
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    height: 56px;
}

.btn-primary {
    color: #FFF;
    background-color: #2FA4E7;
    border-color: #2FA4E7;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
 color: #FFF;
    background-color: #2FA4E7;
    border-color: #2FA4E7;
	}

	.modal-header {
    min-height: 16.4286px;
    padding: 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 1);
	
	  </style>
	  
	  
	  <style>
	  
	  .modal-body {
    border: 1px solid rgba(233, 233, 233, 1);
    overflow: hidden;
}

.modal-content {
    position: relative;
    background-color: rgba(245, 245, 245, 1);
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0px;
    outline: 0px none;
    box-shadow: 0px 3px 9px rgba(0, 0, 0, 0.5);
    background-clip: padding-box;
}

#side-right {
display:none;
}

.modal-body {
border: 0px solid rgba(233, 233, 233, 1);
overflow: hidden;
}

.modal-header {
min-height: 16.4286px;
padding: 15px;
border-bottom: 0px solid rgba(255, 255, 255, 1);
}


.carousel {
position: relative;
display: none;
}

#header {
margin-top: -20px;
}

.slider {
display: none;
}
  
	  </style>
	 