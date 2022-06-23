<?php
include 'connection.php';
session_start();
?>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if(isset($_POST['submit'])){
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    echo $count;

    if($count==1){
        if($password == $row['pass']){
            $_SESSION['clientId'] = $row['clientID'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['email'] = $row["email"];
            header('location:index.php');
        }
            else {
                header('location:form.php?error=fail');
            }  
           } else {
            header('location:login.php?error=fail');
            echo "succes";
           }
    

}


