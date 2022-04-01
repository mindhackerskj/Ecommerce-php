<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link href='http://fonts.googleapis.com/css?family=Montserrat:black' rel='stylesheet'>
   <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap"rel="stylesheet"/>
   <link href='http://fonts.googleapis.com/css?family=Montserrat:black' rel='stylesheet'>
 
<title>Home</title>
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
#ful a{
	color:black;
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
      <a class="navbar-brand" href="https://github.com" target="blank">K Shoppe</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          
      
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="details.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
        <li><a href="../php/logou.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
 
</nav>

<div id="ful">
<?php

if($_SESSION["name"]) {
?>
<center><h1>Welcome <?php echo $_SESSION["name"]; ?>.</h1></center> <p>Log in Sucessful </p>
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