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
$income=0;

if($stmt=$con->prepare("SELECT SUM(rent),SUM(food),SUM(clothing) ,SUM(entertainment) ,SUM(income) FROM finances WHERE username=?  and year = ?" )){
        $stmt->bind_param("si",$username,$year);
        $username=$u;
        //set username to session attribute
        $year = $_POST['year'];
        $stmt->execute();
        $stmt->bind_result($a,$b,$c,$d,$e);
        if($stmt->fetch()){
        $rent = $a;
        $food = $b;
        $clothing = $c;
        $entertainment =$d;
        $income = $e;

        }



        else{

        echo "Error inserting user" . $con->error;
        }


        $stmt->close();
    }

  else{
    echo '<h1>404 Error Not Found</h1>';
  }


  $rentB =0;
  $foodB =0;
  $clothingB =0;
  $entertainmentB=0;
  $incomeB=0;

  if($stmt=$con->prepare("SELECT SUM(rent),SUM(food),SUM(clothing) ,SUM(entertainment) ,SUM(income) FROM budget WHERE username=?  and year = ?" )){
          $stmt->bind_param("si",$username,$year);
          $username='test';
          //set username to session attribute
          $year = $_POST['year'];
          $stmt->execute();
          $stmt->bind_result($a,$b,$c,$d,$e);
          if($stmt->fetch()){
          $rentB = $a;
          $foodB = $b;
          $clothingB = $c;
          $entertainmentB =$d;
          $incomeB = $e;

          }



          else{

          echo "Error inserting user" . $con->error;
          }


          $stmt->close();
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

var rentB = <?php echo $rentB ?>;
var foodB = <?php echo $foodB ?>;
var clothingB = <?php echo $clothingB ?>;
var entertainmentB= <?php echo $entertainmentB?>;
var incomeB = <?php echo $incomeB?>;

var year = <?php echo $year?>;

var color = "";
var bdcolor = "";
var sum = 0 ;
var sumB = 0 ;

var finances = [rent,food,clothing,entertainment];
var financesB = [rentB,foodB,clothingB,entertainmentB];

var max = Math.max.apply(Math,finances);
var min = Math.min.apply(Math,finances);

for(var i =0; i < finances.length; i++){

  sum+= finances[i];

}

for(var i =0; i < financesB.length; i++){

  sumB+= financesB[i];

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



    // The data for our dataset
    var chartData= {
        labels: ["Rent", "Food", "Clothing","Entertainment","Total","Income"],
        datasets: [
          {
          type:'line',
            label: 'Amount in CAD (Budget)',
            borderWidth: 2,
            data: [rentB, foodB,clothingB,entertainmentB,sumB,incomeB],
            fill: false,
            borderColor:'rgba(70,70,80,.8)',
            lineTension: 0,
            pointRadius: 0

        }, {
            type:'bar',
            label:'Amount in CAD (Spent)',
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
          borderWidth:1,
          data: [rent, food,clothing,entertainment,sum,income]

    }]

  };

    // Configuration options go here




    // window.onload = function(){
			var ctx = document.getElementById('myChart').getContext('2d');
			window.myMixedChart = new Chart(ctx, {
				type: 'bar',
				data: chartData,
        options: {
          legend: {display:false},

          title: {
            display: true,
            text: year + ' Yearly Finances - Budgeted vs Spent',
            fontSize: 24
          }
      }
			});

// };



</script>
