<?php 

$db=mysqli_connect(“localhost”, “octo”, “w3b7ysX6”)
or die(“Error”);
echo ”sup”;



if (($_POST[‘password’]) == ($_POST[‘confirmpassword])){

$firstName = $_POST[‘firstName’];
$lastName = $_POST[‘lastName’];
$username = $_POST[‘username’];
$email = $_POST[‘email’];
$password = $_POST[‘password’];

$query = “INSERT INTO ‘users’ (username, password, firstname, lastname, email) VALUES (‘$username’, ‘$password’, ‘$firstName’, ‘$lastName’, ‘$email’);

if ($db->query($query) === TRUE) {
	echo “User registered successfully”;
} else {
	echo “Error: “ . $query . “<br>” . $db->error;
}

}

$db->close();



?>