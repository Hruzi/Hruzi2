<?php 
echo '<!DOCTYPE html>
<html>

<head>
  <title>Form</title>
  <link href="2.css" rel="stylesheet" type="text/css">
</head>

<div class="login-page">
  <div class="form">
    <form method="post" action="register.php" class="login-form">
      <input type="text" name="username" placeholder="| Username" required> <br>
	  <input type="text" name="login" placeholder="| Login" required> <br>
	  <input type="password" name="password" placeholder="| Password" required> <br>
	  <input type="password" name="r_password" placeholder="| Repeat password" required> <br>
	  <input type="submit" class="submit" name="submit" value="SIGN IN"> <br>
    </form>
  </div>
</div>
</body>
</html>';
 
 ?>