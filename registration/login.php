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

  <form class="sign-up" method="post" action="login.php">
  
    <h1 class="sign-up-title">Login in seconds</h1>
    <input type="text" class="sign-up-input" placeholder="User name" name="username" autofocus>
	
    <input type="password" class="sign-up-input" placeholder="Password" name="password">
    <input type="submit" value="Login!" class="sign-up-button" name="login_user">
  </form>
  <center><?php include('errors.php'); ?></center>
  

</body>

</html>
