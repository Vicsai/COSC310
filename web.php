<?php

include config.php;

class web
{
 
    public function addExpense($initalAmount, $finalAmount)
    {
        return $initialAmount + $finalAmount;
    }
 

 	public function login(){

 		return session_attribute['username'];

 	}


 	public function extractCSV($csv){
 		$query="LOAD DATA INFILE $fileUploaded
			INTO TABLE csvData
			FIELDS TERMINATED BY ','
			OPTIONA
			LLY ENCLOSED BY '\"'
			LINES TERMINATED BY '\r\n'
			IGNORE 1 LINES";

			$stmt = $stmt->query($query);

 		$CSVdata = $stmt->execute();

 	}


 	public function createAccount($username, $password, $firstname, $lastname, $email){

 		$sql = "INSERT INTO users VALUES ($username, $password, $firstname, $lastname, $email)";

 		$con->query($sql);

 		$sql2 ="SELECT * FROM users WHERE username = $username";

 		return  $con->query($sql2);


 	}
 }


?>