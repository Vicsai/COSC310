<?php

$con = new mysqli('localhost','root',"",'cosc310');
$category = $_POST['category'];
$amount = intval($_POST['amount']);
$sql = 'UPDATE finances SET '.$category.'='.$category.'+'.$amount.' WHERE username = ? and month = ? and year = ?';
echo $sql;
if($stmt=$con->prepare($sql )){
        $stmt->bind_param("ssi",$username,$month,$year);
        $username='test';
        //set username to session attribute
        $month = $_POST['month'];
        $year = $_POST['year'];
        if($stmt->execute()){

          header("Location: addExpense.php?message=Sucessfully Added Expense");
        }
        else{
        header("Location: addExpense.php?message=Error");
        }


        $stmt->close();

        }
  else{
    echo "Error inserting finances" . $con->error;
  }








 ?>
