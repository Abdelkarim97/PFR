<?php
// include'connection.php';
session_start();

$dbServerName = "localhost";
$dbUserName = "sysadmin";
$dbPassword = "";
$dbName = "carrent";



$con = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

$connected = false;
echo $_SESSION['clientId'];
if(isset($_SESSION['firstName'])){
$connected = true;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">
    <title>HOME</title>
</head>
<body>
    <!--HEADER-->
    <header>
      <a href="#" class="logo"><img src="assets/images/Z1000.png"  alt=""></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="#ride">Ride</a></li>
        <li><a href="rides.php">Services</a></li>
        <li><a href="about.php">About</a></li>
    
      </ul>
      <div class="header-btn">
        <?php if ($connected == false): ?>
          <a href="form.php" class="sign-up">Sign Up</a>
          <a href="form.php" class="sign-in">Sign In</a>
        <?php else : ?>
          <a href="Logout.php" class="sign-in">Log out</a>
          <?php endif; ?>
      </div>
    </header>
  <!--HOME-->
  <section class="home" id="home">
    <div class="text">
      <?php if($connected == true):?>
        <h2>Welcome, <?php echo $_SESSION['firstName']?></h2>
        <?php endif; ?>
      <h1><span>Looking</span> to <br>rent a car</h1>
      <p>From 259dh per day find an Appropriate Car for you from an rich collection
      </p>
      <div class="app-stores">
        <img src="assets/images/ios.png" alt="">
        <img src="assets/images/ggl.png" alt="">
      </div>
    </div>
      <div class="form-container">
      </div>
  </section>
  <!--RIDE-->
  <section class="ride" id="ride">
    <div class="heading">
      <span>How Its Work</span>
      <h1>Rent With 3 easy Steps</h1>
    </div>
    <div class="ride-container">
    <div class="ride-container">
      <div class="box">
        <i class="bx bxs-star"></i>
        <h2>Choose a Car</h2>
        <p>Get there fast gives you a uniqe car collection so you can find what you need easily.</p>
      </div>

      <div class="box">
        <i class="bx bxs-calendar-check"></i>
        <h2>Pick-Up Date</h2>
        <p>Make a date to pick up so we can get your car ready for you</p>
      </div>

      <div class="box">
        <i class="bx bxs-map"></i>
        <h2>Get your Car</h2>
        <p>Our company have multiple places to pick up the car </p>
      </div>
    </div>
  </section>
 
 

 
 
 
 

 
 
  <!--SERVICES-->
  <section class="services" id="services">
    <div class="heading">
      <span>Best Services</span>
        <h1>Explore Our top Deals <br>
       From Top Rated Deals</h1>   
    </div>
    


    
    <div class="services-container">
    <?php
    //  session_start();
    //   echo $_SESSION["id_user"];

      include 'connection.php';

      $vehicule = "SELECT  * from vehicule LIMIT 6";
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
          <a href="carDetails.php?id=<?php echo $row ['chassisNumber']; ?>" class="btn" name="rent">Rent Now</a>
      </div>


<?php } ?>






     </div>
    </div>
   <a href="rides.php"> <button id="seemore">SEE MORE</button></a>
  </section>
  <!--About-->
  <section class="about" id="about">
  <div class="heading">
      <span>About Us</span>
        <h1>Best Customer Experience</h1>   
      </div>
      <div class="about-container">
        <div class="about-img">
          <img src="assets/images/Mrc.png" alt="">
        </div>
        <div class="about-text">
          <span>About Us</span>
          <p>Get There Fast has a new face. After more than 20 years in business, we decided to give a fresher look to our brand and our services. With our fully renewed fleet of vehicles, we are ready to meet all expectations and requirements..</p>
          <a href="about.php" class="btn">Learn More</a>       
        </div>
      </div>
  </section>
  <!--Reviews-->

 <!--footer-->
 <div class="copyright">
    <p>&#169; Get There Fast All rights Reserved </p>
    <div class="social">
  <i class='bx bxs facebook-square'></i>
  <i class='bx bx1-twitter'></i>
 <i class='bx bx1-instagram'></i>
  </div>
 </div>


    
 <script src="https://unpkg.com/scrollreveal"></script>
<script src="main.js"></script>
</body>
</html>