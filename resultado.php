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
    <div class="c-azul header">
        <a href="registro.php" class=""><i class="fas fa-arrow-left"></i></a>
        <h2 class="centrar-texto">Editar Perfil</h2>
        <a href="perfilAlumno.php" class="btn btn-2 p-2">Confirmar</a>
    </div>
    <main class="contenedor">
        <div class="carta-xl">
            <img class="img-form" src="https://images.unsplash.com/photo-1586297135537-94bc9ba060aa?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="foto_personal ">
            <div class="flex-contenedor">
                <div class="flex-mitad-especial f-16">
                    <form action=" # " class="contenedor registro-form height-100 " id="registro">
                        <fieldset>
                            <div class="derecha"><a class="btn" id="editarPersonales"><i class="fas fa-edit"></i></a></div>
                            <legend class="izquierda ">Datos Personales</legend>
                            <div class="labels-2 ">
                                <label for="nombre ">Nombre(s):</label>
                                <label for="apellido ">Apellido:</label>
                            </div>
                            <div class="registro-2 centrar ">
                                <input disabled type="text " name="nombre " id="nombre" placeholder = "<?php $name = $_POST['nombre']; echo $name; ?>">  
                                <input disabled type="text " name="apellido " id="apellido">
                            </div>
                            <div class="izquierda ">
                                <label for="correo ">Email:</label>
                                <input disabled type="email " name="correo " id="correo">
                                <label for="telefono ">Telefono:</label>
                                <input disabled type="tel " name="telefono " id="telefono">
                                <label for="direccion ">Dirección:</label>
                                <textarea disabled name="direccion " id="direccion " cols="30 " rows="10 "></textarea>
                                <label for="nacioEn ">Lugar de nacimiento:</label>
                                <input disabled type="text " name="nacioEn " id="nacioEn">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="derecha"><a class="btn" id="editarFormacion"><i class="fas fa-edit"></i></a></div>
                            <legend class="izquierda">Formación Profesional</legend>
                            <div class="izquierda">
                                <label for="carrera">Estudio:</label>
                                <input disabled type="text" name="carrera" id="carrera">
                                <label for="institucion">Institucion:</label>
                                <input disabled type="text" name="institucion" id="institucion">
                                <label for="nivelProf">Nivel Profesional:</label>
                                <select disabled name="nivelProf" id="nivelProf">
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
                                    <input disabled type="date" name="" id="">
                                    <input disabled type="date" name="" id="">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="derecha"><a class="btn" id="editarExperiencia"><i class="fas fa-edit"></i></a></div>
                            <legend class="izquierda">Experiencia laboral y profesional</legend>
                            <div class="izquierda">
                                <label for="puesto">Puesto:</label>
                                <input disabled type="text" name="puesto" id="puesto">
                                <label for="lugar">Empresa o institucion:</label>
                                <input disabled type="text" name="lugar" id="lugar">
                                <label for="act">Actividades realizadas:</label>
                                <textarea disabled name="act" id="act" cols="30" rows="10"></textarea>
                                <div class="labels-2">
                                    <label for="">Inicio:</label>
                                    <label for="">Fin:</label>
                                </div>
                                <div class="registro-2 centrar">
                                    <input disabled type="date" name="" id="">
                                    <input disabled type="date" name="" id="">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <form action="#" class="flex-mitad-especial f-16">
                    <div class="contenedor registro-form height-100">
                        <fieldset>
                            <div class="derecha"><a class="btn" id="editarCompetencias"><i class="fas fa-edit"></i></a></div>
                            <legend class="izquierda">Competencias y habilidades</legend>
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
                            </section>
                            <section class="izquierda">
                                <h4>Tecnología</h4>
                                <div class="">
                                    <ul id="tecnologias">
                                        <li>Paqueteria Office</li>
                                        <li><span class="competencias c-azul"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></li>
                                    </ul>
                                </div>
                            </section>
                            <section class="izquierda">
                                <h4>Otras habilidades</h4>
                                <div id="otrasHabilidades">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Relaciones públicas</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="some" id="some">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Trabajo en equipo</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Comunicación asertiva</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Administración del tiempo</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                </div>
                            </section>
                        </fieldset>
                        <fieldset>
                            <div class="derecha"><a class="btn" id="editarObjetivos"><i class="fas fa-edit"></i></a></div>
                            <legend class="izquierda">Objetivos e intereses</legend>
                            <div class="izquierda">
                                <label for="">¿Qué estas buscando?</label>
                                <textarea disabled name="" id="" cols="30" rows="10"></textarea>
                                <h4>¿Donde te gustaría trabajar?</h4>
                                <p>Selecciona las opciones que te gustarian</p>
                                <div>
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Empresas pequeñas</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="some" id="some">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Empresas medianas</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Empresas Grandes</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Startups</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                    <label style="display: inline-block; width: 40%; color: black;" for="">Dependencias gubernamentales</label>
                                    <input disabled style="display: inline-block; width: 50%;" type="checkbox" name="" id="">
                                </div>
                                <label for="">¿Qué giros o sectores te llaman la atención?</label>
                                <textarea disabled name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <div class="centrar-texto c-blanco m-2">
        <a href="#top">Volver Arriba <i class="fas fa-arrow-up"></i></a>
    </div>

    <script src="js/script.js"></script>
</body>

</html>