<?php
include "includes/connect.php";
session_start();
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $qry="SELECT password FROM users WHERE email='$email'";
    $sql=mysqli_query($conn,$qry) or die("connection failed : ".mysqli_error($conn));
    if(mysqli_fetch_assoc($sql)['password']==$password){
        echo "login successful";
        header("location:addphoto.php");
    }
    else{
        echo "Invalid Login";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SignIn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="container">
        <div class="page-header">
            <h1>SignIn</h1>
        </div>
        <form classs="form" method="post" action="" >
            <div class="form-group col-sm-4">
            <label for="email">Email : </label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group col-sm-4">
            <label for="password">Password : </label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group col-sm-4" style="margin-top:1.8em">
                <div></div>
            <input type="submit" class="btn btn-success"name="submit" value="SignIn">
            </div>
        </form>
        <!-- <pre><?php var_dump($_POST);?>  </pre> -->
</div>
    </body>
</html>