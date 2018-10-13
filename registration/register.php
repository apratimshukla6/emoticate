<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <form class="sign-up" method="post" action="register.php">
  <?php include('errors.php'); ?>
    <h1 class="sign-up-title">Sign up in seconds</h1>
    <input type="text" class="sign-up-input" placeholder="Choose ur Username" name="username" autofocus>
	<input type="text" class="sign-up-input" placeholder="What's ur email ID" name="email">
    <input type="password" class="sign-up-input" placeholder="Choose a password" name="password_1">
	<input type="password" class="sign-up-input" placeholder="Confirm your password" name="password_2">
    <input type="submit" value="Sign me up!" class="sign-up-button" name="reg_user">
  </form>
<a style="text-decoration:none" href="login.php"><p align= "center" font-size=30 >Already registered?</a></p>
  
  

</body>

</html>
