<?php 
  $db = mysqli_connect('localhost','octo','w3b7ysX6','octo');
  or die("Error");
  echo "sup";
  
  if (($_POST['password']) == ($_POST['confirmpassword'])){
  
    mysqli_query($db, "INSERT INTO users  VALUES ('$_POST['username']', '$_POST['password']', '$_POST['firstName']', '$_POST['lastName']', '$_POST['email']')");
    
    echo "INSERTED!"

  }
$db->close();
?>