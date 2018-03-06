<!DOCTYPE html>
<html>
<head>
  <title>SIGN UP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<style>
h1{
  text-align: center;
}
form{
  text-align: center;
}
.form-control{
  align-items: center;
}
.jumbotron{
  margin-left: 25%;
  margin-right: 25%;
  text-align: center;
  padding-left: 5%;
  padding-right: 5%;
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

  <main>
  <div class="bg">
    <header>


    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
      <a href="homepage.php" class="navbar-left"><img src="images/mc_logo.png"></a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class "nav-link" href="login.php">LOG IN</a>
        </li>
      </ul>
    </div>
    </nav>

    </header>
<body>

    <div class= page-header>
  	   <h1>SIGN UP</h1>
    </div>

    <div class=jumbotron>


      <p>Please fill out all fields</p>

      <form name = "regiForm" class="form" action="regi_form.php" method= "post">

      <div class="input-group input-group-sm center-block">
        <input type= "text" class= "form-control" id="firstName" name="firstName" required="required" placeholder="First Name">
      </div>
      <div class="input-group input-group-sm center-block">
        <input type= "text" class= "form-control" id="lastName" name="lastName" required="required" placeholder="Last Name">
      </div>
      <div class="input-group input-group-sm center-block">
        <input type= "text" class= "form-control" id="username" name="username" required="required" placeholder="User Name">
      </div>
      <div class="input-group input-group-sm center-block">
        <input type= "text" class= "form-control" id="email" name="email" required="required" placeholder="Email">
      </div>
      <div class="input-group input-group-sm center-block">
        <input type= "password" class= "form-control" id="password" name="password" required="required" placeholder="Password">
      </div>
      <div class="input-group input-group-sm center-block">
        <input type= "password" class= "form-control" id="confirmpassword" name="confirmpassword" required="required" placeholder="Confirm Password">
      </div>

        <a href="#" class= "btn btn-default bth-lg" role="button">Submit</a>

      </form>
     </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>
