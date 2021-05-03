<?php include("db.php")?>

<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: index.html');
} else{
    if($_SESSION['rol'] != 3){
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
$query_nombre = 'SELECT nombre FROM datos_personales WHERE id = 14';
$resultado_nombre = mysqli_query($connection, $query_nombre);
if(!$resultado_nombre) {
    die("Query Failed.");
  }
$row = mysqli_fetch_array($resultado_nombre);
$nombre = $row['nombre'];
//obtener el rol
$query_rol = 'SELECT rol FROM roles WHERE id = 3';
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
            <div class="accion" id="main_areaBtn">
                <i class="far fa-user"></i>
                <a href="#">Perfil</a>
            </div>
            <div class="accion" id="misPracticasBtn">
                <i class="far fa-user"></i>
                <a href="#">Agregar responsables</a>
            </div>
            <div class="accion" id="vacantesBtn">
                <i class="fas fa-file-alt"></i>
                <a>Quitar responsables</a>
            </div>
            <div class="accion" id="postulacionesBtn">
                <i class="fas fa-briefcase"></i>
                <a href="#">Editar responsables</a>
            </div>
            <div class="accion" id="misProyectosBtn">
                <i class="fas fa-file-alt"></i>
                <a href="#">Agregar proyectos</a>
            </div>
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
                        <a href=""><img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt=""></a>
                    </div>
                </div>
                <div class="notificaciones">
                    <a href=""><i class="far fa-bell"></i></a>
                    <a href="salir.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="practicas">
<!--Main INICIO-->
            <section id="main_area">
                <div class="carta-xl">
                            <img class="img-form" src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="foto_personal ">
                            <div class="flex-contenedor">
                                <div class="flex-mitad-especial f-16">
                                    <form action=" # " class="contenedor registro-form height-100 " id="registro">
                                        <fieldset>
                                            <legend class="izquierda ">Datos Personales del Responsable</legend>
                                            <div class="labels-2 ">
                                                <label for="nombreResponsable">Nombre(s):</label>
                                                <label for="apellidoResponsable">Apellidos:</label>
                                            </div>
                                            <div class="registro-2 centrar ">
                                                <input disabled type="text " name="nombreResponsable " id="nombreResponsable" placeholder = "Veronica " >
                                                <input disabled type="text " name="apellidoResponsable " id="apellidoResponsable" placeholder = "Rodriguez Millan">
                                            </div>
                                            <div class="izquierda ">
                                                <label for="correoResponsable ">Email:</label>
                                                <input disabled type="email " name="correoResponsable" id="correoResponsable" placeholder = "empresa@empresa.com">
                                                <label for="telefonoResponsable">Telefono:</label>
                                                <input disabled type="tel " name="telefonoResponsable " id="telefonoResponsable" placeholder = "+51 999 999 9999">
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend class="izquierda">Datos de la Empresa</legend>
                                            <div class="izquierda">
                                                <label for="nombreEmpresa">Nombre de la empresa:</label>
                                                <input disabled type="text" name="nombreEmpresa" id="nombreEmpresa" placeholder = "Agencia de software">
                                                <label for="ciudadEmpresa">¿En qué ciudad esta ubicada?</label>
                                                <input disabled type="text" name="ciudadEmpresa" id="ciudadEmpresa" placeholder = "Merida, Yucatan">
                                                <label for="correoEmpresa ">Email:</label>
                                                <input disabled type="email " name="correoEmpresa" id="correoEmpresa" placeholder = "software@empresa.com">
                                                <label for="telefonoEmpresa">Telefono:</label>
                                                <input disabled type="tel " name="telefonoEmpresa " id="telefonoEmpresa" placeholder = "+51 999 999 9999">
                                                <label for="direccionEmpresa">Dirección:</label>
                                                <textarea disabled name="direccionEmpresa" id="direccionEmpresa" cols="30 " rows="10" placeholder = "Calle X, Colonia Y"></textarea>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <form action="#" class="flex-mitad-especial f-16">
                                    <div class="contenedor registro-form height-100">
                                        <fieldset>
                                            <legend class="izquierda">Otros Datos</legend>
                                            <div class="izquierda">
                                                <label for="descripcionEmpresa">Descripción de la Empresa::</label>
                                                <textarea disabled name="descripcionEmpresa" id="descripcionEmpresa" cols="30 " rows="10 "></textarea>
                                                <label for="deseoAlumnoEmpresa">Describe el perfil del alumno que buscas:</label>
                                                <textarea disabled name="deseoAlumnoEmpresa" id="deseoAlumnoEmpresa" cols="30 " rows="10 "></textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>
            </section>
<!--Main FINAL-->

<!--Menu lateral izquierdo INICIO-->
    <!--Menu agregar -->
                <section id="misPracticas" class ="hide">
                    <div class="contenedor">
                       <div class= "izquierda"> 
                            <form action = "save_task_colaborador.php" method = "POST" class="contenedor registro-form height-100 ">
                                <div class="form-group">
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
                                <input type="submit" name="save_task_colaborador" class="btn btn-success btn-block" value="Guardar">
                            </form>
                       </div>
                    </div>
                </section>
    <!--Menu borrar -->
                <section id="vacantes" class="hide">
                <div class="contenedor">
                       <div class= "card card-body"> 
                            <form action = "delete_task_colaborador.php" method = "GET" class="contenedor registro-form height-100 ">
                                <div class= "form-group">
                                    <input type="text" name="id_usuario" class="form-control" placeholder="Ingrese el ID">
                                </div>
                                <input type="submit" name="delete_task_colaborador" class="btn btn-success btn-block" value="Borrar">
                            </form>
                       </div>
                    </div>
                </section>
    <!--Menu editar -->
                <section id="postulaciones" class="hide">
                    <div class="contenedor">
                       <div class= "card card-body"> 
                            <form action = "edit_task_colaborador.php" method = "GET" class="contenedor registro-form height-100 ">
                                <div class= "form-group">
                                    <input type="text" name="id_usuario" class="form-control" placeholder="Ingrese el ID">
                                </div>
                                <input type="submit" name="edit_task_colaborador" class="btn btn-success btn-block" value="Editar">
                            </form>
                       </div>
                    </div>
                </section>
 <!--Menu agregar empresas -->
                <section id="misProyectos" class="hide">
                <div class="contenedor">
                       <div class= "card card-body"> 
                            <form action = "save_task_colaborador_vacante.php" method = "POST" class="contenedor registro-form height-100">
                                <div class="form-group">
                                    <input type="text" name="vacante" class="form-control" placeholder="Vacante">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="coordinador" class="form-control" placeholder="Coordinador">
                                </div>
                                <div class= "form-group">
                                    <input type="text" name="empresa" class="form-control" placeholder="Empresa">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="skills_requeridas" class="form-control" placeholder="Habilidades requeridas">
                                </div>
                                <div class= "form-group">
                                    <input type="text" name="skill_desarrolladas" class="form-control" placeholder="Habilidades a desarrollar">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="link_pdf" class="form-control" placeholder="PDF">
                                </div>
                                <input type="submit" name="save_task_colaborador_vacante" class="btn btn-success btn-block" value="Guardar">
                            </form>
                       </div>
                    </div>
                </section>
<!--Menu lateral izquierdo FIN -->
            </div>
        </div>
    </main>
    <script src="js/script_empresa.js"></script>
</body>
</html>