

<?php 



echo validation_errors(); ?>

<div class='coment_fields'>

<?php echo  form_open(); ?>

<?php echo form_hidden('parent_id','0'); ?>

<ul>

	<li>

		Имя*<?php echo form_input('user_name','','class="form-control normal_field"'); ?>

	</li>

	<li>

		Коментарий* <?php echo form_textarea('body','','class="form-control"'); ?>

	</li>

	<li>

		<?php echo form_submit(array('type'=>'submit','name'=>'coments','value'=>'Отправить')); ?>

	</li>



<?php echo form_close();?>

</div>



<? echo config_item('coment'); ?>

