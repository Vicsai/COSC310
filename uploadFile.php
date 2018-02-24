
<?php
$db=mysqli_connect("localhost","octo","w3b7ysX6")
or die("Error connecting to server");
echo "hello friend";
?>
<html>
<head>
</head>
<body>
	<?php
	// echo "I AM WORKING";
	$uploadOK=1;
	$fileUploaded=basename($_FILES["uploadFile"]["name"]);
	$fileType=pathinfo($fileUploaded,PATHINFO_EXTENSION);
	if(isset($_POST["submit"])){
		if($fileType!=="csv"){
			echo "Please upload a csv file";
			$uploadOK=0;
		}
		if($uploadOK==1){
			echo "uploaded";
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