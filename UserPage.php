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

.logo{
  height: 4em;
}
insert4{
  margin-bottom: 10%;
}
.bg {
    /* The image used */
    background-image: url("images/background.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.btn-sample {
  color: #ffffff;
  background-color: #611BBD;
  border-color: #130269;
}
</style>

<body>
   <div class="bg">
  <header>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
      <ul class="nav navbar-nav">
          <a href="homepage.html" ><img class="logo" src="images/mc_logo.png"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" ><a href="homepage.html">LOG OUT</a></button>
      </ul>
    </div>
    </nav>

    <div class= page-header>
       <h1>CONTROL YOUR MOOLA</h1>
    </div>

  </header>


  <div class=insert>
  <a href="uploadFile.php"><button type="button" class="btn btn-default">Link to Bank</button></a>
  <a href="addExpense.html"><button type="button" class="btn btn-default">Manually Add</button></a></br>
</div>
  <div class=insert2>
    <a href=""><button type="button" class="btn btn-sample btn-lg ">View Budget</button></a>
  </div>
  <div class=insert3>
    <a href=""><button type="button" class="btn btn-sample btn-lg ">View Monthly Spending</button></a>
</div>
<div class=insert4>
    <a href=""><button type="button" class="btn btn-sample btn-lg ">View Yearly Spending</button></a>
</div>

</div>
</body>
</html>
