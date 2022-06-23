<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <title>Succes</title>
</head>
<body>
<?php
    session_start();
      include 'connection.php';
      $id = $_SESSION['clientId'];
      $reservation = "SELECT  * from reservation where clientID = $id order by clientID ASC limit 1";
      $result = mysqli_query($con ,$reservation);

      while($row = mysqli_fetch_assoc($result)){
?>
    <?php
    
        $id = $_SESSION['chassis'];
        $check = "SELECT *
        FROM vehicule
        INNER JOIN office
        ON vehicule.officeNumber = office.officeNumber where chassisNumber = '$id' ";
        $res = mysqli_query($con ,$check);
  
        while($line = mysqli_fetch_assoc($res)){
       


?>


 
       

 
  



  




<section class="py-5">
    <div class="container py-2">
        <h1>Done !</h1><br>
        <h2>Thank you Mr/Mrs <span class="text-primary"><?php echo $_SESSION['firstName']?></span> You can Pick up your <span class=text-primary><?php echo $line['model']; ?></span></h2><br>
        <H2>At Our Bureau in <span class="text-info"><?php echo $line ['adress']; ?></span></H2><br>
        <h2>Pick Up date : <?php echo $row ['dateOut']; ?></h2><br>
        
        <h3>Reservation Done : <?php echo $row ['dateBack']; ?></h3>
        <h3><?php 
            $dateOut = strtotime($row ['dateOut']);
            $dateBack = strtotime($row ['dateBack']);
            $dateDiff = strtotime($dateBack - $dateOut);
            echo date('d', $dateDiff);

        ?></h3>
        <a href="index.php"> <button class="back my-5">Back to Website</button></a>
        </div>
    <?php }?>  <?php } ?>
</section>
<style>
    .back{
    background: #474fa0;
    color: #FFD700;
    padding: 10px;
    border-radius: 0.5rem;
    cursor:pointer
}
.back:hover{
    background: var(--text-color);
}
    
</style>
</body>
</html>