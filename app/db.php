<?php
  session_start();
  
  include('./var.php');

  // Connection Database
  $connection = mysqli_connect(
    $HOSTNAME,
    $USERNAME,
    $PASSWORD,
    $DATABASENAME,
    $PORT
  );

  if ($connection->connect_error) {
    die("La conexión no pudo establecerce: " . $connection->connect_error);
  } 

?>
