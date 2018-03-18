<?php
$con=new mysqli('localhost','octo','w3b7ysX6','octo');
if($con->connect_error){
	die("Connection failed");
}

session_start();
$isLoggedIn = false;
if(isset($_SESSION['user'])){
$isLoggedIn =true;
$u = $_SESSION['user'];
}
?>

<?php

$years = array();
$year = 2017;
if($stmt=$con->prepare("SELECT DISTINCT year FROM finances WHERE username = ? ")){
$stmt->bind_param("s",$username);
$username=$u;
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="addExpense.css">
</head>
<style>
.logo{
  height: 4em;
}
</style>
<body>

  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
    <ul class="nav navbar-nav">
        <a href="homepage.html" ><img class="logo" src="images/mc_logo.png"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" ><a href="homepage.html">LOG OUT</a></button>
    </ul>
  </div>
  </nav>


	<form method = "post" action = "viewMonthlyExpenses.php">


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
