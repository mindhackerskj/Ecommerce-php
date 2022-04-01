<?php
session_start();
if (!$_SESSION["name"]) {
  header('Location:error/404.php'); 

}
$servername = "localhost";
$username = "root";
$password = "";
$email= $_SESSION["mail"];
$ttl = $_GET['data'];
// Create connection
$con = new mysqli($servername, $username, $password);
mysqli_select_db($con,'user');
$sql="DELETE FROM cart WHERE email='{$email}'";
 
//$featured=$con->query($sql);
if ($con->query($sql) === TRUE) {
    $total=0;
  } else {
    echo "Error deleting record: " . $con->error;
  }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>K Shoppe</title>

    <style>



img {
     height: 500px;
  width: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

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
  <a class="navbar-brand" href="mainpage.php">K Shoppe</a>

</nav>
  <div  class="row">
      <div class="container">
          <div class="col-md-12 text-center">
            <img class="img-center" style="height:310px" src="https://www.nicepng.com/png/detail/283-2835086_emote-happy-face-icon.png" >
              <h1 class="text-center">Hurray! Order Placed Successfully</h1>
             <a href="order.php"> <button type="button" class="btn btn-success">Go to My Orders</button> </a>
          </div> </div>
  
          </div>
</body>
</html>