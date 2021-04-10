<?php
include('db.php');
//nuevo codigo
session_start();
if(isset($_GET['cerrar_sesion'])){
    session_unset();
    session_destroy();
}
if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: admin.php');
        break;
        case 2:
            header('location: perfilAlumno.html');
        break;
        default:
    }
}

if(isset($_POST['usuario']) && isset($_POST['pwd'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['pwd'];
    $_SESSION['usuario'] = $usuario;
    $query = "SELECT*FROM alumno WHERE id_datos_personales = '$usuario' and password = '$password'";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
    //$row =  $query->fetch(PDO::FETCH_BOTH);
    $row =  mysqli_fetch_array($result);
    if($row == TRUE){
        $rol = $row[5];
        $_SESSION['rol'] = $rol;
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;
            case 2:
                header('location: perfilAlumno.html');
            break;
            default:
        }
    } else{
        include("index.html");
    }
    mysqli_free_result($result);
    mysqli_close($connection);
}
?>