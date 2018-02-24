

<?php 
include("config.php");

//$username = $_POST["username"]; 
//$password = $_POST("password");

$username = "test";
$password = "pw";

// $sql = "SELECT firstname,lastname FROM users WHERE username = $username AND password = $password " ;
// $result = $con->query($sql);

//  foreach ($con->query($sql) as $row) {
//         print $row['firstname'] . "\t";
//         print $row['lastname'] . "\n";
// }


$stmt = $con->prepare("SELECT firstname,lastname FROM users WHERE username = ? password = ?");


$stmt ->bind_param("ss", $username, $password);


$result =$stmt.execute();

while($result){
	print $result['firstname'];
}


echo "gote here";


?>


