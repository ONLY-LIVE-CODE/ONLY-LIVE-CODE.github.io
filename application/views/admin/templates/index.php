

<div class="panel panel-default form-horizontal">
                <div class="panel-heading"><h6 class="panel-title">Редактирование шаблонов</h6></div>
                <div class="panel-body">
				
				
				
				
				<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo ' <div class="alert alert-info fade in widget-inner">';
		echo '<button type="button" class="close" data-dismiss="alert">×</button>';
		echo 'Данные успешно сохранены!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>
				
				
   <div class="form-group">
                            <label class="col-sm-2 control-label">Шаблон: </label>
                            <div class="col-sm-10">
							
                          <? echo form_dropdown('templates', array('1'=>'Элегант','2'=>'Универсал','3'=>'Премиум','4'=>'Перфект','5'=>'Квадрат','6'=>'Мамба','7'=>'Игровой','8'=>'Лайт'), $this->config->item('templates'),'class="select-search select2-offscreen"'); ?>
                            </div>
                        </div>
						
						   <hr>
				
			

                
				
                    <div class="row">
					
					<div class="col-lg-3 col-md-6 col-sm-6">
				
                    <div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/elegant.jpg">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/elegant" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                      
                        </div>
                    </div>  
					<div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/boxy.png">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/boxy" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                         
                        </div>
                    </div>
					
					
					
					</div>
					
					
								<div class="col-lg-3 col-md-6 col-sm-6">
				
                    <div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/universal.jpg">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/universal" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                          
                        </div>
                    </div>  
					<div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/premium.jpg">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/premium" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                          
                        </div>
                    </div>
					
					
					
					</div>
				
				
				
				<div class="col-lg-3 col-md-6 col-sm-6">
				
					<div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/perfect.jpg">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/perfect" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                          
                        </div>
                    </div>
					
					<div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/game.png">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/game" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
					</div>
					
					
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/mamba.jpg">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/mamba" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                           
                        </div>
					
                    </div>
					
							<div class="widget">
                        <div class="thumbnail">
                            <div class="thumb">
                                <img alt="" src="/templates/Lite.png">
                                <div class="thumb-options">
                                    <span>
                                        <a href="/admin/templates/lite" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                                       
                                    </span>
                                </div>
                            </div>
                          
                        </div>
                    </div>
					</div>
					
					
					

					
					</div>
						
						
						
						
					</br>
					
						<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                     
							<? echo form_submit('submit','Сохранить','value="upload" class="btn btn-primary"'); ?>
                        </div>
					
					<? echo form_close(); ?>
                </div>
            </div>