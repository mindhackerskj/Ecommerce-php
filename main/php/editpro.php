<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con,'user');


    $title = $_POST['title'];
    $id = $_POST['Id'];
$description = $_POST['description'];
$image=$_POST['image'];
$brand=$_POST['brand'];
$price = $_POST['price'];

    $link = mysqli_connect("localhost", "root", "", "user");
    if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  } 

  $sqly="UPDATE products SET title='$title',price='$price',description='$description',brandname='$brand',image='$image' WHERE  id='$id'";
   
    if(mysqli_query($link, $sqly)){
      echo "
<html>
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

<h1>Updated Successfully</h1>


</body>
</html>
";
        header("Refresh:2; url=../../admin.php");
        

      
  } else{
      echo "ERROR: Could not able to execute $sqly. " . mysqli_error($link);
  }
  
  ?>
