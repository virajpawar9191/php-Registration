<?php
// start the session
session_start();



// connecting to server
$con = mysqli_connect('localhost','root','','login');

if(!$con){
    echo "connection failed";
}


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// inserting Data

$query = "INSERT INTO users(name, username, email, password) VALUES ('$name','$username','$email','$password') ";

$success = mysqli_query($con,$query);

if(! $success){
    
    echo "Registration Failed";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registartion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="registration-form">
        <h1>REGISTER HERE</h1>
        <form action="register.php" method="post">
            <p>Full Name:</p>
            <input type="text" name="name" placeholder="Full Name">
            <p>User Name:</p>
            <input type="text" name="username" placeholder="User Name">
            <p>Email:</p>
            <input type="email" name="email" placeholder="Email">
            <p>Password:</p>
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>