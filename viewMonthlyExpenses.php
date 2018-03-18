
<?php

$con = new mysqli('localhost','octo','w3b7ysX6','octo');
//
//
//
// if($con ->connect_error){
//     die("Connection failed". $con->connect_error);
// }
//
// echo 'Connected Succesfully';

//$con = new mysqli('localhost','root',"",'cosc310');

if($con ->connect_error){
    die("Connection failed". $con->connect_error);
}


$rent =0;
$food =0;
$clothing =0;
$entertainment=0;
$income=0;
$m = '';
$data = false;
$year = 0;
if($stmt=$con->prepare("SELECT rent,food,clothing,entertainment,income FROM finances WHERE username=? and month = ? and year = ?" )){
        $stmt->bind_param("ssi",$username,$month,$year);
        $username='davidLevi';
        //set username to session attribute
        $month = $_POST['month'];
        $year = $_POST['year'];
        $stmt->execute();
        $stmt->bind_result($a,$b,$c,$d,$e);
        if($stmt->fetch()){
        $rent = $a;
        $food = $b;
        $clothing = $c;
        $entertainment =$d;
        $income = $e;
        $m = $month;
        $data = true;
        $stmt->close();

        }

        else{
          $m = 'Month has no data';

        }

    }

  else{
    echo '<h1>404 Error Not Found</h1>';
  }



    $con->close();

?>




<canvas id = "myChart"></canvas>
<canvas id = "myChart2"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script>

var rent = <?php echo $rent?>;
var food = <?php echo $food?>;
var clothing = <?php echo $clothing?>;
var entertainment = <?php echo $entertainment?>;
var income = <?php echo $income?>;
var savings=income-(rent+food+clothing+entertainment);
var month = '<?php echo $m?>';

var color = "";
var bdcolor = "";
var sum = 0 ;


var finances = [rent,food,clothing,entertainment];

var max = Math.max.apply(Math,finances);
var min = Math.min.apply(Math,finances);

for(var i =0; i < finances.length; i++){

  sum+= finances[i];
}

if(sum>income){
  color = "rgba(255, 0, 0,.2)";
  bdcolor = "rgba(255, 0, 0,.6)";
}

else{
  color = "	rgba(0, 255, 0,.2)	";
  bdcolor = "rgba(0, 255, 0,.6)";
}







var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create

    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["Rent", "Food", "Clothing","Entertainment","Total","Income"],
        datasets: [{
            label: "Amount in CAD",
            backgroundColor: [
            'rgba(255, 0, 128,.2)',
            'rgba(191, 0, 255,.2)',
            'rgba(64, 0, 255,.2)',
            'rgba(0, 191, 255,.2)',
             color,
            'rgba(0, 255, 128,.2)',
            ],
            borderColor: [
              'rgba(255, 0, 128,.6)',
              'rgba(191, 0, 255,.6)',
              'rgba(64, 0, 255,.6)',
              'rgba(0, 191, 255,.6)',
              bdcolor,
              'rgba(0, 255, 128,.6)'
          ],
            borderWidth: 1,
            data: [rent, food,clothing,entertainment,sum,income],

        }]
    },

    // Configuration options go here
      options: {
        legend: {display:false},
        scales: {
            yAxes: [{

            }]
        },
        title: {
          display: true,
          text: month + ' Finances',
          fontSize: 24
        }
    }

});




</script>
