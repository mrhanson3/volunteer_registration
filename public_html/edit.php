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
		$res= mysqli_query($db, "SELECT * FROM reservations WHERE id='$id'");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['newTime']) )
	{
		$newTime = $_POST['newTime'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE reservations SET time='$newTime' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
        
        if( isset($_POST['newDate']) )
	{
		$newDate = $_POST['newDate'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE reservations SET date='$newDate' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
        
        if( isset($_POST['newPeople']) )
	{
		$newPeople = filter_input(INPUT_POST, 'newPeople');
		$id  	 = $_POST['id'];
		$sql     = "UPDATE reservations SET people='$newPeople' WHERE id='$id'";
		$res 	 = mysqli_query($db, $sql) 
                                    or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
        
        if( isset($_POST['newLocation']) )
	{
		$newLocation = $_POST['newLocation'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE reservations SET location='$newLocation' WHERE id='$id'";
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
<form action="edit.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row[0]; ?>">    
Time: <input type="text" name="newTime" value="<?php echo $row[1]; ?>"><br />    
Date: <input type="text" name="newDate" value="<?php echo $row[2]; ?>"><br />
People: <input type="text" name="newPeople" value="<?php echo $row[3]; ?>"><br />
Location: <input type="text" name="newLocation" value="<?php echo $row[4]; ?>"><br />
<input type="submit" value=" Update "/>
</form>


 
	
