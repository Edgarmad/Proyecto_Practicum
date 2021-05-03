/*VARIABLES DE INTERFAZ DEL REGISTRO DE LAS EMPRESAS*/
const continuarRegistroEmpresa = document.querySelector("#continuarRegistroEmpresa");
const regresarEmpresa = document.querySelector('#regresarEmpresa');
const datosPersonalesResponsable = document.querySelector("#datosPersonalesResponsable");
const datosEmpresa = document.querySelector('#datosEmpresa');
const otrosDatos = document.querySelector("#otrosDatos");
const titulo = document.querySelector('#titPagRegistroEmpresa');
const tituloDos = document.querySelector('#titDosPagRegistroEmpresa');
const información = document.querySelector('#InfPagRegistroEmpresa');
const numeracion = document.querySelector('#numPagRegistroEmpresa');

/* EDITAR INFORMACIÓN EMPRESAS */
const editarPersonales = document.querySelector('#editDatosPersonalesEmpresa');
const editarEmpresa = document.querySelector('#editDatosEmpresa');
const editarOtros = document.querySelector('#editarOtros');
const idPersonales = ['nombreResponsable', 'apellidoResponsable', 'correoResponsable', 'telefonoResponsable'];
const idEmpresa = ['nombreEmpresa', 'ciudadEmpresa', 'correoEmpresa', 'telefonoEmpresa', 'direccionEmpresa'];
const idOtros = ['descripcionEmpresa', 'deseoAlumnoEmpresa'];

/* RESPONSIVO */
const burger = document.querySelector("#burger-menu");
const dash = document.querySelectorAll(".accion");

/* EDITAR EN RESULTADOS */
if (editarPersonales) {
    function editar(dato, ids) {
        dato.addEventListener('click', () => {
            ids.forEach(element => {
                document.getElementById(element).toggleAttribute('disabled');
                // element.removeAttribute('disabled');
            });
        });
    }
    editar(editarPersonales, idPersonales);
    editar(editarEmpresa, idEmpresa);
    editar(editarOtros, idOtros);
}


/* IMAGEN PREVIEW */
const imgInputEmpresa = document.querySelector("#imgInputEmpresa");
const imgLoadEmpresa = document.querySelector("#imgLoadEmpresa");

if (imgInputEmpresa && imgLoadEmpresa) {
    function defaultBtnActive() {
        imgInputEmpresa.click();
    }
    imgInputEmpresa.addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                const result = reader.result;
                imgLoadEmpresa.src = result;
            }
            reader.readAsDataURL(file);
        }
        console.log(file)
    });
}

/* CAMBIO DE PAGINAS EN EL REGISTRO */
if (continuarRegistroEmpresa && regresarEmpresa) {
    let cont = 0;
    continuarRegistroEmpresa.addEventListener('click', () => {
        switch (cont) {
            case 0:
                datosPersonalesResponsable.classList.add('hide');
                datosEmpresa.classList.remove('hide');
                regresarEmpresa.textContent = 'Volver D. Responsable';
                titulo.textContent = 'Información de la Empresa';
                tituloDos.textContent = '¡Se parte de la formación de nuestros alumnos!';
                información.textContent = 'Registra tu empresa. Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '02/03';
                cont++;
                break;
            case 1:
                datosEmpresa.classList.add('hide');
                otrosDatos.classList.remove('hide');
                titulo.textContent = 'Otros Datos';
                tituloDos.textContent = '¡Ya casi terminas!';
                información.textContent = 'Descripción de tu empresa e intereses. Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '03/03';
                continuarRegistroEmpresa.textContent = 'Completar';
                regresarEmpresa.textContent = 'Volver D. Empresa';
                cont++;
                break;
            case 2:
                continuarRegistroEmpresa.setAttribute('href', 'resultadoEmpresa.php');
                cont = 2;
                break;
            default:
                break;
        }
    })
    regresarEmpresa.addEventListener('click', () => {
        switch (cont) {
            case 0:
                cont = 0;
                regresarEmpresa.setAttribute('href', 'index.php');
                regresarEmpresa.textContent = '';
                break;
            case 1:
                datosEmpresa.classList.add('hide');
                datosPersonalesResponsable.classList.remove('hide');
                regresarEmpresa.textContent = 'Volver a página de principal';
                titulo.textContent = 'Información Personal del Responsable';
                tituloDos.textContent = '¡Bienvenido!';
                información.textContent = 'Para empezar es momento de registrar tu información personal como responsable de tu empresa. Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '01/03';
                cont--;
                break;
            case 2:
                otrosDatos.classList.add('hide');
                datosEmpresa.classList.remove('hide');
                continuarRegistroEmpresa.textContent = 'Continuar';
                regresarEmpresa.textContent = 'Volver D. Responsable';
                titulo.textContent = 'Información de la Empresa';
                tituloDos.textContent = '¡Se parte de la formación de nuestros alumnos!';
                información.textContent = 'Registra tu empresa. Por favor, asegúrate de que tus datos sean correctos y estén completos.';
                numeracion.textContent = '02/03';
                cont--;
                break;
            default:
                break;
        }
    })
}
/* RESPONSIVO */
if (burger && dash) {
    burger.addEventListener('click', () => {
        dash.forEach(element => {
            if (element.className == 'accion') {
                element.className += ' responsive'
            } else {
                element.className = 'accion'
            }
        });
    })
}
/* MOVER ENTRE PAGINAS PERFIL */
const vacantesBtn = document.querySelector('#vacantesBtn');
const vacantes = document.querySelector('#vacantes');
const postuladosBtn = document.querySelector('#postuladosBtn');
const postulados = document.querySelector('#postulados');
const practicantesBtn = document.querySelector('#practicantesBtn');
const practicantes = document.querySelector('#practicantes');

if (vacantes && postulados) {
    vacantesBtn.addEventListener('click', () => {
        vacantes.classList.remove('hide');
        postulados.classList.add('hide');
        practicantes.classList.add('hide');
    });
    postuladosBtn.addEventListener('click', () => {
        vacantes.classList.add('hide');
        postulados.classList.remove('hide');
        practicantes.classList.add('hide');
    });
    practicantesBtn.addEventListener('click', () => {
        vacantes.classList.add('hide');
        postulados.classList.add('hide');
        practicantes.classList.remove('hide');
    });
}

/* Boton de rechazar*/
const rechazarbtn = document.getElementById('rechazar');
const seccion1 = document.getElementById('seccion1');
function rechazar(){
    rechazarbtn.addEventListener('click', () =>{
        seccion1.classList.add('hide');
    });
}
/* Boton de aceptar */
const aceptarbtn = document.getElementById('aceptar');
const seccion2 = document.getElementById('seccion2');
function aceptar(){
    aceptarbtn.addEventListener('click', () =>{
        seccion2.classList.add('hide');
    });
}
// editarPersonales.addEventListener('click', () => {
//     idPersonales.forEach(element => {
//         document.getElementById(element).toggleAttribute('disabled');
//         // element.removeAttribute('disabled');
//     });
// });
// editarEmpresa.addEventListener('click', () => {
//     idEmpresa.forEach(element => {
//         document.getElementById(element).toggleAttribute('disabled');
//         // element.removeAttribute('disabled');
//     });
// });
// editarOtros.addEventListener('click', () => {
//     idOtros.forEach(element => {
//         document.getElementById(element).toggleAttribute('disabled');
//         // element.removeAttribute('disabled');
//     });
// });