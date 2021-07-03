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
  <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<style>
.jumbotron{
  text-align: center;
  margin-left: 30%;
  margin-right: 30%;
  background-color: #282828;
  color: white;
}
.page-header,h3{
  text-align: center;
}
.logo{
  height: 4em;
}
h1{
  font-size: 50pt;
}

body{
  background-color: #C0C0C0;
}

.nav-item{
  padding: 3px 3px;
  background-color: #282828;

}
.navbar{
  background-color: #282828;
}
footer{
  background-color: #282828;
}
.footer_copyright,h5{
  color: white;
}
.reviews{
  margin-left: 10%;
  margin-right: 10%;
  text-align: center;
  margin-bottom: 5%;
}
.aline{
  padding-bottom: 5%;
}
h5{
  color: black;
}
</style>

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
       <ul class="nav navbar-nav navbar-right">
         <li><a href="howitworks.php">How it Works</a></li>
         <li><a href="about.php">About Us</a></li>
         <?php
         if(!$isLoggedIn){
         echo ' <li><a href="regi_form.php">SIGN UP</a></li> ';
         echo ' <li><a href="login.php">LOG IN</a></li>';
       }
       else{
         echo '<li><a href = "UserPage.php">'.$u.' Profile</a></li>';
       }
         ?>
       </ul>
     </div>]
     <!--/.nav-collapse -->
   </div>
   <!--/.container-fluid -->
 </nav>
</div>

<div class= page-header>
   <img src="images/title.png" width="700">
</div>

<div class=jumbotron>
  <p>Want to take control of your financies like a boss?</p>
  <p>Make your money work for you?</p>
  <p>Sign up today.</p>
  <img src="images/piggy.png" height="100">
</div>


<h3 class="aline"> Changing the way you manage your money forever. </h3>

<div class="reviews" class="container-fluid text-center text-md-left">
  <div class="row">

          <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
            <img src="images/person1.png" width="80" height="80">
            <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Raven</h5>
            <p>"Moola Control is an easy and effective way to manage my money. I can easily add my expenses manually and it will show my spending with graphs" </p>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
            <img src="images/person2.png" width="80" height="80">
            <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Raj</h5>
            <p>"This website helped me pay off all my student debt in no time. I just pressed a few buttons, and it showed me needed to be done. Real eye opener.Thanks Moola Control."</p>

          </div>

          <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
            <img src="images/person3.png" width="80" height="80">
            <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Emily</h5>
            <p>"So easy to use! And all the features are amazing. Moola Control helps me run my local business. I have seen major improvements since signing up!"</p>
          </div>

      </div>

    </div>
  </div>




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
              \
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
