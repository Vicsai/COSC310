<!DOCTYPE html>
<html>

<head>
  <title>User Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<style>
h1{
  text-align: center;
}
.jumbotron{
  margin-left: 10%;
  margin-right: 10%;
  text-align: center;
}
.insert{
  text-align: center;
  padding-bottom: 5%
}
.insert2,.insert3,.insert4{
  text-align: center;
  margin-bottom: 5%;
}

insert4{
  margin-bottom: 10%;
}
.btn-sample {
  color: #ffffff;
  background-color: #611BBD;
  border-color: #130269;
}
body{
  background-color: #C0C0C0;
}

</style>

<body>
   <div class="bg">
  <header>


    <div class="container">
     <nav class="navbar navbar-inverse">
       <div class="container-fluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a href="homepage.php"><img src="images/mc_logo.png" width="100" height="50" alt="logo">
           </a>
         </div>
         <div id="navbar1" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li><a href="homepage.php">LOG OUT</a></li>
           </ul>
         </div>
         <!--/.nav-collapse -->
       </div>
       <!--/.container-fluid -->
     </nav>
    </div>

    <div class= page-header>
       <h1>CONTROL YOUR MOOLA</h1>
    </div>

  </header>


  <div class=insert>
  <a href="uploadPage.html" button type="button" class="btn btn-default">Link to Bank</button></a>
  <a href="addExpense.php" button type="button" class="btn btn-default">Manually Add</button></a></br>
</div>
  <div class=insert2>
    <a href="selectBudget.php"><button type="button" class="btn btn-sample btn-lg ">View Budget</button></a>
  </div>
  <div class=insert3>
    <a href="selectMonthlyExpenses.php"><button type="button" class="btn btn-sample btn-lg ">View Monthly Spending</button></a>
</div>
<div class=insert4>
    <a href="selectYearlyExpenses.php"><button type="button" class="btn btn-sample btn-lg ">View Yearly Spending</button></a>
</div>

</div>
</body>
</html>
