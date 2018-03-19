<?php
session_start();
$con = new mysqli('localhost','octo',"w3b7ysX6",'octo');
$income=intval($_POST['income']);
$rent=intval($_POST['rent']);
$food=intval($_POST['food']);
$clothing=intval($_POST['clothing']);
$entertainment=intval($_POST['entertainment']);

$sql = "UPDATE budget SET income='$income',rent='$rent',food='$food',clothing='$clothing',entertainment='$entertainment' WHERE username = ? AND month = ? AND year = ?";
echo $sql;
if($stmt=$con->prepare($sql)){
        $stmt->bind_param("ssi",$username,$month,$year);
        $username=$_SESSION['user'];
        //set username to session attribute
        $month = $_POST['month'];
        $year = $_POST['year'];
        //set username to session attribute
        if($stmt->execute()){

          header("Location: addBudget.php?message=Sucessfully Added Expense");
        }
        else{
        header("Location: addBudget.php?message=Error");
        }


        $stmt->close();

        }
  else{
    echo "Error inserting finances" . $con->error;
  }








 ?>
