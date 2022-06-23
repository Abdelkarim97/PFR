<?php
    session_start();
include 'connection.php';

/*if (!isset($_SESSION['clientId'])){
    header('location: form.php');
}*/


if (isset($_POST['submit'])){
    $resDate = $_POST['resDate'];
    $returnDate = $_POST['returnDate'];
    $clientId = $_SESSION['clientId'];
    $chassis = $_SESSION['chassis'];
    $date = date("Y/m/d");

    $sql = "INSERT INTO `reservation`(`clientID`, `chassisNumber`, `dateMade`, `dateOut`, `dateBack`) VALUES ('$clientId','$chassis','$date','$resDate','$returnDate')";
    mysqli_query($con, $sql);
    header('location:succes.php');
}


?>

