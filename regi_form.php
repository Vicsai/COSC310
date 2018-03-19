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
  margin-bottom: 15%;
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

  <main>
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
             <ul class="nav navbar-nav navbar-right">
               <li><a href="login.php">LOG IN</a></li>
             </ul>
           </div>
           <!--/.nav-collapse -->
         </div>
         <!--/.container-fluid -->
       </nav>
      </div>
    </header>
<body>

    <div class= page-header>
  	   <h1>SIGN UP</h1>
    </div>

    <div class=jumbotron>


      <p>Please fill out all fields</p>

      <form name = "regiForm" class="form" action="regi_form2.php" method= "post">

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

        <a href="regi_form2.php" class= "btn btn-default bth-lg" role="button">Submit</a>

      </form>
     </div>
  </main>
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
