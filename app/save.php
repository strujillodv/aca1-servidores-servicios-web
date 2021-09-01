<?php

include("./db.php");

  if (isset($_POST['save_contact'])) {

    if (isset($_SESSION['id'])) {
      $id = $_SESSION['id'];
    }

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $workPhone = $_POST['workPhone'];
    $homePhone = $_POST['homePhone'];
    $mail = $_POST['mail'];
    $action = $_POST['action'];

    if ($action == 'save') {
      $query = "INSERT INTO Contacts(name, lastName, address, workPhone, homePhone, mail)
              VALUES ('$name', '$lastName', '$address', '$workPhone', '$homePhone', '$mail')";
    } else  if ($action == 'edit')  {
      $query = "UPDATE Contacts 
                SET name = '$name', lastName ='$lastName', address = '$address', workPhone = '$workPhone', homePhone = '$homePhone', mail = '$mail' 
                WHERE id = $id;";
    } else {
      die("Fallo al ingresar datos");
    }
    

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die("Fallo al ingresar datos");
    }

    if ($action == 'save') {
      $_SESSION['message'] = "Contacto Guardado Exitosamente 👍";
    } else {
      $_SESSION['message'] = "Contacto Editado Exitosamente 👍";
    }
    
    $_SESSION['message-type'] = "success";

    header("Location: index.php");
  }

?>
