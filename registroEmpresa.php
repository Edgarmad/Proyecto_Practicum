<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <main class="flex-contenedor">
        <div class="flex-mitad bg-white m-0">
            <form action="save_task_empresas.php " method = "POST" class="contenedor registro-form height-100 ">
                <section class="" id="datosPersonalesResponsable">
                    <ol class="pasos ">
                        <li class="centrar-texto focus ">1</li>
                        <li class="centrar-texto ">2</li>
                        <li class="centrar-texto ">3</li>
                    </ol>
                    <label for="imgInputEmpresa" class="selectorImg"><i class="fas fa-camera"></i></label>
                    <input type="file" name="imgInputEmpresa" id="imgInputEmpresa" style="display: none;">
                    <img class="img-form " src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif " alt="foto_personal " id="imgLoadEmpresa">
                    <h4 class="izquierda ">Datos Personales del Responsable</h4>
                    <div class="labels-2 ">
                        <label for="nombreResponsable">Nombre(s):</label>
                        <label for="apellidoResponsable">Apellidos:</label>
                    </div>
                    <div class="registro-2 centrar ">
                        <input type="text " name="nombreResponsable" id="nombreResponsable">
                        <input type="text " name="apellidoResponsable" id="apellidoResponsable">
                    </div>
                    <div class="izquierda ">
                        <label for="correoResponsable ">Email:</label>
                        <input type="email " name="correoResponsable" id="correoResponsable">
                        <label for="telefonoResponsable">Telefono:</label>
                        <input type="tel " name="telefonoResponsable" id="telefonoResponsable">
                    </div>
                </section>
                <section id="datosEmpresa" class="hide">
                    <ol class="pasos">
                        <li class="centrar-texto">1</li>
                        <li class="centrar-texto focus">2</li>
                        <li class="centrar-texto">3</li>
                    </ol>
                    <h4 class="izquierda">Datos de la Empresa</h4>
                    <div class="izquierda">
                        <label for="nombreEmpresa">Nombre de la empresa:</label>
                        <input type="text" name="nombreEmpresa" id="nombreEmpresa">
                        <label for="ciudadEmpresa">¿En qué ciudad esta ubicada?</label>
                        <input type="text" name="ciudadEmpresa" id="ciudadEmpresa">
                        <label for="correoEmpresa ">Email:</label>
                        <input type="email " name="correoEmpresa" id="correoEmpresa">
                        <label for="telefonoEmpresa">Telefono:</label>
                        <input type="tel " name="telefonoEmpresa" id="telefonoEmpresa">
                        <label for="direccionEmpresa">Dirección:</label>
                        <textarea name="direccionEmpresa" id="direccionEmpresa" cols="30 " rows="10 "></textarea>
                    </div>
                </section>
                <section id="otrosDatos" class="hide">
                    <ol class="pasos">
                        <li class="centrar-texto">1</li>
                        <li class="centrar-texto">2</li>
                        <li class="centrar-texto focus">3</li>
                    </ol>
                    <h4 class="izquierda">Otros Datos</h4>
                    <div class="izquierda">
                        <label for="descripcionEmpresa">Descripción de la Empresa::</label>
                        <textarea name="descripcionEmpresa" id="descripcionEmpresa" cols="30 " rows="10 "></textarea>
                        <label for="deseoAlumnoEmpresa">Describe el perfil del alumno que buscas:</label>
                        <textarea name="deseoAlumnoEmpresa" id="deseoAlumnoEmpresa" cols="30 " rows="10 "></textarea>
                    </div>
                </section>
                <div class="centrar-texto ">
                    <a class="btn-2 " id="regresarEmpresa">Volver a pagina principal</a>
                    <a class="btn btn-azul c-blanco " id="continuarRegistroEmpresa">Continuar</a>
                    <input type="submit" name="save_task_empresas" class="btn btn-azul c-blanco " value="Guardar">
                    <!-- <button type="submit " class="btn btn-azul c-blanco ">Continuar</button> -->
                </div>
            </form>
        </div>
        <div class="flex-mitad ">
            <div class="c-blanco centrar-pantalla ">
                <div class="m-b-8 m-s-3 ">
                    <p><span class="c-azul ">&#8212;Registro</span></p>
                    <h2 id="titPagRegistroEmpresa">Información Personal del Responsable</h2>
                    <p id="titDosPagRegistroEmpresa">¡Bienvenido!</p>
                    <p id="InfPagRegistroEmpresa">Para empezar es momento de registrar tu información personal como responsable de tu empresa. Por favor, asegúrate de que tus datos sean correctos y estén completos.</p>
                    <p><span class="c-azul " id="numPagRegistroEmpresa">01/03</span></p>
                </div>
            </div>
        </div>
    </main>

    <script src="js/script2.js"></script>
</body>

</html>