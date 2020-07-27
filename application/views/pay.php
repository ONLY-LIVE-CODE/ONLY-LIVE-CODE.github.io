 <?
 if (empty($_COOKIE['id_pay']) and !empty($_GET['id'])) {
	 setcookie ("id_pay", mysql_real_escape_string($_GET['id']));
 } elseif(!empty($_COOKIE['id_pay']) and empty($_GET['id']))
 { $_GET['id'] =  $_COOKIE['id_pay'];} elseif(!empty($_COOKIE['id_pay']) and !empty($_GET['id'])) {
	  setcookie ("id_pay", mysql_real_escape_string($_GET['id']));
 }
       $query = mysql_query("SELECT * FROM `orders` WHERE `id` = '".mysql_real_escape_string($_GET['id'])."'");
       $order = mysql_fetch_assoc($query);
       if($order['fund'] == 'WMR') {
       	$payment = $fund = $this->config->item('WMR');
       }
       elseif($order['fund'] == 'WMZ') {
       	$payment = $fund = $this->config->item('WMZ');
       }
       elseif($order['fund'] == 'QIWI') {
       	$payment = '+'.$fund = $this->config->item('qiwi_num').'';
       }
       elseif($order['fund'] == 'YAD') {
       	$payment = $fund = $this->config->item('yad_wallet');
       }
       elseif($order['fund'] == 'UnitPay') {
       $payment = 'UnitPay';
       }
       elseif($order['fund'] == 'Robokassa') {
       $payment = 'Robokassa';
       }
       
       ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" name="robots" content="none">
    <title>Оплата счета</title>
    <link rel="stylesheet" href="/style/bill.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">
      <script src="http://t4t5.github.io/sweetalert/dist/sweetalert-dev.js"></script>
	   <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
      a.paysystem {
        display: inline-block;
        width: 30%;
        cursor: pointer;
        margin: 0px 5px;
    }

    .clear {
      clear: both;
    }
  </style>
      <script>
         function checkpay(url)
         {
         $('.checkpaybtn').button('loading');
         $.get(url, function(data) {
         $('.checkpaybtn').button('reset');
         var res = JSON.parse(data);
         if(res.status == "ok")
         {
			 
	$('.checkpaybtn').attr('onclick','window.location ="'+res.chkurl+'"');
	$('.checkpaybtn').text('Скачать');
	
         }
         else
         {
         swal("Ошибка!", "Платеж не найден! Попробуйте позже.", "error")
         }
         });
         }
      </script>
</head>
  <body>
  <div id="dev-app">
    <div class="checkout">

      <header class="checkout-header">
        <a href="/"><span class="checkout-logo"></span></a>
        <div class="checkout-guarantee">
          <div class="icon icon-security">
          <i class="fa fa-lock fa-3x"></i>
          </div>
          <span>
            Гарантируем безопасность платежа и сохранность ваших личных данных
          </span>
        </div>
      </header>

      <div data-reactid=".0.1:2">
        <section class="checkout-section">
          <div class="checkout-section-wrap">
            <div class="checkout-carrier-info">
              <div class="checkout-carrier">
                <h1 class="checkout-carrier-title">Оплата счета</h1>
                
                <div class="checkout-carrier-amount">
                  <span class="checkout-currency">
                    <span><?=$order['price'];?></span>
                    <span></span>
                    <i class="fa fa-rub"></i>
                  </span>
                </div>
              </div>
            </div>

            <div class="checkout-sep"></div>

            <div class="checkout-billing">
                            <div class="checkout-billing-header">
                Для оплаты счета переведите указанную сумму на указанный кошелек. При переводе укажите нужное примечание указанное ниже, 
                оно служит для распознавания вашего платежа.
              </div>
                                                        <div class="checkout-hr"></div>
              <div class="checkout-billing-content">
                <div class="checkout-billing-content-field checkout-billing-content-total">
                  <div class="checkout-billing-content-title">
                    <span>Сумма к оплате</span>
                  </div>
                  <div class="checkout-billing-content-amount">
                    <span class="checkout-currency">
                      <span><?=$order['price'];?></span>
                      <span> </span>
                      <i class="fa fa-rub"></i>
                    </span>
                  </div>
                </div>
                <div class="checkout-billing-content-field checkout-billing-content-total">
                  <div class="checkout-billing-content-title">
                    <span>Кошелек</span>
                  </div>
                  <div class="checkout-billing-content-amount">
                    <span class="checkout-currency">
                      <input type="text" class="input-text" onclick="$(this).select();" style="margin-right: 50px;" readonly  value="<?=$payment;?>">
                    </span>
                  </div>
                </div>
                <div class="checkout-billing-content-field checkout-billing-content-total">
                  <div class="checkout-billing-content-title">
                    <span>Примечание</span>
                  </div>
                  <div class="checkout-billing-content-amount">
                    <span class="checkout-currency">
                      <input type="text" class="input-text" onclick="$(this).select();" style="margin-right: 50px;" readonly  value="<?=$order['bill'];?>">
                    </span>
                  </div>
                </div>
              </div>
                          </div>
          </div>
        </section>
          <section class="checkout-section checkout-continue">
          <div class="checkout-section-wrap">
<?if ($order['fund'] == 'YAD') { ?>
<form method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml">
<input name="label" type="hidden" value="<?=$order['bill'];?>">
<input name="comment" type="hidden" value="<?=$order['bill'];?>">
<input name="receiver" type="hidden" value="<?=$this->config->item('yad_wallet');?>">
<input name="short-dest" type="hidden" value=" ">
<input name="targets" type="hidden" value="<?=$order['bill'];?>">
<input name="sum" type="hidden" value="<?=$order['price']+$order['price']*0.5/100;?>">
<input name="quickpay-form" type="hidden" value="shop">
<input name="is-inner-form" type="hidden" value="true">
<input type="hidden" name="successURL" value="http://<?=$_SERVER['HTTP_HOST']?>/pay">
<input type="hidden" name="quickpay-back-url" value="http://<?=$_SERVER['HTTP_HOST']?>/pay">
<button type="submit" class="btn" > <span>Оплатить</span></button> <button onclick="checkpay('/order/<?=$order['rand'];?>')" class="btn checkpaybtn"> <span>Проверить</span> </button>
</form>
<? } elseif($order['fund'] == 'Robokassa') {
$mrh_login          = config_item('rk_login');
$mrh_pass1          = config_item('rk_password1');
$inv_id             =  $order['rand'];
$inv_desc           = $order['name'];
$out_summ           = number_format($order['price']);
$crc                = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1");
$red = "https://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=$mrh_login&OutSum=$out_summ&InvoiceID=$inv_id&Description=$inv_desc&SignatureValue=$crc";
if ($_GET['new'] == '1') { echo '<script> document.location.href="'.$red.'";
</script>'; } ?> 
            <button id="processPayment" class="btn" target="_blank" onclick="window.open( '<?=$red;?>', '_blank');">
              <span>Оплатить</span>
            </button>
			
<? } elseif ($order['fund'] == 'QIWI') {
$red = "https://qiwi.com/payment/transfer/form.action?extra%5B%27account%27%5D=".$payment."&amountInteger=".$order['price']."&extra%5B%27comment%27%5D=".$order['bill']."";
?>
            <button id="processPayment" class="btn" target="_blank" onclick="window.open( '<?=$red;?>', '_blank');">
              <span>Оплатить</span>
            </button>
<? } elseif ($order['fund'] == 'WMR') {
$red = "wmk:payto?Purse=".$payment."&Amount=".$order['price']."&Desc=".$order['bill']."&BringToFront=Y";
?>
            <button id="processPayment" class="btn" target="_blank" onclick="window.open( '<?=$red;?>', '_blank');">
              <span>Оплатить через Keeper Classic</span>
            </button>
 <? } ?>
            <?if ($order['fund'] != 'YAD') { ?>
            <button onclick="checkpay('/order/<?=$order['rand'];?>')" class="btn checkpaybtn">
              <span>Проверить</span>
            </button>
			 <? } ?>
          </div>
        </section>

        <section class="checkout-section checkout-actions">
          <div class="checkout-section-wrap">
            <a href="#" class="checkout-link" onclick="history.back()">
              <span>Изменить способ оплаты</span>
            </a>
          </div>
        </section>
              </div>
    </div>
  </div>
  </body>
</html>