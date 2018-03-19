<?php
$con=new mysqli('localhost','octo','w3b7ysX6','octo');
if($con->connect_error){
	die("Connection failed");
}



$exists = false;

      $username = $_POST['username'];
      $pass = $_POST['password'];


      if($stmt = $con->prepare("SELECT username, password FROM users WHERE username = ? AND password = ?")){

        $stmt->bind_param("ss",$username,$pass);
  			$stmt->execute();
  			$result = $stmt->bind_result($us,$p);


    			if ($stmt->fetch()) {
            $exists = true;

          }


      }

			else{
				echo 'sad';
			}


    //
    //}
    //

     if($exists){
        session_start();
        $_SESSION['user'] = $username;
				echo $_SESSION['user'];

          //echo '<p>'.$_SESSION['user'].'</p>';
          echo "<h1>Welcome $username </h1>";
       header('Location: UserPage.php');


    }
    //
     else{
       echo "<h1>Incorrect Login Info <a href = \"login.php\">try again</a></h1>";
    //
     }






?>
