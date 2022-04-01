<?php
   
session_start();  

$con = mysqli_connect("localhost", "root", "", "user") or die(mysqli_error($con));

$uname= $_POST['email'];
$passw= $_POST['password'];


$select_query = "SELECT * FROM userdetails WHERE   email= '$uname' ";
$select_query_result = mysqli_query($con, $select_query) ;
$row = mysqli_fetch_array($select_query_result);

if($row['email']==$uname && $row['password']==$passw)
{	
  $_SESSION['id'] = $row['id'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['mail'] =$row['email'];
  $_SESSION['gen'] =$row['gender'];

 header('Location:../mainpage.php');
   
}
else($row['password']!=$passw){    
        
        
    	header('Location:../error/password.php')
   
   }


  
?>
