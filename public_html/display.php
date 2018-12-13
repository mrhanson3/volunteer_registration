<?php
session_start();

// variable declaration
$first = "";
$last = "";
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT * FROM users";
$result = mysqli_query($db, $sql) or die ("Bad query: $sql");

echo"<table border='1'>";
echo"<tr><td>First</td><td>Last</td><td>Email</td></tr>";
while ($row = mysqli_fetch_assoc($result)){
    echo"<tr><td>{$row['first']}</td><td>Last</td><td>Email</td></tr>";
}
echo"</table>";
?>
