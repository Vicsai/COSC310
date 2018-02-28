
<?php
$con = new mysqli('localhost','octo','w3b7ysX6','octo');
if($con ->connect_error){
	die("Connection failed". $con->connect_error);
}
else
	echo "connected";
?>
<html>
<head>
</head>
<body>
	<?php
	// echo "I AM WORKING";
	$moveLocation="csvFiles/".basename($_FILES["uploadFile"]["name"]);

	$uploadOK=1;
	$fileUploaded=$_FILES["uploadFile"]["name"];
	$fileUploaded=trim($fileUploaded);
	$fileType=pathinfo($fileUploaded,PATHINFO_EXTENSION);
	if(isset($_POST["submit"])){
		if($fileType!=="csv"){
			echo "Please upload a csv file";
			$uploadOK=0;
		}
		if($uploadOK==1){
			
			$sql="LOAD DATA LOCAL INFILE '$fileUploaded' INTO TABLE csvData"
			. " FIELDS TERMINATED BY ','"
			. " LINES TERMINATED BY '\r\n'"
			. " IGNORE 1 LINES";
			$stmt=$con->query($sql);
		}
	}
	?>
</body>
</html>

