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
             <li><a href="regi_form.php">SIGN UP</a></li>
           </ul>
         </div>
         <!--/.nav-collapse -->
       </div>
       <!--/.container-fluid -->
     </nav>
    </div>

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
