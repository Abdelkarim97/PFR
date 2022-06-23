<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>All cars</title>
</head>
<body>
<?php
include'connection.php';
session_start();
$connected = false;

if(isset($_SESSION['firstName'])){
$connected = true;
}
?>
    <header>
      <a href="#" class="logo"><img src="assets/images/Z1000.png"  alt=""></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
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
<section class="services" id="services">
    <div class="heading">
      <span>Lorem ipsum dolor sit.
      </span>
        <h1>OUR UNIQUE <br>
       COLLECTION</h1>   
    </div>
     <div class="services-container">
     <?php
    //  session_start();
    //   echo $_SESSION["id_user"];

      include 'connection.php';

      $vehicule = "select * from vehicule;" ;
      $result = mysqli_query($con ,$vehicule);

      while($row = mysqli_fetch_assoc($result) ){
     ?>
     <div class="box">
      <div class="box-img">
      <img src="<?php echo 'url/'.$row['photos'];?>" alt="">
        </div>
        <p><?php echo $row ['productionYear']; ?></p>
        <h3><?php echo $row ['model']; ?></h3>
        <h2><?php echo $row ['pricePerDay']; ?><span>DH/Day</span></h2>
        <a href="carDetails.php?id=<?php echo $row ['chassisNumber']; ?>" class="btn" name ="rent">Rent Now</a>
     </div>


<?php } ?>
     </div>
    </div>
  </section>
</body>
</html>