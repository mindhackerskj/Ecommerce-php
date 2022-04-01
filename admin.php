<?php

 $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con,'user');
$sql="SELECT * FROM products WHERE featured=1";
$featured=$con->query($sql);

function runMyFunction($id) {
    $link = mysqli_connect("localhost", "root", "", "user");
    if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  } 
  $sqli="DELETE FROM products WHERE id='$id'";
   
    if(mysqli_query($link, $sqli)){
      header("Refresh:1; url=admin.php");
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
      
      <h1>Deleted Successfully</h1>
      
      
      </body>
      </html>
      ";
  } else{
      echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
  }
  }
  
  if (isset($_GET['data'])) {
      
    runMyFunction($_GET['data']);
  }
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><a href="main/addproductpage.php">Add product</a></h2>
    
  <?php
           while($product=mysqli_fetch_assoc($featured)):
               ?>      
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $product['title']; ?></td>
        <td><?= $product['price']; ?> Rs.</td>
        <?php $phpVariable= $product['id']; ?>
        <td><a href="main/editpropage?data=<?=$phpVariable?>" class="btn btn-info">Edit</a>
          <a href="admin.php?data=<?=$phpVariable?>" class="btn btn-primary">Delete</a>
      </tr>
       
  </table>
  <?php endwhile; ?>
</div>

</body>
</html>
