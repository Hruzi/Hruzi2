<?php 

session_start();
$registr = true;
 $connect = mysql_connect('localhost', 'root', '') or die(mysql_error());
 mysql_select_db('baza');
 if (isset($_POST['submit'])) {
 	$username = $_POST['username'];
 	$login = $_POST['login'];
 	$password = $_POST['password'];
 	$r_password = $_POST['r_password'];
 	if ($password == $r_password){
 		$query = mysql_query("INSERT INTO users VALUE ('','$username','$login','$password')") or die(mysql_error());
 	}
 	else {
 		die("Password must march");
 	}
 }

 else {
 	echo '<!DOCTYPE html>
<html>

<head>
  <title>Form</title>
  <link href="2.css" rel="stylesheet" type="text/css">
</head>
';
 }


 if (isset($_POST['enter'])) {
 	$e_login = $_POST['e_login'] ;
 	$e_password = $_POST['e_password'] ;

 	$query = mysql_query("SELECT * FROM users WHERE login = '$e_login'");
 	$user_data = mysql_fetch_array($query);

 	if ($user_data['password'] == $e_password){
 		$chek = true;
 		$_session[name] = $e_login;
 	}
 	else {
 		echo "Не правильный пароль или логин";
 	}
 	
 }

if (isset($_POST[logout])) {
unset($_session[name]);
session_destroy();
}
 ?>





<?php 
if (isset($_session[name])){
	echo 'Вы успешно зашли на сайт <br>
	<form method="post" action="register.php"><br>
	<input type="submit" name="logout" value="logout"> <br>
	</form>';
}
else {

	echo '
	<link href="2.css" rel="stylesheet" type="text/css">
	<div class="login-page">
  <div class="form">
    <form method="post" action="register.php" class="login-form"><br>
	<input type="text" name="e_login" placeholder="| Login" required> <br>
	<input type="password" name="e_password" placeholder="| Password" required> <br>
	<input type="submit" class="submit" name="enter" value="Login"> <br>
	 <p class="message">Not registered? <a href="regis.php">Create an account</a></p>
</form>
  </div>
</div>';
}
 ?>

<?php  if ($chek == true){

echo '<div class="header">
		12345678912345678912345789
	</div>';
}
	

?> 