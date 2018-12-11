<!DOCTYPE html">
<?php include('server.php') ?>
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body>
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
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="container">
        <div class="row">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		</div>
		</div>
                
                <div class="row">
	<div class="col-lg-6 mb-4">
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                        <div class="col-lg-6 mb-4">
                        <p> <?php
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($db, $sql) or die ("Bad query: $sql");
                            echo"<table border='1'>";
                            echo"<tr><td>First</td><td>Last</td><td>Email</td><td>Username</td></tr>";
                            while ($row = mysqli_fetch_assoc($result)){
                                echo"<tr><td> {$row['first']}</td><td> {$row['last']}</td><td> {$row['email']}</td><td>{$row['username']}</td><td><a href='edituser.php?edit=$row[id]'>edit</a></td></tr>";
                            }
                            echo"</table>";?>
		</p>
		</div>
                </div>
                <br>
                <div class="col-lg-4 mb-4">
                <br>
                        <p> <?php 
                            $sql = "SELECT * FROM reservations";
                            $result = mysqli_query($db, $sql) or die ("Bad query: $sql");
                            echo"<table border='1'>";
                            echo"<tr><td>Time</td><td>Function</td><td>Date</td><td>People needed</td><td>Location</td><td>Edit</td></tr>";
                            while ($row = mysqli_fetch_assoc($result)){
                                echo"<tr><td>{$row['time']}</td><td>{$row['function']}</td><td>{$row['date']}</td><td>{$row['people']}</td><td>{$row['location']}</td><td><a href='edit.php?edit=$row[id]'>edit</a></td></tr>";
                            }
                            
                            echo"</table>";?>
                            <?php endif ?>
                        </p>
	</div>
                </div>
        </div>
		
</body>
</html>