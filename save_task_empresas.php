<?php
include('db.php');
if (isset($_POST['save_task_empresas'])) {
    $name = $_POST['nombreResponsable'];
    $last_name = $_POST['apellidoResponsable'];
    $email = $_POST['correoResponsable'];
    $telephone = $_POST['telefonoResponsable'];
    $query = "INSERT INTO datos_personales(nombre, apellido, email, telefono) VALUES ('$name', '$last_name','$email', '$telephone')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed. 1");
      }
    $nombreEmpresa = $_POST['nombreEmpresa'];
    $ciudadEmpresa = $_POST['ciudadEmpresa'];
    $correoEmpresa = $_POST['correoEmpresa'];
    $telefonoEmpresa = $_POST['telefonoEmpresa'];
    $direccionEmpresa = $_POST['direccionEmpresa'];
    $query2 = "INSERT INTO datos_empresa (nombre, ciudad, correo, telefono, direccion) VALUES ('$nombreEmpresa', '$ciudadEmpresa', '$correoEmpresa','$telefonoEmpresa','$direccionEmpresa')";
    $result2 = mysqli_query($connection, $query2);
    if(!$result2) {
        die("Query Failed. 2");
      }
    $descripcionempresa = $_POST['descripcionEmpresa'];
    $deseoAlumnoEmpresa = $_POST['deseoAlumnoEmpresa'];
    $query3 = "INSERT INTO otros_datos (descripcion_empresa, descripcion_alumno) VALUES ('$descripcionempresa', '$deseoAlumnoEmpresa')";
    $result3 = mysqli_query($connection, $query3);
    if(!$result3) {
        die("Query Failed. 3");
      }
  header('Location: index.php');
}
?>