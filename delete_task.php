<?php

include("db.php");

if(isset($_GET['id_usuario'])) {
  $id = $_GET['id_usuario'];
  $query = "DELETE FROM datos_personales WHERE datos_personales.id = $id";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die("Query Failed.");
  }
}
header('Location: admin.php');
?>