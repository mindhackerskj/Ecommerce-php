<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION['mail']);
 unset($_SESSION['gen']);
header("Location:../../login.php");
?>