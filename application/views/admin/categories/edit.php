<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title"><? echo empty($categories->id) ? 'Добавить категорию' : 'Изменить категорию: ' . $categories->title; ?></h6></div>
                    <div class="panel-body">


<? echo !empty($errors) ? $errors : "" ; ?>
<? echo validation_errors(); ?>
<? echo form_open_multipart();?>

 <div class="form-group">
                            <label class="col-sm-2 control-label">Название: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('title', set_value('title', $categories->title),'class="form-control"'); ?>

                                
                            </div>
                        </div>
						
						<input type='hidden' name='slug' value='test'>
<div class="form-group">
                            <label class="col-sm-2 control-label">Порядок: </label>
                            <div class="col-sm-10">
                                
<? echo form_input('sort', set_value('sort', $categories->sort),'class="form-control" style="width:100px; text-align:center;"'); ?>
                                
                            </div>
                        </div>
						
						<? 
	$list	=	array(
			'1' => 'Показывать',
			'0' => 'Не показывать',
			
			);
	?>
						<div class="form-group">
                            <label class="col-sm-2 control-label">На главной: </label>
                            <div class="col-sm-10">
                               
							<?php echo form_dropdown('show', $list, $categories->show,'class="form-control"'); ?>
							</div>
                        </div>
						
						
						
<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                         <? echo form_submit('submit','Сохранить','class="btn btn-primary"'); ?>
                        </div>
	

<? echo form_close(); ?>
</div></div>