<?php
include 'connection.php';
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cin = $_POST['cin'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $sql = "INSERT INTO customer (email, firstName, lastName, cin, phone, pass) 
VALUES ('$email', '$firstName', '$lastName', '$cin' ,'$phone' , '$password')";
$request = mysqli_query($con,$sql);
}
header('location:form.php');


