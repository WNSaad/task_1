<?php

  //set connection variables 
  $db_host = 'localhost';
  $user = 'root';
  $server = 'robot_db';
  $db_port = 8889;

  //connection to server & database 
  $connection = mysqli_connect($db_host, $user, $server,  $db_port );

  //check connection 
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  



$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];


if(isset($_POST['save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from  LIMIT 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO motors (v1, v2, v3, v4, v5, v6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}
if (isset($_POST['run'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors LIMIT 1 ";
    $result = mysqli_query($connection, $my_query);
}
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
?>