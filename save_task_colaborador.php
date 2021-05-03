<?php
include('db.php');
if (isset($_POST['save_task_colaborador'])) {
    $name = $_POST['nombre_usuario'];
    $last_name = $_POST['apellido_usuario'];
    $email = $_POST['correo_usuario'];
    $telephone = $_POST['telefono_usuario'];
    $direcction = $_POST['direccion_usuario'];
    $place = $_POST['lugar_nacimiento_usuario'];
    $query = "INSERT INTO datos_personales(nombre, apellido, email, telefono, direccion, lugar_nacimiento) VALUES ('$name', '$last_name','$email', '$telephone','$direcction', '$place')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
  }
  header('Location: perfilEmpresa.php');
?>