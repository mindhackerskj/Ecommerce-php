<?php

$con = mysqli_connect("localhost", "root", "", "user") or die(mysqli_error($con));

$title = $_POST['title'];
$description = $_POST['description'];
$image=$_POST['image'];
$brand=$_POST['brand'];
$price = $_POST['price'];
$featured=1;

 

 $user_registration_query = "insert into products(title,price,brandname,description,image,featured) values('$title','$price','$brand','$description','$image','$featured')";
 $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
 
 echo "
 <head>
 <style>
 h1 {
     display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   text-align: center;
   min-height: 90vh;
 color:green;}
 
 </style>
 </head>
 <body>
 
 <h1>Product Added</h1>
 
 
 </body>
 </html>
 ";
 header("Refresh:1; url=../../admin.php");

?>




