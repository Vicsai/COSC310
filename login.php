<!DOCTYPE html>
<html>

<head>
  <title>Log In</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="css/login.css">
</head>
<style>
h1{
  text-align: center;
}
form{
  text-align: center;
}
.jumbotron{
  margin-left: 25%;
  margin-right: 25%;
  text-align: center;
  padding-left: 5%;
  padding-right: 5%;
  margin-bottom: 20%;
  background-color: #282828;
  color: white;

}
.logo{
  height: 4em;
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

</style>
<body>
<div class="bg">
  <header>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
      <ul class="nav navbar-nav">
        <a href="homepage.html" ><img class="logo" src="images/mc_logo.png"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" ><a href="regi_form.php">SIGN UP</a></button
      </ul>
    </div>
    </nav>

    <div class= page-header>
       <h1>LOG IN</h1>
    </div>

  </header>

  <div class=jumbotron>
<form action="login2.php" class="form" method = "post">
  <br>


    <div class="input-group input-group-sm center-block" >
      <input type= "text" class= "form-control" id="username" name="username" required="required" placeholder="Username">
    </div>


    <div class="input-group input-group-sm center-block" class="insert2">
      <input type= "password" class= "form-control" id="password" name="password" required="required" placeholder="Password">
    </div>

    <a href="login2.php" class= "btn btn-default bth-lg" role="button">Submit</a>


</form>
<br>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>
