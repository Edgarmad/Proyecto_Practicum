/* LOGIN */
const pop = document.querySelector('#openPop');
const popup = document.querySelector('#pop');
const closePop = document.querySelector('#close')

/* RESPONSIVO */
const burger = document.querySelector("#burger-menu");
const dash = document.querySelectorAll(".accion");

/*VARIABLES DE INTERFAZ DEL REGISTRO*/
const continuarRegistro = document.querySelector("#continuarRegistro");
const regresar = document.querySelector('#regresar');
const datosPersonales = document.querySelector("#datosPersonales");
const formacion = document.querySelector('#formacion');
const objetivos = document.querySelector("#objetivos");
const competencias = document.querySelector('#competencias');
const experiencia = document.querySelector("#experiencia");
const titulo = document.querySelector('#titPagRegistro');
const tituloDos = document.querySelector('#titDosPagRegistro');
const información = document.querySelector('#InfPagRegistro');
const numeracion = document.querySelector('#numPagRegistro');


/* RESPONSIVO */
if (burger && dash) {
    burger.addEventListener('click', () => {
        dash.forEach(element => {
            if (element.className == 'accion') {
                element.className += ' responsive';
            } else {
                element.className = 'accion';
            }
        });
    })
}

/* LOGIN */

if (pop && popup && closePop) {
    pop.addEventListener('click', () => {
        pop.classList.toggle('hide');
        popup.classList.toggle('show');
    })

    closePop.addEventListener('click', () => {
        pop.classList.toggle('hide');
        popup.classList.toggle('show');
    })
}

/*
Datos personales
Formacion
Experiencia
Competencias
Objetivos
*/
/* REGISTRO */
if (continuarRegistro && regresar) {
    let cont = 0;
    continuarRegistro.addEventListener('click', () => {
        switch (cont) {
            case 0:
                datosPersonales.classList.add('hide');
                formacion.classList.remove('hide');
                cont++;
                regresar.textContent = 'Volver a Datos Personales';
                titulo.textContent = 'Formacion Profesional';
                tituloDos.textContent = '¡Presume todo lo que sabes!';
                información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '02/05';
                break;
            case 1:
                formacion.classList.add('hide');
                experiencia.classList.remove('hide');
                cont++;
                regresar.textContent = 'Volver a For. Profesional';
                titulo.textContent = 'Experiencia Profesional';
                tituloDos.textContent = '¡Presume todo lo que sabes!';
                información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '03/05';
                break;
            case 2:
                experiencia.classList.add('hide');
                competencias.classList.remove('hide');
                cont++;
                regresar.textContent = 'Volver a Exp. Profesional';
                titulo.textContent = 'Competencias y Habilidades';
                tituloDos.textContent = '¡Presume todo lo que sabes!';
                información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '04/05';
                break;
            case 3:
                competencias.classList.add('hide');
                objetivos.classList.remove('hide');
                continuarRegistro.textContent = 'Completar';
                cont = 4;
                regresar.textContent = 'Volver a Habilidades';
                titulo.textContent = 'Objetivos e Intereses';
                tituloDos.textContent = '¡Presume todo lo que sabes!';
                información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '05/05';
                break;
             case 4:
                //continuarRegistro.setAttribute('href', 'resultado.php')
                break;
                
            default:
                break;
        }
    })
    regresar.addEventListener('click', () => {
            switch (cont) {
                case 0:
                    cont = 0;
                    regresar.setAttribute('href', 'index.php')
                    continuarRegistro.textContent = 'Continuar';
                    console.log(cont);
                    break;
                case 1:
                    formacion.classList.add('hide');
                    datosPersonales.classList.remove('hide');
                    regresar.textContent = 'Volver a página principal';
                    continuarRegistro.textContent = 'Continuar';
                    cont--;
                    titulo.textContent = 'Información personal';
                    tituloDos.textContent = '¡Bienvenido!';
                    información.textContent = 'Para empezar es momento de registrar tu información personal. Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                    numeracion.textContent = '01/05';
                    break;
                case 2:
                    experiencia.classList.add('hide');
                    formacion.classList.remove('hide');
                    regresar.textContent = 'Volver a Datos Personales';
                    continuarRegistro.textContent = 'Continuar';
                    cont--;
                    titulo.textContent = 'Formacion Profesional';
                    tituloDos.textContent = '¡Presume todo lo que sabes!';
                    información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                    numeracion.textContent = '02/05';
                    break;
                case 3:
                    competencias.classList.add('hide');
                    experiencia.classList.remove('hide');
                    regresar.textContent = 'Volver a For. Profesional';
                    continuarRegistro.textContent = 'Continuar';
                    cont--;
                    titulo.textContent = 'Experiencia Profesional';
                    tituloDos.textContent = '¡Presume todo lo que sabes!';
                    información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                    numeracion.textContent = '03/05';
                    break;
                case 4:
                    competencias.classList.remove('hide');
                    objetivos.classList.add('hide');
                    regresar.textContent = 'Volver a Exp. Profesional';
                    continuarRegistro.textContent = 'Continuar';
                    cont--;
                    titulo.textContent = 'Competencias y Habilidades';
                    tituloDos.textContent = '¡Presume todo lo que sabes!';
                    información.textContent = 'Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                    numeracion.textContent = '04/05';
                    break;
                    
                default:
                    break;
            }
        })
        // let newStudent = {};

    // const input = document.querySelectorAll('input');
    // console.log(input);
    // input.forEach(element => {
    //     element.addEventListener('change', () => {
    //         console.log(element.id);
    //         if (element.id === 'nombre') {
    //             newStudent.nombre = element.value;
    //         }
    //         console.log(newStudent);
    //     })
    // });
}
/* IMAGEN PREVIEW */
const imgInput = document.querySelector("#imgInput");
const imgLoad = document.querySelector("#imgLoad");

if (imgInput && imgLoad) {
    function defaultBtnActive() {
        imgInput.click();
    }
    imgInput.addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                const result = reader.result;
                imgLoad.src = result;
            }
            reader.readAsDataURL(file);
        }
        console.log(file)
    });
}
//Agregar nueva Formacion Profesional
if (formacion && experiencia) {
    const agregar = document.querySelector('#agregarFormacion');
    let i = 0;
    let nuevos = [];
    agregar.addEventListener('click', () => {
        let nuevaFormacion = document.createElement('div');
        nuevaFormacion.setAttribute('id', `formacion${i}`);
        nuevaFormacion.innerHTML += `
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
                <input type="date" name="" id="">
                <input type="date" name="" id="">
            </div>
            <div class="derecha">
                <a class="btn" onclick="remove('formacion',${i})">Eliminar <i class="fas fa-trash-alt"></i></a>
            </div>`;
        nuevos.push(nuevaFormacion);
        formacion.append(nuevaFormacion);
        i++;
        console.log(i, nuevos);
    });

    //Agregando experiencias profesionales
    const agregarExp = document.querySelector('#agregarExp');
    agregarExp.addEventListener('click', () => {
        let nuevaExp = document.createElement('div');
        nuevaExp.setAttribute('id', `experiencia${i}`);
        nuevaExp.innerHTML += `
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
            <a class="btn" onclick="remove('experiencia',${i})">Eliminar <i class="fas fa-trash-alt"></i></a>
        </div>`;
        nuevos.push(nuevaExp);
        experiencia.append(nuevaExp);
        i++;
        console.log(i, nuevos);
    });
    const agregarIdioma = document.querySelector('#agregarIdioma');
    const listaIdiomas = document.querySelector('#idiomas');
    const agregarTecnologia = document.querySelector('#agregarTecnologia');
    const tecnologias = document.querySelector('#tecnologias');
    const agregarOtrasHabilidades = document.querySelector('#agregarOtrasHabilidades');
    const otrasHabilidades = document.querySelector('#otrasHabilidades');

    agregarIdioma.addEventListener('click', () => {
        const userInput = prompt('Que idioma quieres agregar?');
        if (userInput === null) {
            console.log('cancelado');
        } else {
            let nuevoIdi = document.createElement('div');
            nuevoIdi.setAttribute('id', `idioma${i}`);
            // nuevoIdi.setAttribute('onclick', `remove('idioma',${i})`);
            nuevoIdi.innerHTML += `<li onclick="remove('idioma',${i})" style="cursor: no-drop;">${userInput}</li>
            <li><span class="competencias c-azul"><i id="uno" class="far fa-star"></i><i id="dos" class="far fa-star"></i><i id="tres" class="far fa-star"></i><i id="cuatro" class="far fa-star"></i><i id="cinco" class="far fa-star"></i></span></li>`;
            nuevos.push(nuevoIdi);
            listaIdiomas.append(nuevoIdi);
            i++;
            console.log(i, nuevos);
        }
    })
    agregarTecnologia.addEventListener('click', () => {
        const userInput = prompt('Que otra tecnologia manejas?').toUpperCase();
        if (userInput === null) {
            console.log('cancelado');
        } else {
            let nuevaTec = document.createElement('div');
            nuevaTec.setAttribute('id', `tecnologia${i}`);
            nuevaTec.innerHTML += `<li onclick="remove('tecnologia',${i})" style="cursor: no-drop;">${userInput}</li>
            <li><span class="competencias c-azul"><i id="uno" class="far fa-star"></i><i id="dos" class="far fa-star"></i><i id="tres" class="far fa-star"></i><i id="cuatro" class="far fa-star"></i><i id="cinco" class="far fa-star"></i></span></li>`;
            nuevos.push(nuevaTec);
            tecnologias.append(nuevaTec);
            i++;
            console.log(i, nuevos);
        }
    })
    agregarOtrasHabilidades.addEventListener('click', () => {
        const userInput = prompt('Que otra habilidad posees?');
        if (userInput === null) {
            console.log('cancelado');
        } else {
            let nuevaHab = document.createElement('div');
            nuevaHab.setAttribute('id', `habilidad${i}`);
            // nuevaHab.setAttribute('onclick', `remove('habilidad',${i})`);
            nuevaHab.innerHTML += `
            <label onclick="remove('habilidad',${i})"style="display: inline-block; width: 40%; color: black; cursor: no-drop;" for="${userInput}">${userInput}</label>
                            <input style="display: inline-block; width: 50%;" type="checkbox" name="${userInput}" id="${userInput}" checked>
            `;
            nuevos.push(nuevaHab);
            otrasHabilidades.append(nuevaHab);
            i++;
            console.log(i, nuevos);
        }
    })

    function remove(tipo, id) {
        const dataToRemove = tipo + id;
        console.log(dataToRemove);
        let remove = document.querySelector(`#${dataToRemove}`);
        console.log(remove);
        remove.remove();
    }
}
if (competencias) {
    //Agregando Idiomas
    let list = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];
    let idiomas;
    let alreadyClick = false;
    list.forEach(function(element) {
        document.getElementById(element).addEventListener("click", function() {
            console.log(element);
            switch (element) {
                case 'cinco':
                    list.forEach(element => {
                        document.getElementById(element).classList.add('fa');
                        document.getElementById(element).classList.remove('far');
                    });
                    result = 'cinco';
                    break;
                case 'cuatro':
                    list.forEach(element => {
                        document.getElementById(element).classList.add('fa');
                        document.getElementById(element).classList.remove('far');
                        if (element === 'cinco') {
                            document.getElementById(element).classList.add('far');
                            document.getElementById(element).classList.remove('fa');
                        }
                    });
                    result = 'cuatro';
                    break;
                case 'tres':
                    list.forEach(element => {
                        document.getElementById(element).classList.add('fa');
                        document.getElementById(element).classList.remove('far');
                        if (element === 'cinco' || element === 'cuatro') {
                            document.getElementById(element).classList.add('far');
                            document.getElementById(element).classList.remove('fa');
                        }
                    });
                    result = 'tres';
                    break;
                case 'dos':
                    list.forEach(element => {
                        document.getElementById(element).classList.add('far');
                        document.getElementById(element).classList.remove('fa');
                        if (element === 'dos' || element === 'uno') {
                            document.getElementById(element).classList.add('fa');
                            document.getElementById(element).classList.remove('far');
                        }
                    });
                    result = 'dos';
                    break;
                case 'uno':
                    if (alreadyClick === false) {
                        list.forEach(element => {
                            document.getElementById(element).classList.add('far');
                            document.getElementById(element).classList.remove('fa');
                            if (element === 'uno') {
                                document.getElementById(element).classList.add('fa');
                                document.getElementById(element).classList.remove('far');
                            }
                        });
                        result = 'uno';
                        alreadyClick = true;
                    } else {
                        list.forEach(element => {
                            document.getElementById(element).classList.add('far');
                            document.getElementById(element).classList.remove('fa');
                            alreadyClick = false;
                            result = 0;
                        });
                    }
                    break;
                default:
                    break;
            }
        });
    });
}

/* EDITAR PERFIL */
const editarPersonales = document.querySelector('#editarPersonales');
const editarFormacion = document.querySelector('#editarFormacion');
const editarCompetencias = document.querySelector('#editarCompetencias');
const editarExperiencias = document.querySelector('#editarExperiencias');
const editarObjetivos = document.querySelector('#editarObjetivos');
const idPersonales = [];

/* MOVER ENTRE PAGINAS PERFIL */
const vacantesBtn = document.querySelector('#vacantesBtn');
const vacantes = document.querySelector('#vacantes');
const misPracticasBtn = document.querySelector('#misPracticasBtn');
const misPracticas = document.querySelector('#misPracticas');
const postulacionesBtn = document.querySelector('#postulacionesBtn');
const postulaciones = document.querySelector('#postulaciones');

if (vacantes && misPracticas) {
    vacantesBtn.addEventListener('click', () => {
        vacantes.classList.remove('hide');
        misPracticas.classList.add('hide');
        postulaciones.classList.add('hide');
    });
    misPracticasBtn.addEventListener('click', () => {
        vacantes.classList.add('hide');
        misPracticas.classList.remove('hide');
        postulaciones.classList.add('hide');
    });
    postulacionesBtn.addEventListener('click', () => {
        vacantes.classList.add('hide');
        misPracticas.classList.add('hide');
        postulaciones.classList.remove('hide');
    });
}