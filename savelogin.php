<?php
session_start();
require "connection.inc.php";
if(isset($_POST['submit'])){
$username= $_POST['username'];
$password= $_POST['password'];
echo $username;
echo $password;
$query="SELECT * FROM users_account WHERE username='$username' AND pwd='$password'";
  $query_run=mysqli_query($mysqli,$query);
  if(mysqli_fetch_assoc($query_run)){
    $_SESSION['username']=$username;
     header("location:index.php");
  
  }
  else{
	header("location:Login.php");

  }
}

?>