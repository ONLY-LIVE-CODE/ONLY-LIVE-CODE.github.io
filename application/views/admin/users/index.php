<style>
#cont {
width:805px;
}
#left_user {
width: 400px;
margin-top:-20px;
float:left;
}
#right_user {
width:380px;
float:right;
}
</style>
<style>
#mintext {
font-size:11px;
}
#bigtext {
font-size:14px;
}
</style>

 <?php
$query = mysql_query("SELECT * FROM `users`");
echo '
<div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title">Пользователи</h6></div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Группа</th>
                            </tr>
                        </thead>
                        <tbody>';
						
while ($array = mysql_fetch_array($query))
{
echo '
<tr>
<td>'.strip_tags($array['id']).'</td>
<td>'.strip_tags($array['name']).'</td>
<td>'.strip_tags($array['email']).'</td>
<td>'.strip_tags($array['group']).'</td>
</tr>
';
}
                            
                       echo ' </tbody>
                    </table>
                </div>
            </div>';



?>

 

