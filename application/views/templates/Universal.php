
<?php include "application/views/templates/Universal/components/page_head.php"; ?>
<body>
<style>.body{background: url("<? echo config_item('universal_fon'); ?>") no-repeat top center;    background-size: cover;}</style>
 
<div class="body">

<!--U1AHEADER1Z--><div class="over_htop">
<div class="htop">

<div class="h_search">
<form method="post" action="/search">
<input class="h_submit" src="/templates/Universal/img/search.png" type="image">
<input class="h_query" placeholder="Поиск по магазину" name="q" type="text">
</form>
</div>


 
</div>
</div>

<div class="over_header">
<div class="header">
 <a href="/" class="logo"><? echo config_item('site_name'); ?></a>


<div id="h_menu" class="h_menu">
<nav><div id="uNMenuDiv1" class="uMenuV"><ul class="uMenuRoot">
<li><a class=" uMenuItemA" href="/"><span>Главная страница</span></a></li>
<li><? echo get_menu($menu); ?></li>
</ul></div></nav>
</div>

</div>
</div><!--/U1AHEADER1Z-->







 <? $this->load->view($subview); ?>

		
<?php
mysql_query("UPDATE views SET sviews=sviews+1 WHERE id = '1'") or die(mysql_error());
?>	



<!--U1BFOOTER1Z--><!--Футер-->
<div class="h_bottom"> 
<!-- <copy> -->Copyright ДикиЙ © 2015<!-- </copy> -->. <!-- "' -->Дизайн и разработка: <a href="http://vk.com/kudo070" title="ДикиЙ" target="_blank">ДикиЙ</a></span>
</div>
<!--/Футер-->






<div class="panel_sp0">
<div class="panel_sp1">
<div class="pad_sp2">


<div class="sl_cl_sp0">Выбор цвета:</div>

<button id="colorpickerOpen"> </button>
<input id="colorpickerField1" type="hidden" class="special_c1" value="rgba(33,181,151,0.8)" />
<input id="colorpickerField2" type="hidden" class="special_c2" value="21b597" />
<input class="special_c2" type="submit" value="Вернуть" onclick="standart_color()" />

</div>
</div>
<div class="right_sp0">
 <div class="cog_sp0" onclick="open_panel_sp0()"><div class="cog_sp1"></div></div>
</div>
</div>

<script type="text/javascript">
var cornsp = '1';

$('#colorpickerOpen').ColorPicker({
 onSubmit: function(hsb, hex, rgb, el) {
 $('#colorpickerField1').val('rgba('+rgb.r+','+rgb.g+','+rgb.b+',0.8)');
 $('#colorpickerField2').val(hex);
 $(el).ColorPickerHide();
 save_colors();
 },
 onBeforeShow: function () {
 $(this).ColorPickerSetColor('21b597');
 }
})
.bind('keyup', function(){
 $(this).ColorPickerSetColor('21b597');
});

function open_panel_sp0() {
 if(cornsp=='1') {
 $('.panel_sp0').animate({marginLeft:'112px'},200);
 cornsp='0'
 } else {
 $('.panel_sp0').animate({marginLeft:'0px'},200);
 cornsp='1'
 }
}

function save_colors() {select_color_sp0($('#colorpickerField1').val(), $('#colorpickerField2').val())}
function standart_color() {select_color_sp0('rgba(33,181,151,0.8)', '21b597')}

function select_color_sp0(clr1, clr2) {
$('input[type=button],input[type=submit],input[type=reset],button').css('backgroundColor', '#'+clr2);
$('.logo, .logo:hover ').css('color', '#'+clr2);

$('.over_header').css('borderBottom', '4px solid #'+clr2);
$('.h_title').css('borderBottom', '2px solid '+clr1);
$('.one_mtr_price, .h_slide_title span').css('background', clr1);
$('.one_mtr_image, .h_last_add, .popup_header, td.gTableTop, .h_s_buy, .h_cats td a, .pgSwchA, .swchItemA, .swchItem, .swchItemA1, .swchItem1, td.calMdayA, td.calMdayIsA').css('background', '#'+clr2);

setCookie('colors1', clr1, 10, '/');
setCookie('colors2', clr2, 10, '/');
}

var good_colors1 = getCookie('colors1');
var good_colors2 = getCookie('colors2');
select_color_sp0(good_colors1, good_colors2);


</script>

<style type="text/css">
@-moz-keyframes rotate{from {transform: rotate(0);} to {transform: rotate(360deg);}} 
@-moz-keyframes rotate{from {-moz-transform: rotate(0);} to {-moz-transform: rotate(360deg);}} 
@-webkit-keyframes rotate{from {-webkit-transform: rotate(0);} to {-webkit-transform: rotate(360deg);}} 
.panel_sp0 {display:table;position:fixed;top:150px;left:-122px;z-index:99;font-family:Tahoma,sans-serif;font-size:12px} 
.panel_sp1 {display:table-cell;vertical-align:top;text-align:left;width:120px;height:180px;background:#FFF;border:1px solid #dedede;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px}
.right_sp0 {display:table-cell;vertical-align:top}
.pad_sp2 {padding:10px;padding-left:20px;}
.cog_sp0 {margin-top:12px;display:inline-block;width:32px;height:32px;background:url('/templates/Universal/img/cog_bg.png');cursor:pointer;text-align:left}
.cog_sp1 {margin-left:8px;margin-top:8px;width:16px;height:16px;background:url('/templates/Universal/img/cog.png');cursor:pointer}
.cog_sp0:hover .cog_sp1 {animation: rotate 0.5s 1 linear;-moz-animation: rotate 0.5s 1 linear;-webkit-animation: rotate 0.5s 1 linear;}
.sl_cl_sp0 {color:#7b7b7b !important;font-size:12px !important;margin-bottom:7px}
.s1_c_t {color:#9b9b9b !important;padding-top:7px;padding-bottom:2px;font-size:11px}
.special_c1 {border:1px solid #dedede;background:#FFF;width:90px;padding:5px}
.special_c2 {width:90px;margin-top:10px !important}
#colorpickerOpen {width:90px;height:90px;padding:0px}
</style><!--/U1BFOOTER1Z-->

</div>
<script type="text/javascript" src="/templates/Universal/img/template.js"></script>
<?php include "application/views/templates/Universal/components/page_foot.php"; ?>