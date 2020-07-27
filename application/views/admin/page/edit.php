
<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title"><? echo empty($page->id) ? 'Добавить новую страницу' : 'Редактировать страницу: ' . $page->title; ?></h6></div>
                    <div class="panel-body">
<? echo validation_errors(); ?>
<? echo form_open(); ?>

 <div class="form-group">
                            <label class="col-sm-2 control-label">Заголовок: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('title', set_value('title', $page->title),'class="form-control"'); ?>

                                
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Сайт/page/названия: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('slug', set_value('slug', $page->slug),'class="form-control"'); ?>

                                
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-2 control-label">Текст: </label>
                            <div class="col-sm-10">
                                
<? echo form_textarea('body', set_value('body', $page->body), 'class="editor"'); ?>

                                
                            </div>
                        </div>
						
					
<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                         <? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?>
                        </div>
 </div> </div>
<? echo form_close(); ?>