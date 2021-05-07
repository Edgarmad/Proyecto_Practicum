<?php include("db.php")?>

<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: index.html');
} else{
    if($_SESSION['rol'] != 1){
        header('location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <!-- ICONO DE PESTAÑA -->
    <link rel="shortcut icon" href="https://www.miplana.mx/r_/inc/img/favicon.ico">
    <!--NORMALIZE-->
    <link rel="stylesheet" href="css/normalize.css">
    <!--ICONOS-->
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <!--ESTILOS PERSONALIZADOS-->
    <link rel="stylesheet" href="css/styles.css">
</head>
<?php

//Obtener el nombre
$query_nombre = 'SELECT nombre FROM datos_personales WHERE id = 3';
$resultado_nombre = mysqli_query($connection, $query_nombre);
if(!$resultado_nombre) {
    die("Query Failed.");
  }
$row = mysqli_fetch_array($resultado_nombre);
$nombre = $row['nombre'];
//obtener el rol
$query_rol = 'SELECT rol FROM roles WHERE id = 1';
$resultado_rol = mysqli_query($connection, $query_rol);
if(!$resultado_rol) {
    die("Query Failed.");
  }
$row = mysqli_fetch_array($resultado_rol);
$rol = $row['rol'];

?>
<body>
    <main class="perfil">
        <div class="dashboard c-blanco" id="dashboard">
            <!-- <h2 class="logo c-azul centrar-texto">PXS</h2> -->
            <img src="imgBackups/practicum_2020_logo-04.png" alt="logo" class="logo">
            <div class="accion" id="burger-menu">
                <a href="#"><i class="fas fa-bars" ></i></a>
            </div>
            <div class="accion" id="misPracticasBtn">
                <i class="far fa-user"></i>
                <a href="#">Agregar</a>
            </div>
            <div class="accion" id="vacantesBtn">
                <i class="fas fa-file-alt"></i>
                <a>Quitar</a>
            </div>
            <div class="accion" id="postulacionesBtn">
                <i class="fas fa-briefcase"></i>
                <a href="#">Editar</a>
            </div>
        </div>
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
    <!--Menu agregar -->
                <section id="misPracticas">
                    <div class="contenedor">
                       <div class= "izquierda"> 
                            <form action = "save_task.php" method = "POST" class="contenedor registro-form height-100 ">
                                <div class= "form-group">
                                    <input type="text" name="nombre_usuario" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="apellido_usuario" class="form-control" placeholder="Apellido">
                                </div>
                                <div class= "form-group">
                                    <input type="text" name="correo_usuario" class="form-control" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telefono_usuario" class="form-control" placeholder="Telefono">
                                </div>
                                <div class= "form-group">
                                    <input type="text" name="direccion_usuario" class="form-control" placeholder="Direccion">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lugar_nacimiento_usuario" class="form-control" placeholder="Lugar de nacimiento">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="id_usuario" class="form-control" placeholder="ID">
                                </div>
                                <select name="roles" id="roles">
                                    <option value="" disabled>--Rol--</option>
                                    <option value="2">Alumno</option>
                                    <option value="4">Responsable de proyecto</option>
                                    <option value="3">Empresa</option>
                                </select>
                                <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
                            </form>
                       </div>
                    </div>
                </section>
    <!--Menu borrar -->
                <section id="vacantes" class="hide">
                <div class="contenedor">
                       <div class= "card card-body"> 
                            <form action = "delete_task.php" method = "GET" class="contenedor registro-form height-100 ">
                                <div class= "form-group">
                                    <input type="text" name="id_usuario" class="form-control" placeholder="Ingrese el ID">
                                </div>
                                <input type="submit" name="delete_task" class="btn btn-success btn-block" value="Borrar">
                            </form>
                       </div>
                    </div>
                </section>
    <!--Menu editar -->
                <section id="postulaciones" class="hide">
                <div class="contenedor">
                       <div class= "card card-body"> 
                            <form action = "edit_task.php" method = "GET" class="contenedor registro-form height-100 ">
                                <div class= "form-group">
                                    <input type="text" name="id_usuario" class="form-control" placeholder="Ingrese el ID">
                                </div>
                                <input type="submit" name="edit_task" class="btn btn-success btn-block" value="Editar">
                            </form>
                       </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>