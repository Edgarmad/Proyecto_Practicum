<?php

include("db.php");
#seccion 1
if(isset($_GET['id_usuario'])) {
    $id = $_GET['id_usuario'];
    $query = "SELECT*FROM datos_personales WHERE datos_personales.id = $id";
    $result = mysqli_query($connection, $query);
    if ($result) {

        $total = mysqli_num_rows($result);
    
    } else {
    
        die(mysqli_error($connection));    
    }
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $id_user = $row['id'];
            $name = $row['nombre'];
            $last_name = $row['apellido'];
            $email = $row['email'];
            $telephone = $row['telefono'];
            $direcction = $row['direccion'];
            $place = $row['lugar_nacimiento'];
            $anahuac = $row['id_anahuac'];
            $rol = $_POST['roles'];
        }
}
#seccion 2
#la siguientes lineas de codigo toman de la seccion 3 los datos
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['nombre_usuario'];
    $last_name = $_POST['apellido_usuario'];
    $email = $_POST['correo_usuario'];
    $telephone = $_POST['telefono_usuario'];
    $direcction = $_POST['direccion_usuario'];
    $place = $_POST['lugar_nacimiento_usuario'];
    $anahuac = $_POST['id_mayab'];
    $rol = $_POST['rol'];
    $query = "UPDATE datos_personales SET nombre = '$name', apellido = '$last_name',email = '$email', 
                                          telefono = '$telephone', direccion = '$direcction', lugar_nacimiento = '$place', id_anahuac = '$anahuac', Roles = '$rol'
                                        WHERE datos_personales.id= $id";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
    header('Location: admin.php');
}
#seccion 3
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PXS</title>
    <!-- ICONO DE PESTAÑA -->
    <link rel="shortcut icon" href="https://www.miplana.mx/r_/inc/img/favicon.ico">
    <!--NORMALIZE-->
    <link rel="stylesheet" href="css/normalize.css">
    <!--ICONOS-->
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <!--ESTILOS PERSONALIZADOS-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main class="perfil">
        <div class="perfil-contenido">
            <div class="datos-perfil">
                <div class="usuario-info">
                    <div>
                        <h4><?php echo $nombre;?></h4>
                        <p><?php echo $rol;?></p>
                    </div>
                    <div>
                        <a href="resultado.html"><img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt=""></a>
                    </div>
                </div>
                <div class="notificaciones">
                    <a href=""><i class="far fa-bell"></i></a>
                    <a href="salir.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="practicas">
<!--Menu lateral izquierdo -->
<div class="contenedor p-4">
    <img src="imgBackups/practicum_2020_logo-01.png" alt="">
    <div class="row">
      <div class="col-md-4 mx-auto">
          <div class="carta centrar-texto">
              <form action="edit_task.php?id=<?php echo $_GET['id_usuario']; ?>" method="POST" class="registro-form height-100">
                  <div class="form-group">
                      <input type="text" name="nombre_usuario" class="form-control" value="<?php echo $name; ?>" placeholder = "Nombre">
                  </div>
                  <div class="form-group">
                      <input type="text" name="apellido_usuario" class="form-control" value="<?php echo $last_name; ?>" placeholder = "Apellido">
                  </div>
                  <div class= "form-group">
                      <input type="text" name="correo_usuario" class="form-control" value="<?php echo $email; ?>" placeholder = "Correo">
                  </div>
                  <div class="form-group">
                      <input type="text" name="telefono_usuario" class="form-control" value="<?php echo $telephone; ?>" placeholder = "Telefono" >
                  </div>
                  <div class= "form-group">
                      <input type="text" name="direccion_usuario" class="form-control" value="<?php echo $direcction; ?>" placeholder = "Direaccion" >
                  </div>
                  <div class="form-group">
                      <input type="text" name="lugar_nacimiento_usuario" class="form-control" value="<?php echo $place; ?>" placeholder = "Ciudad">
                  </div>
                  <div class="form-group">
                      <input type="text" name="id_mayab" class="form-control" value="<?php echo $anahuac;?>" placeholder = "ID">
                  </div>
                  <select name="rol" id="rol">
                                    <option value="" disabled>--Rol--</option>
                                    <option value="2">Alumno</option>
                                    <option value="4">Responsable de proyecto</option>
                                    <option value="3">Empresa</option>
                  </select>
                  <a href="admin.php" class="btn-2">
                    volver
                  </a>
                  <button class="btn" name="update">
                      Actualizar
                  </button>
              </form>
          </div>
      </div>
    </div>
</div>
    <!--Menu borrar -->
                
    <!--Menu editar -->
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>