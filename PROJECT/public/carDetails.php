<?php 
include('connection.php');
session_start();
$connected = false;
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
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <title>Car details</title>
    <style>
        .prd{

 
  width: 500px;
  float: left;
  clear: both;
    flex-shrink: 0;
   
    border: solid;
    
}
.square {
     
     height: 500px;
     border: solid;
     margin-right: 100px;
     
}
h3{

 font-weight: 400;
}
footer{
 background-color: rgba(0, 0, 0, 0.2);
 margin-top: 40px;
}
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $_SESSION['chassis'] = $id;
        $vehicule = "SELECT *
        FROM vehicule
        INNER JOIN office
        ON vehicule.officeNumber = office.officeNumber where chassisNumber = '$id' ";
        $result = mysqli_query($con ,$vehicule);
  
        while($row = mysqli_fetch_assoc($result) ){
       



?>


<main class="main">
    <section class="section ">
        <div class="container py-2">
            <h1><?php echo $row['productionYear'] ;?> <?php echo $row['model']; ?></h1>
        </div>
    </section>
    <section class="" >
        <div class="container">
            <div class="row container">
                <div class="col-6 container">
                    <img id ="photo"src="<?php echo 'url/'.$row['photos'];?>" class="prd" >
                </div>
                <div class="col-6"><h3 class="py-1">Category : <?php echo $row['type']; ?></h3><br>
                <h6 class="py-2">Office Adress : <?php echo $row['adress']; ?></h6><br>
                <h3 class="py-3"> Price per Day : <?php echo $row['pricePerDay']; ' ' ?> DH</h3>
                <h3 class="text-dark"> Rating :
               <div class="stars">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star-half"></i>
        </div>
                </h3><br>
                <form action="reservation.php" method="POST">
          <div class="input-box">
            <span>Pick-Up Date</span>
            <input type="date" name="resDate" id="">
          </div>
          <div class="input-box">
            <span>Return Date</span>
            <input type="date" name="returnDate" id="">
          </div class="py-3">
          <?php if ($connected == false): ?>
            <a href="form.php" class="sign-up">To Reserve Sign In First</a>
          <?php else : ?>
                <button  type="submit" name="submit" class="btn btn-dark my-3" value="">Make reservation</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
</section>

  
    </main>
    <?php } ?>
</body>
</html>