<?php
include "includes/connect.php";
session_start();
if(isset($_POST["signupsubmit"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $qry="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
    mysqli_query($conn,$qry) or die("connection failed: ".mysqli_error($conn));
    header("location:login.php");
}
if(isset($_POST["loginsubmit"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="page-header">
            <h1>Signup</h1>
        </div>
        <div class="row">
        <div class="col-lg-9">
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label for="username" class="col-sm-2">Username : </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2">Email : </label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2">Password : </label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Renter Password : </label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" placeholder="Renter Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                <input type="submit" class="form-control btn btn-success" name="signupsubmit" value="SignUp">
            </div>
            </div>
        </form>
        </div>
        <form method="post" action="">
        <div class="col-lg-3">
            <h3>Already have an account</h3>
            <input type="submit" class="btn-control btn btn-primary" name="loginsubmit" value="LogIn">
        </div>
        </form>
        </div>
    </div>
</body>

</html>