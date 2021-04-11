<?php
include('db.php');
if (isset($_POST['save_task_alumno'])) {
    $name = $_POST['nombre'];
    $last_name = $_POST['apellido'];
    $email = $_POST['correo'];
    $telephone = $_POST['telefono'];
    $direcction = $_POST['direccion'];
    $place = $_POST['nacioEn'];
    $query = "INSERT INTO datos_personales(nombre, apellido, email, telefono, direccion, lugar_nacimiento) VALUES ('$name', '$last_name','$email', '$telephone','$direcction', '$place')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
    $carrera = $_POST['carrera'];
    $institucion = $_POST['institucion'];
    $nivelProf = $_POST['nivelProf'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $query2 = "INSERT INTO formacion_profesional (estudio, institucion, nivel_profesional, inicio) VALUES ('$carrera', '$institucion', '$nivelProf','$fecha_inicio')";
    $result2 = mysqli_query($connection, $query2);
    if(!$result2) {
        die("Query Failed.");
      }
    $puesto = $_POST['puesto'];
    $empresa = $_POST['lugar'];
    $actividades = $_POST['act'];
    $query3 = "INSERT INTO exp_laboral (puesto, empresa, actividades) VALUES ('$puesto', '$empresa', '$actividades')";
    $result3 = mysqli_query($connection, $query3);
    if(!$result3) {
        die("Query Failed.");
      }
    $interes = $_POST['interes'];
    $sectores = $_POST['sectores'];
    $query4 = "INSERT INTO objetivos_interes (interes, sectores) VALUES ('$interes', '$sectores')";
    $result4 = mysqli_query($connection, $query4);
    if(!$result4) {
        die("Query Failed.");
      }
  }
  header('Location: index.php');
?>