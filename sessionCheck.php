<?php
session_start();
$con=new mysqli('localhost','octo','w3b7ysX6','octo');
if($con->connect_error){
	die("Connection failed");
}
if(isset($_SESSION['currentUser'])){
$checkUser=$_SESSION['currentUser'];
$sql="SELECT username FROM users WHERE username='$checkUser'";
$result=$con->query($sql);
if(mysqli_num_rows($result)==1)
	$currentUser=$_SESSION['currentUser'];
}
else{
	session_destroy();
	print("you are not logged in");
	header("location:login.html");
}

?>
