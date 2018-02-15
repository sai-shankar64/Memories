<?php
include "includes/connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PhotoFeed</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <div class="container">
       <?php
            $qry="SELECT * FROM photos WHERE 1";
            $sql=mysqli_query($conn,$qry);
            if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_assoc($sql)){
                    $photoname=$row['photoname'];
                    $photo="images/".$row['photo'];
                    echo "
                    <div class='row'>
                    <div class='col-sm-6'> 
                         <p>$photoname</p>
                        <img src='$photo' class='img-thumbnail img-responsive' style='height:\"250px\"'>
                    </div>
                    </div>";
                }
            }
       ?>
       </div>
    </body>
</html>