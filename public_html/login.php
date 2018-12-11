<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>A to Z </title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand"  href="about.html">
          <img src="img/AtoZlogo.png" alt="A to Z logo" style="width: 80px">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" style="color: maroon;" href="about.html">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Log-in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: maroon;" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <div class="row">
        
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">


		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
        </div>
    </div>
    </div>
<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; A to Z Volunteer Resources 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>
</html>

