<?php

$con = new mysqli('localhost','root',"",'cosc310');
if($con ->connect_error){
    die("Connection failed". $con->connect_error);}

$years = array();
//$year = 2017;
if($stmt=$con->prepare("SELECT DISTINCT year FROM finances WHERE username = ?")){
$stmt->bind_param("s",$username);
$username='test';
//set username to session attribute
$stmt->execute();
$stmt->bind_result($a);
while($stmt->fetch()){
	//echo $a;
array_push($years,$a);
}
$stmt->close();
// for($i = 0; $i < count($years); $i++){
// 	echo $years[$i];
// }
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Expense</title>
</head>
<body>



	<form method = "post" action = "viewYearlyExpenses.php">



<select name = "year">
<?php
for($i = 0; $i < count($years); $i++){
	echo '<option>'.$years[$i].'</option>';
}
	?>

</select>
  <input type="submit" value="Submit">
	</form>



</body>
</html>
