<?php 

$con = new mysqli('localhost','octo','w3b7ysX6','octo');



if($con ->connect_error){
	die("Connection failed". $con->connect_error);
}

//echo 'Connected Succesfully';


$sql = "CREATE TABLE users (
username VARCHAR(30) NOT NULL PRIMARY KEY,
password VARCHAR(30),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(50),
email VARCHAR(50) NOT NULL
)";

if ($con->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}




$con->close();
?>
