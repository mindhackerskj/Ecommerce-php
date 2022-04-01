<?php

$con = mysqli_connect("localhost", "root", "", "user") or die(mysqli_error($con));

$first_name = $_POST['username'];
$mail = $_POST['email'];
$passc=$_POST['pass2'];
$num=$_POST['num'];
$passw = $_POST['password1'];


$select_query = "SELECT name,email FROM userdetails WHERE email= '$mail' ";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);


if($row['email']==$mail)
   {

     header('Location:../error/email.php');

    
   }  

else if($passc!=$passw)
{

  header('Location:../error/confirm.php');

}
else
{

 $user_registration_query = "insert into userdetails(email,name,number,password) values('$mail','$first_name','$num','$passw')";
 $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
 
 header('Location:../pages/thanku.php');

}

?>   


