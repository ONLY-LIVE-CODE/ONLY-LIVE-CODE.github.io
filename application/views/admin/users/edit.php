<div class="panel panel-default form-horizontal">
                    <div class="panel-heading"><h6 class="panel-title">Добавление нового пользователя</h6></div>
                    <div class="panel-body">

<? if(isset($error)) {
		echo $error;
	}
	elseif(isset($ok)) {
		echo ' <div class="alert alert-info fade in widget-inner">';
		echo '<button type="button" class="close" data-dismiss="alert">?</button>';
		echo 'Данные успешно сохранены!</div>';
	}
	?>
<? echo validation_errors(); ?>
<? echo form_open_multipart(); ?>
  
<?php
if(1 == $this->session->userdata('group')) {
	
echo '<form style="margin-top:5px;" method="post" name="createadmin" action="/admin/users/" >

   <div class="form-group">
                            <label class="col-sm-2 control-label">Имя: </label>
                            <div class="col-sm-10">
               <input type="text" name="nameu" placeholder="Имя (англ)" class="form-control" required />
                            </div>
                        </div>
						

						
						    <div class="form-group">
                            <label class="col-sm-2 control-label">E-mail: </label>
                            <div class="col-sm-10">
                           <input class="form-control" type="text" name="emailu" id="email" placeholder="E-mail" required />
                            </div>
                        </div>
						 
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Пароль: </label>
                            <div class="col-sm-10">
            <input class="form-control"" type="text" name="passwordu" id="password" placeholder="Пароль" required />
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">Группа: </label>
                            <div class="col-sm-10">
   <input class="form-control" type="text" name="groupu" id="group" placeholder="Группа" required />
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="col-sm-2 control-label">ID: </label>
                            <div class="col-sm-10">
             <input class="form-control" type="text" name="idu" placeholder="ID" required />
                            </div>
                        </div>
					
						
					

	
	<div class="form-actions text-right">
                            <input type="reset" value="Отмена" class="btn btn-danger">
                     <input type="submit"  name="okuser" class="btn btn-primary" value="Создать" /></div>';

}
else {
}

?>			

<? 

if(isset($_POST['okuser']))
{

$iduser = strip_tags($_POST['idu']);
$emailuser = strip_tags($_POST['emailu']);
$passworduser = md5($_POST['passwordu']);
$nameuser = strip_tags($_POST['nameu']);
$groupuser = strip_tags($_POST['groupu']);


$query = mysql_query("INSERT INTO `users` (`id`,`email`,`password`,`name`,`group`) VALUES ('$iduser','$emailuser','$passworduser','$nameuser','$groupuser')"); 


$query = "SELECT `id`,`email`,`password`,`name`,`group` FROM `users`";


	redirect('admin/users/');
} 



 

?>
	
<? echo form_close(); ?>
  </div>  </div>