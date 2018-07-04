<?php 
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
 ?>