<?php
session_start();
if (!$_SESSION["name"]) {
  header('Location:error/404.php'); 

}
$t=0;
$servername = "localhost";
$username = "root";
$password = "";
$email= $_SESSION["mail"];
// Create connection
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con,'user');
$sql="SELECT * FROM cart WHERE email='{$email}'";
$featured=$con->query($sql);
/*if(!$sql){
  header('Location:cartempty.php')
}
*/
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
  #to {
  
  position: absolute;
  left: 50%;
  transform: translatex(-50%);
  font-family:verdana;
  color:#1E90FF;
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

</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="mainpage.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=""4>Orders <span class="sr-only">(current)</span></a>
      </li>
      
</ul>
  </div>
  <h3 id="to">My Cart</h3>
  <div class="form-inline my-2 my-lg-0">
  <a href="php/logou.php"  class="btn btn-outline-danger" role="button">Logout</a>
</div>
</nav>
 

 <div class="col-mt-5">
     <div class="row">
         <?php
           while($cart=mysqli_fetch_assoc($featured)):
             $sqli="SELECT * FROM products WHERE id='{$cart['productid']}'";
             $featuredu=$con->query($sqli);
              while($product=mysqli_fetch_assoc($featuredu)):
        
                $total= $total + $product['price'];
                $t=$total;

           ?>
           <div id="hi" class="col-md-3 col-xs-1 ">

<div class="card">
   <img class="form-control" class="card-img-top" alt="Card image cap"
     src="<?= $product['image'] ;?> " style="height:200px;width:auto">
   <div class="card-body">
     <h5 class="card-title"><?= $product['title']; ?></h5>
     <p class="card-text"><?= $product['price'];  ?> Rs.</p>
     
   </div>
 </div>

 
           </div>
           
    <?php
       ;endwhile;
     endwhile; ?>
     <a href="sucess.php?data=<?=$t?>" class="btn btn-primary btn-lg float-end"><?= $total; ?>Rs. <br> <br> <br> <br> <br> <br> <br> <br> Place Order</a>
</div>

</div>  
    </div>
</body>
</html>