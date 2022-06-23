<?php 
include 'connection.php';
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <title>Custom form</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                <form action='dbLogin.php' method="POST">
                    <input class="input-box" placeholder="Enter Your Email" 
                     type="text" name="email" required>
                     <input type="password" class="input-box" name="password"
                     placeholder="password" required>
                   <button type="submit" class="submit-btn" name="submit"
                    value="login">Login</button> 
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button class="btn" onclick="openRegister()">Click to sign up</button>
                <a href="">Forgot password</a>
                </div>
                <div class="card-back ">
                
                <form action='dbForm.php' method="POST">
                    <input class="input-box" placeholder="Email" 
                     type="text" name="email" required>
                     <input class="input-box" placeholder="First Name" 
                     type="text" name="firstName" required>
                     <input class="input-box" placeholder="Last Name" 
                     type="text" name="lastName" required>
                     <input class="input-box" placeholder="C.I.N" 
                     type="text" name="cin" required>
                     <input type="number" class="input-box" name="phone"
                     placeholder="Phone" required>
                     <input type="password" class="input-box" name="password"
                     placeholder="Password" required>
                   <button type="submit" class="submit-btn" name="submit"
                    value="login">submit</button> 
                    <input type="checkbox"><span>Remember me</span>
                </form>
                <button class="btn" onclick="openLogin()"><a>I have an Account</a></button>
                
                </div>
            </div>
        </div>
    </div>
    




    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }


    </script>
</body>
</html>