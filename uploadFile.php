
<?php
$mysqli =new mysqli('localhost','octo','w3b7ysX6','octo');
$db=mysqli_connect("localhost","octo","w3b7ysX6")
or die("Error connecting to server");
?>
<html>
<head>
</head>
<body>
	<?php
	// echo "I AM WORKING";
	$uploadOK=1;
	$fileUploaded=basename($_FILES["uploadFile"]["name"]);
	$fileUploaded=trim($fileUploaded);
	$fileType=pathinfo($fileUploaded,PATHINFO_EXTENSION);
	if(isset($_POST["submit"])){
		if($fileType!=="csv"){
			echo "Please upload a csv file";
			$uploadOK=0;
		}
		if($uploadOK==1){
			$sql = "LOAD DATA INFILE '$fileUploaded' INTO TABLE csvData"
			. " FIELDS TERMINATED BY ','"
			. " LINES TERMINATED BY '\r\n'"
			. " IGNORE 1 LINES";
			if(!($stmt=$mysqli->query($sql)))
				echo "\nQuery execute failed: ERRNO: (" . $mysqli->errno . ") " . $mysqli->error;
		}
	}
	mysqli_close($db);
	?>
</body>
</html>

<!-- 	$query="SELECT * FROM USERS";
	mysqli_query($db,$query) or die("Error querying");
	$result=mysqli_query($db,$query);
	$row=mysqli_fetch_array($result);
	while($row=mysqli_fetch_array($result)){
		echo $row["First Name"];
	} -->