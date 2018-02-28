<?php
$con=new mysqli('localhost','octo','w3b7ysX6','octo');
if($con->connect_error){
	die("Connection failed");
}
else
	echo "connected";

?>
<html>
<head>
</head>
<body>
	<?php

	if($stmt=$con->prepare("SELECT firstname,lastname FROM users WHERE username=? AND password=?")){
		$stmt->bind_param("ss",$username,$password);
		$username='test';
		$password='pw';
		$stmt->execute();
		$stmt->bind_result($a,$b);
		$stmt->fetch();
		printf("firstname is %s and lastname is %s",$a,$b);
		$stmt->close();
	}
	$con->close();

	?>
</body>
</html>