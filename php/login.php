<html>
HELP 
<?php echo "HELLO"; ?>
<?php 
$con = new mysqli('localhost','octo','w3b7ysX6','octo');

if($con ->connect_error){
	die("Connection failed". $con->connect_error);
}
?>

echo "made it here";

<?php



$username = $_POST["username"]; 
$password = $_POST("password");

$query = "SELECT username FROM users WHERE username = ?AND password = ?";

$stmt = $con->prepare($query);
if($stmt->execute(array($username,$password))){
	while($row =$stmt->fetch()){
		print_r($row);
	}
}

?>
