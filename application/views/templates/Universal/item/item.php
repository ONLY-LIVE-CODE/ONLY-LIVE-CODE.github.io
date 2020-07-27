
<? if(count($items)): foreach($items as $item): ?>
<?php include "application/views/onko_oplat.php"; ?>
<link href="/templates/Universal/ulightbox/ulightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/templates/Universal/ulightbox/ulightbox.js"></script>
<div class="h_content">



<div class="h_content_in">
<!-- <body> -->



<!--Шапка товара-->
<div class="h_shat">
 
 <div class="h_shat_image">
 <div class="h_shat_image_in">

<script type="text/javascript">
//['original_img_url','org_width','org_height','resized_img_url','res_width','res_height']
var allEntImgs10=[['<? echo $item->foto1; ?>',0,0,'<? echo $item->foto1; ?>',235,273],['<? echo $item->foto2; ?>',0,0,'<? echo $item->foto2; ?>',235,273]];
</script>
<script type="text/javascript">
function _bldCont(indx){
var bck=indx-1;var nxt=indx+1;
if (bck<0){bck = allEntImgs10.length-1;}
if (nxt>=allEntImgs10.length){nxt=0;}
var imgs='';
if (allEntImgs10.length>1){
for (var i=0;i<allEntImgs10.length;i++){var img=i+1;
if(allEntImgs10[i][0].length<1){continue;}
if (i==indx){imgs += '<b class="pgSwchA">'+img+'</b> ';}
else {imgs += '<a class="pgSwch" href="javascript://" rel="nofollow" onclick="_bldCont('+i+');return false;">'+img+'</a> ';}
}
imgs = '<div align="center" style="padding:8px 0 5px 0;white-space:nowrap;overflow:auto;overflow-x:auto;overflow-y:hidden;"><a class="pgSwch" href="javascript://" rel="nofollow" onclick="_bldCont('+bck+');return false;">&laquo; Back</a> '+imgs+'<a class="pgSwch" href="javascript://" rel="nofollow" onclick="_bldCont('+nxt+');return false;">Next &raquo;</a> </div> ';}
var hght = parseInt(allEntImgs10[indx][2]); if ($.browser.msie) { hght += 28; };
_picsCont = '<div id="_prCont" style="position:relative;"><img alt="" border="0" src="' + allEntImgs10[indx][0] + '"/>'+imgs+'</div>';
new _uWnd('wnd_prv', "Изображения товара", 10, 10, { waitimages:300000, autosizewidth:1, hideonresize:1, autosize:1, fadetype:1, closeonesc:1, align:'center', min:0, max:0, resize:1 }, _picsCont);
}
</script>

 <img alt="" src="<? echo $item->foto1; ?>" class="gphoto" onclick="_bldCont1(10, this.getAttribute('idx'));" id="ipreview" idx="0" title="Кликните для увеличения изображения">
 </div>
 </div>

 <div class="h_shat_list">

<img alt="" src="<? echo $item->foto2; ?>" class="gphoto" onclick="var el=getElementById('ipreview'); el.src='<? echo $item->foto2; ?>'; el.setAttribute('idx',0);">
<img alt="" src="<? echo $item->foto3; ?>" class="gphoto" onclick="var el=getElementById('ipreview'); el.src='<? echo $item->foto3; ?>'; el.setAttribute('idx',1);">






 </div>

 <div class="h_shat_text">
 <div class="h_title" style="border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgba(32, 46, 43, 0.8);"><? echo $item->name; ?></div>

 <div class="h_s_price"><span class="id-good-10-price"><? echo $item->price_final; ?> руб.</span>
</div>

<ul class="shop-options" id="id-10-options">
<a href="#pay"><input class="h_s_buy"  id="setEmailButton" data-dismiss="modal" aria-hidden="true" data-toggle="modal" class="buy_now" type="button" value="Купить"></a>

</ul>




</div>
</div>
<!--/Шапка товара-->


<!--Нижняя часть товара-->

<div class="h_sbtm">

<div class="h_sbtm_left">
<div class="h_title" style="border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgba(32, 46, 43, 0.8);">Описание</div> 
<? echo $item->descr; ?>
</div>

<div class="h_sbtm_right">
<div class="h_title" style="border-bottom-width: 2px; border-bottom-style: solid; border-bottom-color: rgba(32, 46, 43, 0.8);">Отзывы</div> 

 
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tbody><tr><td colspan="2"><script type="text/javascript">function ban_item(id){if (confirm('Вы действительно хотите активировать данный материал?')){var img=document.getElementById('bi'+id);img.src='http://s5.ucoz.net/img/fr/EmnAjax.gif';_uPostForm('',{url:'http://universalshop.ucoz.ae/index/86-'+id+'-1'});}}
			function del_soc_item(id, as_spam){
                if (confirm('Вы подтверждаете удаление?')){
                    var img=document.getElementById('di'+id);img.src='http://s5.ucoz.net/img/fr/EmnAjax.gif';
                    _uPostForm('',{url:'http://universalshop.ucoz.ae/index/',type:'POST',data:{ssid:'546443056000244150722',a:'38',s:id, soc_type: scurrent, sdata: ssdata[scurrent], as_spam: (as_spam ? 1 : 0) }});
                }
			}
			function del_item(id,as_spam){
                if (confirm('Вы подтверждаете удаление?')){
                    var img=document.getElementById('di'+id);img.src='http://s5.ucoz.net/img/fr/EmnAjax.gif';
                    _uPostForm('',{url:'http://universalshop.ucoz.ae/index/',type:'POST',data:{ssid:'546443056000244150722',a:'38',s:id,as_spam:(as_spam?1:0)}});
                }
			}
			</script>
			<div id="myGrid" style="display:none;">
				<div style="position:fixed;width:100%;text-align:center;padding-top:250px;">
					<img alt="" src="http://s5.ucoz.net/img/ma/m/i3.gif" style="border:0;width:220px;height:19px;">
				</div>
			</div>
			<script type="text/javascript">
				function spages(p,link) {
					document.location.href = link.href;
				}
			</script><a name="comments"></a><div id="newEntryT"></div><div id="allEntries"></div><div id="newEntryB"></div><script type="text/javascript">
			
		if( !window.uCoz ) window.uCoz = {};
		if( !uCoz.spam ) uCoz.spam = {};
		if( !uCoz.spam.sign ) uCoz.spam.sign = {};
		
		if( !uCoz.spam.config ) uCoz.spam.config = {};
		
		uCoz.spam.config.scopeID  = 0;
		uCoz.spam.config.idPrefix = 'comEnt';
		
		uCoz.spam.sign.spam            = 'Спам';
		uCoz.spam.sign.notSpam         = 'Не спам';
		uCoz.spam.sign.hidden          = 'Спам-сообщение скрыто.';
		uCoz.spam.sign.shown           = 'Спам-сообщение показано.';
		uCoz.spam.sign.show            = 'Показать';
		uCoz.spam.sign.hide            = 'Скрыть';
		uCoz.spam.sign.admSpam         = 'Разрешить жалобы';
		uCoz.spam.sign.admSpamTitle    = 'Разрешить пользователям сайта помечать это сообщение как спам';
		uCoz.spam.sign.admNotSpam      = 'Это не спам';
		uCoz.spam.sign.admNotSpamTitle = 'Пометить как не-спам, запретить пользователям жаловаться на это сообщение';
		
		
		
		uCoz.spam.moderPanelNotSpamClick = function(elem) {
			var waitImg = $('<img align="absmiddle" src="/.s/img/fr/EmnAjax.gif">');
			var elem = $(elem);
			elem.find('img').hide();
			elem.append(waitImg);
			var messageID = elem.attr('data-message-id');
			var notSpam   = elem.attr('data-not-spam') ? 0 : 1; // invert - 'data-not-spam' should contain CURRENT 'notspam' status!
			$.post('/index/', {
				a          : 101,
				scope_id   : uCoz.spam.config.scopeID,
				message_id : messageID,
				not_spam   : notSpam
			}).then(function(response) {
				waitImg.remove();
				elem.find('img').show();
				if( response.error ) {
					alert(response.error);
					return;
				};
				if( response.status == 'admin_message_not_spam' ) {
					elem.attr('data-not-spam', true).find('img').attr('src', '/.s/img/spamfilter/notspam-active.gif');
					$('#del-as-spam-' + messageID).hide();
				} else {
					elem.removeAttr('data-not-spam').find('img').attr('src', '/.s/img/spamfilter/notspam.gif');
					$('#del-as-spam-' + messageID).show();
				};
				console.log(response);
			});
			return false;
		};

		
		uCoz.spam.report = function(scopeID, messageID, notSpam, callback, context) {
			return $.post('/index/', {
				a: 101,
				scope_id   : scopeID,
				message_id : messageID,
				not_spam   : notSpam
			}).then(function(response) {
				if( callback ) {
					callback.call(context || window, response, context);
				} else {
					window.console && console.log && console.log('uCoz.spam.report: message #' + messageID, response);
				};
			});
		};
		
		uCoz.spam.reportDOM = function(event) {
			if( event.preventDefault ) event.preventDefault();
			var elem      = $(this);
			if( elem.hasClass('spam-report-working') ) return false;
			var scopeID   = uCoz.spam.config.scopeID;
			var messageID = elem.attr('data-message-id');
			var notSpam   = elem.attr('data-not-spam');
			var target    = elem.parents('.report-spam-target').eq(0);
			var height    = target.outerHeight(true);
			var margin    = target.css('margin-left');
			elem.html('<img src="/.s/img/wd/1/ajaxs.gif">').addClass('report-spam-working');
			uCoz.spam.report(scopeID, messageID, notSpam, function(response, context) {
				context.elem.text('').removeClass('report-spam-working');
				window.console && console.log && console.log(response); // DEBUG
				response.warning && window.console && console.warn && console.warn( 'uCoz.spam.report: warning: ' + response.warning, response );
				if( response.warning && !response.status ) {
					// non-critical warnings, may occur if user reloads cached page:
					if( response.warning == 'already_reported' ) response.status = 'message_spam';
					if( response.warning == 'not_reported'     ) response.status = 'message_not_spam';
				};
				if( response.error ) {
					context.target.html('<div style="height: ' + context.height + 'px; line-height: ' + context.height + 'px; color: red; font-weight: bold; text-align: center;">' + response.error + '</div>');
				} else if( response.status ) {
					if( response.status == 'message_spam' ) {
						context.elem.text(uCoz.spam.sign.notSpam).attr('data-not-spam', '1');
						var toggle = $('#report-spam-toggle-wrapper-' + response.message_id);
						if( toggle.length ) {
							toggle.find('.report-spam-toggle-text').text(uCoz.spam.sign.hidden);
							toggle.find('.report-spam-toggle-button').text(uCoz.spam.sign.show);
						} else {
							toggle = $('<div id="report-spam-toggle-wrapper-' + response.message_id + '" class="report-spam-toggle-wrapper" style="' + (context.margin ? 'margin-left: ' + context.margin : '') + '"><span class="report-spam-toggle-text">' + uCoz.spam.sign.hidden + '</span> <a class="report-spam-toggle-button" data-target="#' + uCoz.spam.config.idPrefix + response.message_id + '" href="javascript://">' + uCoz.spam.sign.show + '</a></div>').hide().insertBefore(context.target);
							uCoz.spam.handleDOM(toggle);
						};
						context.target.addClass('report-spam-hidden').fadeOut('fast', function() {
							toggle.fadeIn('fast');
						});
					} else if( response.status == 'message_not_spam' ) {
						context.elem.text(uCoz.spam.sign.spam).attr('data-not-spam', '0');
						$('#report-spam-toggle-wrapper-' + response.message_id).fadeOut('fast');
						$('#' + uCoz.spam.config.idPrefix + response.message_id).removeClass('report-spam-hidden').show();
					} else if( response.status == 'admin_message_not_spam' ) {
						elem.text(uCoz.spam.sign.admSpam).attr('title', uCoz.spam.sign.admSpamTitle).attr('data-not-spam', '0');
					} else if( response.status == 'admin_message_spam' ) {
						elem.text(uCoz.spam.sign.admNotSpam).attr('title', uCoz.spam.sign.admNotSpamTitle).attr('data-not-spam', '1');
					} else {
						alert('uCoz.spam.report: unknown status: ' + response.status);
					};
				} else {
					context.target.remove(); // no status returned by the server - remove message (from DOM).
				};
			}, { elem: elem, target: target, height: height, margin: margin });
			return false;
		};
		
		uCoz.spam.handleDOM = function(within) {
			within = $(within || 'body');
			within.find('.report-spam-wrap').each(function() {
				var elem = $(this);
				elem.parent().prepend(elem);
			});
			within.find('.report-spam-toggle-button').not('.report-spam-handled').click(function(event) {
				if( event.preventDefault ) event.preventDefault();
				var elem    = $(this);
				var wrapper = elem.parents('.report-spam-toggle-wrapper');
				var text    = wrapper.find('.report-spam-toggle-text');
				var target  = elem.attr('data-target');
				target      = $(target);
				target.slideToggle('fast', function() {
					if( target.is(':visible') ) {
						wrapper.addClass('report-spam-toggle-shown');
						text.text(uCoz.spam.sign.shown);
						elem.text(uCoz.spam.sign.hide);
					} else {
						wrapper.removeClass('report-spam-toggle-shown');
						text.text(uCoz.spam.sign.hidden);
						elem.text(uCoz.spam.sign.show);
					};
				});
				return false;
			}).addClass('report-spam-handled');
			within.find('.report-spam-remove').not('.report-spam-handled').click(function(event) {
				if( event.preventDefault ) event.preventDefault();
				var messageID = $(this).attr('data-message-id');
				del_item(messageID, 1);
				return false;
			}).addClass('report-spam-handled');
			within.find('.report-spam-btn').not('.report-spam-handled').click(uCoz.spam.reportDOM).addClass('report-spam-handled');
			window.console && console.log && console.log('uCoz.spam.handleDOM: done.');
            try { if (uCoz.manageCommentControls) { uCoz.manageCommentControls() } } catch(e) { window.console && console.log && console.log('manageCommentControls: fail.'); }
			return this;
		};
	
			uCoz.spam.handleDOM();
		</script></td></tr>
 <tr><td colspan="2" align="center"></td></tr>
 <tr><td colspan="2" height="10"></td></tr>
 </tbody></table>
 


<div class="h_comm_open">
<button onclick="$('.h_comm_open,.h_comm_add').slideToggle(200)" style="background-color: rgb(32, 46, 43);">Оставить отзыв</button>
</div>

<div class="h_comm_add">
 
 Тут блок
</div>


 
</div>

</div>
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
<!--/Нижняя часть товара-->


<!-- </body> -->

</div>
</div>