<?php 
$db = mysqli_connect('localhost', 'hellofellow', 'hellor@mpage', 'tennis_registration123');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


    if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysqli_query($db, "SELECT * FROM users WHERE id='$id'");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['newFirst']) )
	{
		$newFirst = filter_input(INPUT_POST, 'newFirst');
		$id  	 = $_POST['id'];
		$sql     = "UPDATE users SET first='$newFirst' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
        
        if( isset($_POST['newLast']) )
	{
		$newLast = filter_input(INPUT_POST, 'newLast');
		$id  	 = $_POST['id'];
		$sql     = "UPDATE users SET last='$newLast' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
        
        if( isset($_POST['newUsername']) )
	{
		$newUsername = filter_input(INPUT_POST, 'newUsername');
		$id  	 = $_POST['id'];
		$sql     = "UPDATE users SET username='$newUsername' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
        
        if( isset($_POST['newEmail']) )
	{
		$newEmail = filter_input(INPUT_POST, 'newEmail');
		$id  	 = $_POST['id'];
		$sql     = "UPDATE users SET email='$newEmail' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
 ?>

<html>
<head>
<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
          <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
</head>
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
<br>
<br>
</head>
<form action="edituser.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row[0]; ?>">    
First: <input type="text" name="newFirst" value="<?php echo $row[1]; ?>"><br />    
Last: <input type="text" name="newLast" value="<?php echo $row[2]; ?>"><br />
User: <input type="text" name="newUsername" value="<?php echo $row[3]; ?>"><br />
Email: <input type="text" name="newEmail" value="<?php echo $row[4]; ?>"><br />
<input type="submit" value=" Update "/>
</form>
        