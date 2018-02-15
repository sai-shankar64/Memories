<?php
include "includes/connect.php";
session_start();
if(isset($_POST['submit'])){
    $photoname=$_POST['photoname'];
    $filetmp=$_FILES["image"]["tmp_name"];
    $filename=$_FILES["image"]["name"];
    move_uploaded_file($filetmp,"images/".$filename);
    $qry="INSERT INTO `photos` (`photoname`,`photo`) VALUES ('$photoname','$filename');";
    mysqli_query($conn,$qry) or die("connection failed: ". mysqli_error($conn));
    //echo "<img src='images/$filename'>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Memory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Add Memory</h1>
        </div>
        <form class="form" method='post' action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="photoname">Photo Name : </label>
                <input type="text" class="form-control " placeholder="Enter Photo Name" name="photoname">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="btn btn-primary">
            </div>
            <div class="form-group">
            <label class="radio-inline"> <input type="radio" name="choice" checked="checked">
                Public</label>
                <label class="radio-inline">  <input type="radio" name="choice">
                Private</label>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Add Photo" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>