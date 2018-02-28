<?php 
include("config.php");



//echo 'Connected Succesfully';

$sql = "INSERT INTO users (username,password,firstname,lastname, email) VALUES ('test','pw','fn','ln','test@test.com')";

if ($con->query($sql) === TRUE) {
    echo "Inserted test sucessfully";
} else {
    echo "Error inserting user" . $con->error;
}




?>