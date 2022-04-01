<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con,'user');
 $uid = $_GET['data'];
$sql="SELECT * FROM products WHERE id='{$uid}'";
$featured=$con->query($sql);
$product=mysqli_fetch_assoc($featured);


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="icon" href="/images/ic.png" type="image/png" sizes="16x16"> 
     <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
     <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


   
  <title>E commerce</title>
</head>

<body>

<section>
   

   <form action = "php/editpro.php" method = "post" class="form-control">
 <div class="form-group">
   <label for="e">Product name</label>
   <input type="text" name="title" value="<?=$product['title'] ;?>" class="form-control"  >
</div>

 <div class="form-group">
   <label>Product description</label>
   <input type="text" name="description" value="<?=$product['description'] ;?> "class="form-control" id="exampleInputPassword1" >
 </div>

 <div class="form-group">
   <label>Product Brand</label>
   <input type="text"  value="<?=$product['brandname'] ;?>" name="brand" class="form-control" >
 </div>

<div class="form-group">
   <label>Price</label>
   <input type="number"  value="<?=$product['price'] ;?>" name="price" class="form-control" >
 </div>
 
 <div class="form-group">
   <label>Image link</label>
   <input type="hidden" name="Id" value="<?=$_GET['data']; ?>">
   <input type="text" value="<?=$product['image'];?>" name="image" class="form-control" >
 </div>

   
 <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="/javascripts/scripts.js"></script>
    
  
</body>


</html>