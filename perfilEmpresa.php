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
    <title>PXS</title>
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
        <div class="dashboard c-blanco" id="dashboard">
            <!-- <h2 class="logo c-azul centrar-texto">PXS</h2> -->
            <img src="imgBackups/practicum_2020_logo-04.png" alt="logo" class="logo">
            <div class="accion" id="burger-menu">
                <a href="#"><i class="fas fa-bars" ></i></a>
            </div>
            <div class="accion" id="vacantesBtn">
                <i class="fas fa-file-alt"></i>
                <a>Vacantes</a>
            </div>
            <div class="accion" id="postuladosBtn">
                <i class="fas fa-user-plus"></i>
                <a>Postulados</a>
            </div>
            <div class="accion" id="practicantesBtn">
                <i class="fas fa-users"></i>
                <a>Practicantes</a>
            </div>
        </div>
        <div class="perfil-contenido">
            <div class="datos-perfil">
                <div class="usuario-info">
                    <div>
                        <h4>Bill Gates</h4>
                        <p>Microsoft</p>
                    </div>
                    <div id="editarPerfil">
                        <a href="resultadoEmpresa.php" style="cursor: pointer;" onclick="desdePer()"><img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt=""></a>
                    </div>
                </div>
                <div class="notificaciones">
                    <a href=""><i class="far fa-bell"></i></a>
                    <a href="salir.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="practicas">
                <section id="vacantes">
                    <div class="contenedor izquierda">
                        <div class="inline-40">
                            <h2>Mis Vacantes</h2>
                            <p>Actualmente ofreces las siguientes vacantes: </p>
                        </div>
                        <div class="inline-40 derecha">
                            <a href="agregarVacante.php" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="practicas-contenedor centrar-flex">
                        <div class="carta-ch">
                            <div class="cir-gris centrar">
                                <i class="far fa-user centrar"></i>
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Analista contador</h2>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-users m-r-2"></i><i class="fas fa-file-alt m-r-2"></i></p>
                                    <p> 4 Vacantes</p>
                                    <p> 8 Postulaciones</p>
                                </div>
                            </div>
                            <button class="btn">Editar</button>
                        </div>
                        <div class="carta-ch">
                            <div class="cir-gris centrar">
                                <i class="far fa-user centrar"></i>
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Analista aduanero</h2>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-users m-r-2"></i><i class="fas fa-file-alt m-r-2"></i></p>
                                    <p> 4 Vacantes</p>
                                    <p> 8 Postulaciones</p>
                                </div>
                            </div>
                            <button class="btn">Editar</button>
                        </div>
                        <div class="carta-ch">
                            <div class="cir-gris centrar">
                                <i class="far fa-user centrar"></i>
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Desarrollador web</h2>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-users m-r-2"></i><i class="fas fa-file-alt m-r-2"></i></p>
                                    <p> 4 Vacantes</p>
                                    <p> 8 Postulaciones</p>
                                </div>
                            </div>
                            <button class="btn">Editar</button>
                        </div>
                        <div class="carta-ch">
                            <div class="cir-gris centrar">
                                <i class="far fa-user centrar"></i>
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Interno cocina</h2>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-users m-r-2"></i><i class="fas fa-file-alt m-r-2"></i></p>
                                    <p> 4 Vacantes</p>
                                    <p> 8 Postulaciones</p>
                                </div>
                            </div>
                            <button class="btn">Editar</button>
                        </div>
                    </div>
                </section>
                <section id="postulados" class="hide">
                    <div class="contenedor izquierda">
                        <div class="inline-40">
                            <h2>Alumnos postulados</h2>
                            <p>Actualmente ofreces las siguientes vacantes: </p>
                        </div>
                        <div class="inline-40 derecha">
                            <a href="agregarVacante.php" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="practicas-contenedor centrar-flex">
                        <div class="carta-ch">
                            <div class="centrar-texto">
                                <img src="imgBackups/photo-1539302730708-a9ccbdd8332b.jfif" alt="">
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Monica López</h2>
                            <h3 class="centrar-texto">Negocios Internacionales</h3>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-file-alt m-r-2"></i><i class="fas fa-phone m-r-2"></i><i class="fas fa-envelope m-r-2"></i></p>
                                    <p>Analista contador</p>
                                    <p>9994587687</p>
                                    <p>maquinadefuego@gmail.com</p>
                                </div>
                            </div>
                            <div class="centrar-texto">
                                <button class="btn">Rechazar</button>
                                <button class="btn">Aceptar</button>
                            </div>         
                        </div>
                        <div class="carta-ch">
                            <div class="centrar-texto">
                                <img src="imgBackups/photo-1539302730708-a9ccbdd8332b.jfif" alt="">
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Monica López</h2>
                            <h3 class="centrar-texto">Negocios Internacionales</h3>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-file-alt m-r-2"></i><i class="fas fa-phone m-r-2"></i><i class="fas fa-envelope m-r-2"></i></p>
                                    <p>Analista contador</p>
                                    <p>9994587687</p>
                                    <p>maquinadefuego@gmail.com</p>
                                </div>
                            </div>
                            <div class="centrar-texto">
                                <button class="btn">Rechazar</button>
                                <button class="btn">Aceptar</button>
                            </div>         
                        </div>
                        <div class="carta-ch">
                            <div class="centrar-texto">
                                <img src="imgBackups/photo-1539302730708-a9ccbdd8332b.jfif" alt="">
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Monica López</h2>
                            <h3 class="centrar-texto">Negocios Internacionales</h3>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-file-alt m-r-2"></i><i class="fas fa-phone m-r-2"></i><i class="fas fa-envelope m-r-2"></i></p>
                                    <p>Analista contador</p>
                                    <p>9994587687</p>
                                    <p>maquinadefuego@gmail.com</p>
                                </div>
                            </div>
                            <div class="centrar-texto">
                                <button class="btn">Rechazar</button>
                                <button class="btn">Aceptar</button>
                            </div>         
                        </div>
                    </div>
                </section>
                <section id="practicantes" class="hide">
                    <div class="contenedor izquierda">
                        <div class="inline-40">
                            <h2>Mis practicantes</h2>
                            <p>Ellos se encuentran contigo actualmente: </p>
                        </div>
                        <div class="inline-40 derecha">
                            <a href="agregarVacante.php" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="practicas-contenedor centrar-flex">
                        <div class="carta-ch">
                            <div class="centrar-texto">
                                <img src="imgBackups/photo-1539302730708-a9ccbdd8332b.jfif" alt="">
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Monica López</h2>
                            <h3 class="centrar-texto">Negocios Internacionales</h3>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-file-alt m-r-2"></i><i class="fas fa-phone m-r-2"></i><i class="fas fa-envelope m-r-2"></i></p>
                                    <p>Analista contador</p>
                                    <p>9994587687</p>
                                    <p>maquinadefuego@gmail.com</p>
                                </div>
                            </div>
                            <div class="centrar-texto">
                                <label style="display: block;" for="progreso1">Progreso</label>
                                <input type="range" name="progreso1" id="progreso1" min="0" max="100" value="25" disabled>
                            </div>         
                        </div>
                        <div class="carta-ch">
                            <div class="centrar-texto">
                                <img src="imgBackups/photo-1539302730708-a9ccbdd8332b.jfif" alt="">
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Monica López</h2>
                            <h3 class="centrar-texto">Negocios Internacionales</h3>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-file-alt m-r-2"></i><i class="fas fa-phone m-r-2"></i><i class="fas fa-envelope m-r-2"></i></p>
                                    <p>Analista contador</p>
                                    <p>9994587687</p>
                                    <p>maquinadefuego@gmail.com</p>
                                </div>
                            </div>
                            <div class="centrar-texto">
                                <label style="display: block;" for="progreso1">Progreso</label>
                                <input type="range" name="progreso1" id="progreso1" min="0" max="100" value="95" disabled>
                            </div>         
                        </div>
                        <div class="carta-ch">
                            <div class="centrar-texto">
                                <img src="imgBackups/photo-1539302730708-a9ccbdd8332b.jfif" alt="">
                            </div>
                            <h2 class="centrar-texto m-1 f-16">Monica López</h2>
                            <h3 class="centrar-texto">Negocios Internacionales</h3>
                            <div class="m-2" style="color: lightgray; font-size: 1.2rem;">
                                <div class="centrar-texto">
                                    <p><i class="fas fa-file-alt m-r-2"></i><i class="fas fa-phone m-r-2"></i><i class="fas fa-envelope m-r-2"></i></p>
                                    <p>Analista contador</p>
                                    <p>9994587687</p>
                                    <p>maquinadefuego@gmail.com</p>
                                </div>
                            </div>
                            <div class="centrar-texto">
                                <label style="display: block;" for="progreso1">Progreso</label>
                                <input type="range" name="progreso1" id="progreso1" min="0" max="100" value="52" disabled>
                            </div>         
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <script src="js/script2.js"></script>
</body>

</html>