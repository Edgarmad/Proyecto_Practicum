<?php include("db.php")?>

<?php
session_start();
if(!isset($_SESSION['rol'])){
    header('location: index.html');
} else{
    if($_SESSION['rol'] != 2){
        header('location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PXS</title>
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
$query_rol = 'SELECT rol FROM roles WHERE id = 2';
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
                <a href="#">Mis practicas</a>
            </div>
            <div class="accion" id="vacantesBtn">
                <i class="fas fa-file-alt"></i>
                <a>Vacantes</a>
            </div>
            <div class="accion" id="postulacionesBtn">
                <i class="fas fa-briefcase"></i>
                <a href="#">Postulaciones</a>
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
                        <a href="resultado.php"><img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt=""></a>
                    </div>
                </div>
                <div class="notificaciones">
                    <a href=""><i class="far fa-bell"></i></a>
                    <a href="salir.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="practicas">
                <section id="misPracticas">
                    <div class="contenedor izquierda">
                        <h2>Mis Prácticas</h2>
                        <p>Estas son tus practicas realizadas ó en curso</p>
                    </div>
                    <div class="practicas-contenedor">
                        <div class="carta-m">
                            <div class="carta-practicas">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div class="practica-activa">
                                    <h3 style="font-size: 2rem;">Analista contador</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Nicxa</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="detalles.php" class="btn">Detalles</a>
                            </div>
                        </div>
                        <div class="carta-m">
                            <div class="carta-practicas">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div>
                                    <h3 style="font-size: 2rem;">Analista aduanero</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Aduanero Peninsular</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="#" class="btn">Detalles</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="vacantes" class="hide">
                    <div class="contenedor izquierda">
                        <h2>Vacantes</h2>
                        <p>Estas son las vacantes disponibles</p>
                    </div>
                    <div class="practicas-contenedor">
                        <div class="carta-m">
                            <div class="carta-practicas">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div class="practica-activa">
                                    <h3 style="font-size: 2rem;">Analista contador</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Nicxa</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="detalles.php" class="btn">Detalles</a>
                            </div>
                        </div>
                        <div class="carta-m">
                            <div class="carta-practicas">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div>
                                    <h3 style="font-size: 2rem;">Analista aduanero</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Aduanero Peninsular</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="#" class="btn">Detalles</a>
                            </div>
                        </div>
                        <div class="carta-m">
                            <div class="carta-practicas">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div class="practica-activa">
                                    <h3 style="font-size: 2rem;">Analista contador</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Nicxa</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="detalles.php" class="btn">Detalles</a>
                            </div>
                        </div>
                        <div class="carta-m">
                            <div class="carta-practicas">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div>
                                    <h3 style="font-size: 2rem;">Analista aduanero</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Aduanero Peninsular</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="#" class="btn">Detalles</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="postulaciones" class="hide">
                    <div class="contenedor izquierda">
                        <h2>Mis Postulaciones</h2>
                        <p>Estas son tus postulaciones realizadas o en curso</p>
                    </div>
                    <div class="practicas-contenedor">
                        <div class="carta-m">
                            <div class="carta-practicas rmAfter">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div class="practica-activa">
                                    <h3 style="font-size: 2rem;">Analista contador</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Nicxa</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div class="estado">
                                <div class="cir ele"><i class="fas fa-check"></i></div>
                                <div class="cir"><i class="fas fa-check"></i></div>
                                <div class="cir post"><i class="fas fa-check"></i></div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="detalles.php" class="btn">Detalles</a>
                            </div>
                        </div>
                        <div class="carta-m">
                            <div class="carta-practicas rmAfter">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div>
                                    <h3 style="font-size: 2rem;">Analista aduanero</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Aduanero Peninsular</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div class="estado">
                                <div class="cir ele"><i class="fas fa-check"></i></div>
                                <div class="cir"><i class="fas fa-check"></i></div>
                                <div class="cir post">3</div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="#" class="btn">Detalles</a>
                            </div>
                        </div>
                        <div class="carta-m">
                            <div class="carta-practicas rmAfter">
                                <div>
                                    <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                                </div>
                                <div class="practica-activa">
                                    <h3 style="font-size: 2rem;">Analista contador</h3>
                                    <h4 style="font-size: 1.5rem;">Grupo Nicxa</h4>
                                    <p style="color: gray;">Carrera: Negocios</p>
                                    <p style="color: gray;">Contacto: mail@something.com</p>
                                </div>
                            </div>
                            <div class="estado">
                                <div class="cir ele"><i class="fas fa-check"></i></div>
                                <div class="cir">2</div>
                                <div class="cir post">3</div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui enim expedita neque sed sint dolores in eveniet suscipit amet saepe? Corporis, voluptatum dolor error quidem magni eos quasi illum eligendi!</p>
                                <a href="detalles.php" class="btn">Detalles</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>