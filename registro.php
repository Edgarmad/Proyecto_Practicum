<?php include("db.php")?>
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
            <form action="save_task_alumno.php" method = "POST" class="contenedor registro-form height-100 ">
                <section class="" id="datosPersonales">
                    <ol class="pasos ">
                        <li class="centrar-texto focus ">1</li>
                        <li class="centrar-texto ">2</li>
                        <li class="centrar-texto ">3</li>
                        <li class="centrar-texto ">4</li>
                        <li class="centrar-texto ">5</li>
                    </ol>
                    <label for="imgInput" class="selectorImg"><i class="fas fa-camera"></i></label>
                    <input type="file" name="imgInput" id="imgInput" style="display: none;">
                    <img class="img-form" src="imgBackups/photo-1491975474562-1f4e30bc9468.jfif " alt="foto_personal " id="imgLoad">
                    <h4 class="izquierda">Datos Personales</h4>
                    <div class="labels-2 ">
                        <label for="nombre">Nombre(s):</label>
                        <label for="apellido">Apellido:</label>
                    </div>
                    <div class="registro-2 centrar ">
                        <input type="text" name="nombre" id="nombre">
                        <input type="text" name="apellido" id="apellido">
                    </div>
                    <div class="izquierda ">
                        <label for="correo ">Email:</label>
                        <input type="text" name="correo" id="correo">
                        <label for="telefon">Telefono:</label>
                        <input type="text" name="telefono" id="telefono">
                        <label for="direccion">Dirección:</label>
                        <textarea name="direccion" id="direccion" cols="30 " rows="10 "></textarea>
                        <label for="nacioEn">Lugar de nacimiento:</label>
                        <input type="text" name="nacioEn" id="nacioEn">
                    </div>
                </section>
                <section id="formacion" class="hide">
                    <ol class="pasos">
                        <li class="centrar-texto">1</li>
                        <li class="centrar-texto focus">2</li>
                        <li class="centrar-texto">3</li>
                        <li class="centrar-texto">4</li>
                        <li class="centrar-texto">5</li>
                    </ol>
                    <h4 class="izquierda">Formación Profesional</h4>
                    <div class="izquierda">
                        <label for="carrera">Estudio:</label>
                        <input type="text" name="carrera" id="carrera">
                        <label for="institucion">Institucion:</label>
                        <input type="text" name="institucion" id="institucion">
                        <label for="nivelProf">Nivel Profesional:</label>
                        <select name="nivelProf" id="nivelProf">
                            <option value="" disabled>--Ingresa tu nivel de estudios--</option>
                            <option value="licenciatura">Licenciatura</option>
                            <option value="maestria">Maestria</option>
                            <option value="doctorado">Doctorado</option>
                        </select>
                        <div class="labels-2">
                            <label for="">Inicio:</label>
                            <label for="">Fin:</label>
                        </div>
                        <div class="registro-2 centrar">
                            <input type="date" name="fecha_inicio" id="">
                            <input type="date" name="fecha_final" id="">
                        </div>
                        <div class="derecha">
                            <a id="agregarFormacion" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </section>
                <section id="experiencia" class="hide">
                    <ol class="pasos">
                        <li class="centrar-texto">1</li>
                        <li class="centrar-texto">2</li>
                        <li class="centrar-texto focus">3</li>
                        <li class="centrar-texto">4</li>
                        <li class="centrar-texto">5</li>
                    </ol>
                    <h4 class="izquierda">Experiencia laboral y profesional</h4>
                    <div class="izquierda">
                        <label for="puesto">Puesto:</label>
                        <input type="text" name="puesto" id="puesto">
                        <label for="lugar">Empresa o institucion:</label>
                        <input type="text" name="lugar" id="lugar">
                        <label for="act">Actividades realizadas:</label>
                        <textarea name="act" id="act" cols="30" rows="10"></textarea>
                        <div class="labels-2">
                            <label for="">Inicio:</label>
                            <label for="">Fin:</label>
                        </div>
                        <div class="registro-2 centrar">
                            <input type="date" name="" id="">
                            <input type="date" name="" id="">
                        </div>
                        <div class="derecha">
                            <a id="agregarExp" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </section>
                <section class="hide" id="competencias">
                    <ol class="pasos">
                        <li class="centrar-texto">1</li>
                        <li class="centrar-texto">2</li>
                        <li class="centrar-texto">3</li>
                        <li class="centrar-texto focus">4</li>
                        <li class="centrar-texto">5</li>
                    </ol>
                    <h4 class="izquierda">Competencias y habilidades</h4>
                    <section class="izquierda">
                        <h4>Idiomas</h4>
                        <div class="">
                            <ul id="idiomas">
                                <li>Español</li>
                                <li><span class="competencias c-azul"><i id="uno" class="far fa-star"></i><i id="dos" class="far fa-star"></i><i id="tres" class="far fa-star"></i><i id="cuatro" class="far fa-star"></i><i id="cinco" class="far fa-star"></i></span></li>
                                <li>Inglés</li>
                                <li><span class="competencias c-azul"><i id="uno" class="far fa-star"></i><i id="dos" class="far fa-star"></i><i id="tres" class="far fa-star"></i><i id="cuatro" class="far fa-star"></i><i id="cinco" class="far fa-star"></i></span></li>
                            </ul>
                        </div>
                        <div class="derecha">
                            <a id="agregarIdioma" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </section>
                    <section class="izquierda">
                        <h4>Tecnología</h4>
                        <div class="">
                            <ul id="tecnologias">
                                <li>Paqueteria Office</li>
                                <li><span class="competencias c-azul"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></li>
                            </ul>
                        </div>
                        <div class="derecha">
                            <a id="agregarTecnologia" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </section>
                    <section class="izquierda">
                        <h4>Otras habilidades</h4>
                        <div id="otrasHabilidades">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Relaciones públicas</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="some" id="some">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Trabajo en equipo</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Comunicación asertiva</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Administración del tiempo</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                        </div>
                        <div class="derecha">
                            <a id="agregarOtrasHabilidades" class="btn">Agregar <i class="fas fa-plus"></i></a>
                        </div>
                    </section>
                </section>
                <section class="hide" id="objetivos">
                    <ol class="pasos">
                        <li class="centrar-texto">1</li>
                        <li class="centrar-texto">2</li>
                        <li class="centrar-texto">3</li>
                        <li class="centrar-texto">4</li>
                        <li class="centrar-texto focus  ">5</li>
                    </ol>
                    <h4 class="izquierda">Objetivos e intereses</h4>
                    <div class="izquierda">
                        <label for="">¿Qué estas buscando?</label>
                        <textarea name="interes" id="" cols="30" rows="10"></textarea>
                        <h4>¿Donde te gustaría trabajar?</h4>
                        <p>Selecciona las opciones que te gustarian</p>
                        <div>
                            <label style="display: inline-block; width: 40%; color: black;" for="">Empresas pequeñas</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="some" id="some">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Empresas medianas</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Empresas Grandes</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Startups</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                            <label style="display: inline-block; width: 40%; color: black;" for="">Dependencias gubernamentales</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                        </div>
                        <label for="">¿Qué giros o sectores te llaman la atención?</label>
                        <textarea name="sectores" id="" cols="30" rows="10"></textarea>
                    </div>
                </section>
                <div class="centrar-texto ">
                    <a class="btn-2 " id="regresar">Volver a pagina principal</a>
                    <a class="btn btn-azul c-blanco " name = "save_task_alumno" id="continuarRegistro">Continuar</a>
                    <input type="submit" name="save_task_alumno" class="btn btn-azul c-blanco " value="Guardar">
                    <!-- <button type="submit " class="btn btn-azul c-blanco ">Continuar</button> -->
                </div>
            </form>
        </div>
        <div class="flex-mitad ">
            <div class="c-blanco centrar-pantalla ">
                <div class="m-b-8 m-s-3 ">
                    <p><span class="c-azul ">&#8212;Registro</span></p>
                    <h2 id="titPagRegistro">Información personal</h2>
                    <p id="titDosPagRegistro">¡Bienvenido!</p>
                    <p id="InfPagRegistro">Para empezar es momento de registrar tu información personal. Por favor, asegúrate de que tus datos sean correctos y estén completos.</p>
                    <p><span class="c-azul " id="numPagRegistro">01/05</span></p>
                </div>
            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>

</html>