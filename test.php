<?php 

$con = new mysqli('localhost','octo','w3b7ysX6','octo');



if($con ->connect_error){
	die("Connection failed". $con->connect_error);
}

echo 'Connected Succesfully';


?>
