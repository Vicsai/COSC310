
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
  margin-left: 10%;
  margin-right: 10%;
  margin-bottom: 10%;
  background-color: #282828;
  color: white;
}
.page-header{
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
             <li><a href="login.php">LOG IN</a></li>
           </ul>
         </div>
         <!--/.nav-collapse -->
       </div>
       <!--/.container-fluid -->
     </nav>
    </div>

	</header>

  <div class= page-header>
	   <img src="images/title.png" width="700">
  </div>

  <div class=jumbotron>
    <p>Want to take control of your financies like a boss?</p>
    <p>Make your money work for you?</p>
    <p>Sign up today.</p>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>
  </body>
</html>
