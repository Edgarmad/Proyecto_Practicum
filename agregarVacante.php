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
                <i class="fas fa-file-alt"></i>
                <a href="#">Vacantes</a>
            </div>
            <div class="accion">
                <i class="fas fa-user-plus"></i>
                <a href="#">Postulados</a>
            </div>
            <div class="accion">
                <i class="fas fa-users"></i>
                <a href="#">Practicantes</a>
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
                        <a href="resultadoColaborador.html" style="cursor: pointer;" onclick="desdePer()"><img src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif" alt=""></a>
                    </div>
                </div>
                <div class="notificaciones">
                    <a href=""><i class="far fa-bell"></i></a>
                    <a href="index.html"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
            <div class="practicas">
                <div class="contenedor">
                    <form action="/" class="contenedor registro-form height-100">
                        <label for="titulo">Titulo del puesto:</label>
                        <input type="text" name="titulo" id="titulo">
                        <label for="descripcion">Descripción del puesto: </label>
                        <textarea name="descripcion" id="descripcion cols=" 30 " rows="10 "></textarea>
                        <label for="labores">Labores y actividades a realizar: </label>
                        <textarea name="labores " id="labores " cols="30 " rows="10 "></textarea>
                        <div class="inline-40">
                            <label for="horario">Horario inicio: </label>
                            <input class="centrar-texto" type="time" id="horarioInicio" name="horarioInicio" min="06:00 " max="23:59 " required>
                        </div>
                        <div class="inline-40">
                            <label for="horario">Horario Fin: </label>
                            <input class="centrar-texto" type="time" id="horarioFin" name="horarioFin" min="06:00 " max="23:59 " required>
                        </div>
                        <div>
                            <label style="display: inline-block; width: 40%; color: black;" for="">Nutricion</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Mercadologo</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Informatico</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Diseñador</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Negocios</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Nutricion</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Mercadologo</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Informatico</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Diseñador</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Negocios</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                        </div>            
                        <div class="centrar">
                            <button class="btn">Cancelar</button>
                            <button class="btn">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script2.js"></script>
</body>

</html>