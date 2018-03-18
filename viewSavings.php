<?php
$con=new mysqli('localhost','octo','w3b7ysX6','octo');
if($con->connect_error){
	die("Connection failed");
}

session_start();
$isLoggedIn = false;
if(isset($_SESSION['user'])){
$isLoggedIn =true;
$u = $_SESSION['user'];
}


$rent =0;
$food =0;
$clothing =0;
$entertainment=0;

$m = '';
$data = false;
$year = 0;

$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
$spendings = array();
$incomes = array();
if($stmt=$con->prepare("SELECT rent,food,clothing,entertainment,income FROM finances WHERE username=? and month = ? and year = ?" )){
while($x < 12){

        $stmt->bind_param("ssi",$username,$month,$year);
        $username=$u;
        //set username to session attribute
        $month =$months[$x];
        //$year = $_POST['year'];
        $year = 2017;
        $stmt->execute();
        $stmt->bind_result($a,$b,$c,$d,$e);
        if($stmt->fetch()){
        $rent = $a;
        $food = $b;
        $clothing = $c;
        $entertainment =$d;
        $income = $e;

        $total = $rent + $food+ $clothing+$entertainment;
        }
        else{
        $total = 0;

        }

    }

  else{
    echo '<h1>'.$month.'Error </h1>';
  }
  //echo $income."\n";
  //echo $total;
  //array_push($spendings,$total);
  //array_push($inc,$incomes);

}


    $con->close();

?>




<canvas id = "myChart"></canvas>
<canvas id = "myChart2"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script>
<?php $count = 0;?>;
var incomes = [];

var color = "";
var bdcolor = "";
var sum = 0 ;

var income = 0;


if(sum>income){
  color = "rgba(255, 0, 0,.2)";
  bdcolor = "rgba(255, 0, 0,.6)";
}

else{
  color = "	rgba(0, 255, 0,.2)	";
  bdcolor = "rgba(0, 255, 0,.6)";
}







// var ctx = document.getElementById('myChart').getContext('2d');
// var chart = new Chart(ctx, {
//     // The type of chart we want to create
//
//     type: 'bar',
//
//     // The data for our dataset
//     data: {
//         labels: ["Rent", "Food", "Clothing","Entertainment","Total","Income"],
//         datasets: [{
//             label: "Amount in CAD",
//             backgroundColor: [
//             'rgba(255, 0, 128,.2)',
//             'rgba(191, 0, 255,.2)',
//             'rgba(64, 0, 255,.2)',
//             'rgba(0, 191, 255,.2)',
//              color,
//             'rgba(0, 255, 128,.2)',
//             ],
//             borderColor: [
//               'rgba(255, 0, 128,.6)',
//               'rgba(191, 0, 255,.6)',
//               'rgba(64, 0, 255,.6)',
//               'rgba(0, 191, 255,.6)',
//               bdcolor,
//               'rgba(0, 255, 128,.6)'
//           ],
//             borderWidth: 1,
//             data: [rent, food,clothing,entertainment,sum,income],
//
//         }]
//     },
//
//     // Configuration options go here
//       options: {
//         legend: {display:false},
//         scales: {
//             yAxes: [{
//
//             }]
//         },
//         title: {
//           display: true,
//           text: month + ' Finances',
//           fontSize: 24
//         }
//     }
//
// });




</script>
