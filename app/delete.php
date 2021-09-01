<?php

include("./db.php");

  if (isset($_GET['id'])) {

    $id = $_GET['id'];
    
    $query = "DELETE FROM Contacts WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      $_SESSION['message'] = "Fallo al ingresar datos";
      $_SESSION['message-type'] = "danger";
      die("Fallo al ingresar datos");
    }

    $_SESSION['message'] = "Se ha eliminado el contacto 👍";
    $_SESSION['message-type'] = "success";

    header("Location: index.php");
  }

?>
