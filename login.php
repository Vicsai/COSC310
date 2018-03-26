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

 ?>


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
body{
  background-color: #C0C0C0;
}
footer{
  background-color: #282828;
}
.footer_copyright,h5{
  color: white;
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
					 <?php if (!$isLoggedIn):
						 					header(Location: userpage.php);
						 ?>
					<?php else: ?>
						<li><a href="howitworks.php">How it Works</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href = "UserPage.php">'.$u.' Profile</a></li>
						<li><a href="logout.php">LOG OUT</a></li>
		       <?php endif; ?>
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
      <input type= "text" class= "form-control" id="username" name="username" required="required" placeholder="Username"/>
    </div>


    <div class="input-group input-group-sm center-block" class="insert2">
      <input type= "password" class= "form-control" id="password" name="password" required="required" placeholder="Password"/>
    </div>

    <button type="submit" class = "btn btn-default bth-log" >Login</button>


</form>
<br>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</body>

  <footer  class="page-footer font-small stylish-color-dark pt-4 mt-4">





    <div class="container-fluid text-center text-md-left">

      <div class="row">

          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
            <p></p>
             <a href="homepage.php"><img src="images/mc_logo.png" width="100" height="50" alt="logo"></a>
          </div>

          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
            <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Moola Control</h5>
               <ul class="list-unstyled">
                      <li><a href="#!">About Us</a></li>
                      <li><a href="#!">The Team</a></li>
                      <li><a href="#!">Partners</a></li>
                      <li><a href="#!">Careers</a></li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
            <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Contact</h5>

                 <ul class="list-unstyled">
                      <li><a href="#!">The University of British Columbia Okanagan</a></li>
                      <li><a href="#!">info@moolacontrol.ca</a></li>

                </ul>
          </div>

          <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
            <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Connect</h5>
                 <ul class="list-unstyled">
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">Google Plus</a></li>
                </ul>
          </div>

      </div>

     <hr>

      <div class="text-center py-3">
            <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                </li>
                <li class="list-inline-item"><a href="regi_form.php" class="btn btn-danger btn-rounded">Sign up!</a></li>
            </ul>
        </div>

      <div class="footer-copyright py-3 text-center" class="footer_copyright" >
          <div class="container-fluid">
            <p class="footer_copyright" >&copy; 2018 Copyright: COSC 310 Team Octothorpe</p>
          </div>
      </div>
    </div>
  </footer>

</html>
