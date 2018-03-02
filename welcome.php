<?php
session_start();
$sessionUser=$_SESSION['currentUser'];
?>
<html>
   
   <head>
      <title>Welcome</title>
   </head>
   
   <body>
    <h1>Welcome <?php 
    	if(!(empty($sessionUser)))
       		print("$sessionUser"); 
   		else
   			header("location:login.html");
   	?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>