<?php
  session_start();
  
  include('./var.php');

  // Connection Database
  $conection = mysqli_connect(
    $HOSTNAME,
    $USERNAME,
    $PASSWORD,
    $DATABASENAME,
    $PORT
  );

  if ($conection->connect_error) {
    die("La conexión no pudo establecerce: " . $conn->connect_error);
  } 

?>
