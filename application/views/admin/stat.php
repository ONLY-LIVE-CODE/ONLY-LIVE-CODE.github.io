<?php
   $db_query_wmr = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'WMR'");
   $db_query_wmz = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'WMZ'");
   $db_query_yad = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'YAD'");
   $db_query_qiwi = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1' AND fund = 'QIWI'");
   $db_query_all = mysql_query("SELECT SUM(price) as sum FROM `orders` WHERE paid = '1'");
   $db_wmr = mysql_fetch_array($db_query_wmr);
   $db_wmz = mysql_fetch_array($db_query_wmz);
   $db_yad = mysql_fetch_array($db_query_yad);
   $db_qiwi = mysql_fetch_array($db_query_qiwi);
   $db_all = mysql_fetch_array($db_query_all);
   ?>
<?php
   $db_query_srall = mysql_query("SELECT SUM(price_rub) as sum FROM `goods`");
   $db_srall = mysql_fetch_array($db_query_srall);
   ?>
<?php
   $db_query_views = mysql_query("SELECT * FROM views LIMIT 1");
   $db_views = mysql_fetch_assoc($db_query_views);
   $vasip = $_SERVER['REMOTE_ADDR'];
   ?>

  <script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>

  <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Дата', 'Доход (руб)'],
		  ['<?=day(7);?>', <?=dayprice(day(7));?> ],
		  ['<?=day(6);?>',  <?=dayprice(day(6));?> ],
		  ['<?=day(5);?>',  <?=dayprice(day(5));?> ],
		  ['<?=day(4);?>',  <?=dayprice(day(4));?> ],
          ['<?=day(3);?>',  <?=dayprice(day(3));?> ],
          ['<?=day(2);?>',  <?=dayprice(day(2));?> ],
          ['<?=day(1);?>',  <?=dayprice(day(1));?> ],
          ['<?=day(0);?>',  <?=dayprice(day(0));?> ]
        ]);

        var options = {
          vAxis: {minValue: 0},
		  
		   legend: {position: 'none', maxLines: 3}
        };

       var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script> 
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<style>
	.info-box-icon {
    border-top-left-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 2px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0,0,0,0.2);
}
.content {
    font-family: 'Open Sans' !important;
    font-style: normal!important;
    font-weight: 300!important;
}
.sidebar-nav-icon {
    font-size: 45px;
}
	.info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
}

.bg-aqua {
    background-color: #2196f3!important;
	    color: #fff !important;
}
.bg-red {
    background-color: #d96557!important;
	    color: #fff !important;
}
.bg-green {
    background-color: #2ecc71!important;
	    color: #fff !important;
}
.bg-yel {
    background-color: #FFB033 !important;
	    color: #fff !important;
}
.info-box-content {
    padding: 5px 10px;
    margin-left: 90px;
}
.info-box-text {
    text-transform: uppercase;
}
.progress-description, .info-box-text {
    display: block;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.info-box-number {
    display: block;
    font-weight: bold;
    font-size: 18px;
}

	</style>
<div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa ion-ios-browsers-outline sidebar-nav-icon"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Товаров</span>
                  <span class="info-box-number"><?=count($goods);?><small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa ion-ios-analytics-outline sidebar-nav-icon"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Общий доход</span>
                  <span class="info-box-number"><?=income();?> <i class="fa fa-rub"></i><small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa ion-ios-time-outline sidebar-nav-icon"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">ЗА СЕГОДНЯ</span>
                  <span class="info-box-number"><?=dayprice(day(0));?> <i class="fa fa-rub"></i><small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yel"><i class="fa ion-ios-monitor-outline sidebar-nav-icon"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">ПРОСМОТРОВ</span>
                  <span class="info-box-number"><?php echo $db_views['sviews'] + 0; ?><small></small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div>
<div class="panel panel-default form-horizontal">
   <div class="panel-heading">
      <h6 class="panel-title">График</h6>
   </div>
   <div class="panel-body">
   <div id="chart_div"></div>
   </div>
</div>
<div class="panel panel-default form-horizontal">
   <div class="panel-heading">
      <h6 class="panel-title">Статистика</h6>
   </div>
   <div class="panel-body">
      <div class="panel panel-default form-horizontal">
         <div class="panel-heading">
            <h6 class="panel-title">Пользователи</h6>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label class="col-sm-2 control-label">Сайт посетило: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_views['sviews'] + 0; ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">Ваш IP:: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $vasip; ?>">
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="panel panel-default form-horizontal">
         <div class="panel-heading">
            <h6 class="panel-title">Сумма купленного товара</h6>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label class="col-sm-2 control-label">WMR: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_wmr['sum'] + 0; ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">WMZ: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_wmr['sum'] + 0; ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">WMR: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_wmz['sum'] + 0; ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">QIWI: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_qiwi['sum'] + 0; ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">Yandex: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_yad['sum'] + 0; ?>">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">Сумма всех покупок: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_all['sum'] + 0; ?>">
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="panel panel-default form-horizontal">
         <div class="panel-heading">
            <h6 class="panel-title">Сумма всех товаров</h6>
         </div>
         <div class="panel-body">
            <div class="form-group">
               <label class="col-sm-2 control-label">Рубли: </label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $db_srall['sum'] + 0; ?>">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>