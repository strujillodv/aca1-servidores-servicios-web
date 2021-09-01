<?php
include("./db.php");

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_GET['type'])){
      $_SESSION['typeAction'] = $_GET['type'];
    }
    
    $query = "SELECT * FROM Contacts WHERE id = $id";

    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result) == 1){

      $data = mysqli_fetch_array($result);
      
      $_SESSION['id'] = $data['id'];
      $_SESSION['name'] = $data['name'];
      $_SESSION['lastName'] = $data['lastName'];
      $_SESSION['address'] = $data['address'];
      $_SESSION['workPhone'] = $data['workPhone'];
      $_SESSION['homePhone'] = $data['homePhone'];
      $_SESSION['mail'] = $data['mail'];

      header("Location: contact.php");
    } else {

      $_SESSION['message'] = "No se encontro información 👻";
      $_SESSION['message-type'] = "danger";
      
      die("No se encontro información");
    }
  }

?>
