<?php
session_start();
if (!$_SESSION["name"]) {
  header('Location:error/404.php'); 
 
}
 $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con,'user');
$sql="SELECT * FROM products WHERE featured=1";
$featured=$con->query($sql);

//addtocart
function runMyFunction($id,$mail) {
  $link = mysqli_connect("localhost", "root", "", "user");
  if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  $sql = "INSERT INTO cart (productid,email) VALUES ('$id','$mail')";
  if(mysqli_query($link, $sql)){
    echo "Added to Cart.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

if (isset($_GET['data'])) {
    
  runMyFunction($_GET['data'],$_GET['data2']);
}


?>
<!DOCTYPE html>
<html>
    <head>
    <title>K Shoppe</title>

    <style>
        
  #hi{
    width:200px;
    padding-left: 70px;
    padding-top: 3px;
    margin-bottom: 30px;
    
  }
input[type=button], input[type=submit] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 3px 2px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

#to {
  
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    font-family:verdana;
    color:#1E90FF;
}

</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">K Shoppe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="cart.php">Cart <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.html">Orders</a>
      </li>
</ul>
  </div>
  <h3 id="to">Hi,<?php echo $_SESSION["name"]; ?> </h3>
  <div class="form-inline my-2 my-lg-0">
  <a href="php/logou.php"  class="btn btn-outline-danger" role="button">Logout</a>
</div>
</nav>
 

 <div class="col-mt-5">
     <div class="row">
         <?php
           while($product=mysqli_fetch_assoc($featured)):
              

           ?>
           <div id="hi" class="col-md-3 col-xs-1 ">

<div class="card" style="width: 14rem;">
   <img class="form-control" class="card-img-top" alt="Card image cap"
     src="<?= $product['image'] ;?> " style="height:200px;width:auto">
   <div class="card-body">
     <h5 class="card-title"><?= $product['title']; ?></h5>
     <p class="card-text"><?= $product['price']; ?> Rs.</p>
     <?php $phpVariable= $product['id']; 
     $mail = $_SESSION['mail']; ?>
     <a href="details.php?data=<?=$phpVariable?>" class="btn btn-info" role="button">details</a>
     
    
   
    <a href="mainpage.php?data=<?=$phpVariable?>&data2=<?=$mail?>" class="btn btn-primary">Add to cart</a>
   </div>
 </div>
           </div>
    <?php endwhile; ?>
</div>
</div>
</body>
</html>