<?php
include('db.php');
if (isset($_POST['save_task'])) {
    $name = $_POST['nombre_usuario'];
    $last_name = $_POST['apellido_usuario'];
    $email = $_POST['correo_usuario'];
    $telephone = $_POST['telefono_usuario'];
    $direcction = $_POST['direccion_usuario'];
    $place = $_POST['lugar_nacimiento_usuario'];
    $id = $_POST['id_usuario'];
    $rol = $_POST['roles'];
    $query = "INSERT INTO datos_personales(nombre, apellido, email, telefono, direccion, lugar_nacimiento,id_anahuac, Roles) VALUES ('$name', '$last_name','$email', '$telephone','$direcction', '$place','$id','$rol')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
  }
  header('Location: admin.php');
?>