<?php
   session_start();
   
   $user_check = $_SESSION['currentUser'];
   $con=new mysqli('localhost','octo','w3b7ysX6','octo');
   $sql="SELECT username FROM users WHERE userename='$user_check";
   $result=$con->query($sql);
   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   $login_session = $row['username'];
   if(!isset($_SESSION['currentUser'])){
      header("location:login.php");
   }
?>
