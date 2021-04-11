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
            <div class="accion">
                <i class="far fa-user"></i>
                <a href="#">Mis practicas</a>
            </div>
            <div class="accion">
                <i class="fas fa-file-alt"></i>
                <a href="#">Vacantes</a>
            </div>
            <div class="accion">
                <i class="fas fa-briefcase"></i>
                <a href="#">Postulaciones</a>
            </div>
        </div>
        <div class="perfil-contenido">
            <div class="datos-perfil">
                <div class="usuario-info">
                    <div>
                        <h4>Alexis Morales</h4>
                        <p>Estudiante</p>
                    </div>
                    <div>
                        <img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt="">
                    </div>
                </div>
                <div class="notificaciones">
                    <a href=""><i class="far fa-bell"></i></a>
                    <a href=""><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="practicas">
                <div class="practicas-contenedor">
                    <div class="carta-m flex-100">
                        <div class="carta-practicas">
                            <h2 style="margin-bottom: 2rem;">Requisitos:</h2>
                        </div>
                        <div class="flex-contenedor">
                            <ul>
                                <li class="m-b-2"> <label for="cartaInicio" class="m-2 c-azul">Carta Inicio de practica <i class="fas fa-arrow-right"></i></label> </li>
                                <li> <input type="radio" name="cartaInicio" id="cartaInicio" disabled> </li>
                                <li class="m-b-2"> <label for="reglamento" class="m-2">Reglamento <i class="fas fa-arrow-right"></i></label> </li>
                                <li><input type="radio" name="reglamento" id="reglamento" disabled></li>
                                <li class="m-b-2"> <label for="cartaSeguimiento" class="m-2">Carta de seguimiento <i class="fas fa-arrow-right"></i></label> </li>
                                <li> <input type="radio" name="cartaSeguimiento" id="cartaSeguimiento" disabled></li>
                                <li class="m-b-2"> <label for="cartaLiberación" class="m-2">Carta de liberación <i class="fas fa-arrow-right"></i></label> </li>
                                <li><input type="radio" name="cartaLiberación" id="cartaLiberación" disabled></li>
                                <li class="m-b-2"> <label for="evalucionEmpresa" class="m-2">Evaluación final <i class="fas fa-arrow-right"></i></label> </li>
                                <li> <input type="radio" name="evalucionEmpresa" id="evalucionEmpresa" disabled></li>
                            </ul>
                        </div>
                        <p class="centrar-texto" style="color: lightgrey;">0/4 requisitos completados</p>
                        <div class="centrar-texto">
                            <a href="detalles.html" class="m-1 btn-2">Volver</a>
                            <a href="cartaInicio.html" class="m-1 btn">Guardar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>

</html>