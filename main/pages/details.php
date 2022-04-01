<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:black' rel='stylesheet'>


 
<title>Profile</title>
</head>
<body>
<style>

.
	#ful{
  

  height:100vh;
  width:100vw;
   
  
  } 
	#ful h1{

  font-family:'Montserrat',black;
  font-size:60px;
  text-align:center;
  padding-top:200px;
}
   * {
  
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-align:center;
  font-size:20px;

}
table{
  
  margin-top:80px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
}
</style>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../pages/welcome.php" target="blank">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="https://github.com">K Shoppe</a></li>
        <li class="dropdown">
          
      
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
        <li><a href="../php/logou.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
 
</nav>

<div id="ful">
<?php

if($_SESSION["name"]) {
?>

                  <table class="table  table-hover">
 
  <tr>
    <th colspan="4"></th>
  </tr>
  <tr>
    <td>#user_id</td>
    <td><?php echo $_SESSION['id']; ?></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><?php echo $_SESSION['name']; ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $_SESSION['mail']; ?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $_SESSION['gen']; ?></td>
  </tr>
</table>
                   

<?php
}else header('Location:../login.php');
?>

</div>
 </div>
 <div class="footer">
  <p><strong>©</strong>K Shoppe  Inc.</p>
</div>
</body>
</html>