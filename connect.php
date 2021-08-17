<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "robot_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//bottom
else
	if(isset($_POST['save'])){

$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];

    $sql = "INSERT INTO motors (v1, v2, v3, v4, v5, v6)
	values ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
  
  if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	}
	else if(isset($_POST['run'])) {
$sql = "SELECT * FROM motors  LIMIT 1 ";
$result = $conn->query($sql);
}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
