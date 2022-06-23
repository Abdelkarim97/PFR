<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
  
<header>

<?php

include'connection.php';

$connected = false;

if(isset($_SESSION['firstName'])){
$connected = true;
}
?>
    <header>
      <a href="#" class="logo"><img src="assets/images/Z1000.png"  alt=""></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#ride">Ride</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#reviews">Reviews</a></li>
      </ul>
      <div class="header-btn">
        <?php if ($connected == false): ?>
          <a href="form.php" class="sign-up">Sign Up</a>
          <a href="login.php" class="sign-in">Sign In</a>
        <?php else : ?>
          <a href="Logout.php" class="sign-in">Log out</a>
          <?php endif; ?>
      </div>
    </header>


</body>
</html>