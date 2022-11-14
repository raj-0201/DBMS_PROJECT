<?php 

session_start();

//$x=$_SESSION['uname'];
session_destroy();
header('location:../index.php');

?>