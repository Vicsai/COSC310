<?php
session_start();
$con = new mysqli('localhost','octo',"w3b7ysX6",'octo');
$income=intval($_POST['income']);
$rent=intval($_POST['rent']);
$food=intval($_POST['food']);
$clothing=intval($_POST['clothing']);
$entertainment=intval($_POST['entertainment']);
$username=$_SESSION['user'];
$month=$_POST['month'];
$year=$_POST['year'];
$prevIncome=0;
$prevRent=0;
$prevFood=0;
$prevClothing=0;
$prevEntertainment=0;
$sql="SELECT income,rent,food,clothing,entertainment FROM budget WHERE username=? AND month=? AND year=?";
if($stmt=$con->prepare($sql)){
    $stmt->bind_param("ssi",$username,$month,$year);
    $stmt->execute();
    $stmt->bind_result($a,$b,$c,$d,$e);
    $prevIncome=$a;
    $prevRent=$b;
    $prevFood=$c;
    $prevClothing=$d;
    $prevEntertainment=$e;
    if(!isset($income) || $income==0)
        $income=$prevIncome;
    if(!isset($rent) || $rent==0)
        $rent=$prevRent;
    if(!isset($food) || $food==0)
        $food=$prevFood;
    if(!isset($clothing) || $clothing==0)
        $clothing=$prevClothing;
    if(!isset($entertainment) || $entertainment==0)
        $entertainment=$prevEntertainment;
    $stmt->close();
}
$sql2 = "UPDATE budget SET income='$income',rent='$rent',food='$food',clothing='$clothing',entertainment='$entertainment' WHERE username = ? AND month = ? AND year = ?";
if($stmt2=$con->prepare($sql2)){
        $stmt2->bind_param("ssi",$username,$month,$year);
        //set username to session attribute
        if($stmt2->execute()){

          header("Location: addBudget.php?message=Sucessfully Added Expense");
        }
        else{
         header("Location: addBudget.php?message=Error");
        }


        $stmt2->close();

        }
  else{
    echo "Error inserting finances" . $con->error;
  }








 ?>
