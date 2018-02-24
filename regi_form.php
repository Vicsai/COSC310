<?php 
  $db = new mysqli('localhost','octo','w3b7ysX6','octo');
  or die("Error");
  echo "sup";
  
  if (($_POST['password']) == ($_POST['confirmpassword'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $firstName.$lastName.$username.$email.$password;
    
    $stmt = $db->prepare("INSERT INTO users  VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param($username, $password, $firstName, $lastName, $email)
    
    $result = $stmt->execute();
    if ($result) {
	    echo "User registered successfully";
    } else {
	      echo "Error: " . $query . "<br>" . $db->error;
    }
  }
$db->close();
?>