<?php 
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


 ?>


<form method="post" action="register.php"><br>
	<input type="text" name="username" placeholder="| Username" required> <br>
	<input type="text" name="login" placeholder="| Login" required> <br>
	<input type="text" name="password" placeholder="| Password" required> <br>
	<input type="text" name="r_password" placeholder="| Repeat password" required> <br>
	<input type="submit" name="submit" value="Register"> <br>
	
</form>