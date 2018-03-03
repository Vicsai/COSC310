<?php
$con = new mysqli('localhost','root',"",'cosc310');
	if($con ->connect_error){
    die("Connection failed". $con->connect_error);}

$years = array();
$year = 2017;
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
	<title>Add Expense To a Month</title>
</head>
<body>



	<form method = "post" action = "processExpense.php">

 	 <input type="text" name="amount" placeholder="Enter $ Amount Here" >
  <br>
   <select name ="category">
   <option disabled>Choose Expense</option>
  <option >food</option>
  <option >rent</option>
  <option >clothing</option>
	<option>entertainment</option>
	<option>income</option>
</select>
  <br>
<select name = "month">
   <option disabled>Choose Month</option>
  <option >January</option>
  <option >February</option>
  <option >March</option>
  <option >April</option>
  <option >May</option>
  <option >June</option>
  <option >July</option>
  <option >August</option>
  <option >September</option>
  <option >October</option>
  <option >November</option>
  <option >December</option>
</select>
  <br>
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
