<?php
include('db.php');
if (isset($_POST['save_task_colaborador_vacante'])) {
    $vacante = $_POST['vacante'];
    $coordinador = $_POST['coordinador'];
    $empresa = $_POST['empresa'];
    $skills_requeridas = $_POST['skills_requeridas'];
    $skill_desarrolladas = $_POST['skill_desarrolladas'];
    $link_pdf = $_POST['link_pdf'];
    $query = "INSERT INTO ofertas_trabajo(nombre_vacante,nombre_coordinador,nombre_empresa,skills_necesitadas,skills_desarrollar,link) VALUES ('$vacante', '$coordinador','$empresa', '$skills_requeridas','$skill_desarrolladas', '$link_pdf')";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
  }
  header('Location: perfilEmpresa.php');
?>