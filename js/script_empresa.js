/* MOVER ENTRE PAGINAS PERFIL */
const vacantesBtn = document.querySelector('#vacantesBtn');
const vacantes = document.querySelector('#vacantes');
const misPracticasBtn = document.querySelector('#misPracticasBtn');
const misPracticas = document.querySelector('#misPracticas');
const postulacionesBtn = document.querySelector('#postulacionesBtn');
const postulaciones = document.querySelector('#postulaciones');
const misProyectosBtn = document.querySelector('#misProyectosBtn');
const misProyectos = document.querySelector('#misProyectos');
const main_areaBtn = document.querySelector('#main_areaBtn');
const main = document.querySelector('#main_area');

if (vacantes && misPracticas) {
    main_areaBtn.addEventListener('click', () => {
        main.classList.remove('hide');
        vacantes.classList.add('hide');
        misPracticas.classList.add('hide');
        postulaciones.classList.add('hide');
        misProyectos.classList.add('hide');
    });
    vacantesBtn.addEventListener('click', () => {
        main.classList.add('hide');
        vacantes.classList.remove('hide');
        misPracticas.classList.add('hide');
        postulaciones.classList.add('hide');
        misProyectos.classList.add('hide');
    });
    misPracticasBtn.addEventListener('click', () => {
        main.classList.add('hide');
        vacantes.classList.add('hide');
        misPracticas.classList.remove('hide');
        postulaciones.classList.add('hide');
        misProyectos.classList.add('hide');
    });
    postulacionesBtn.addEventListener('click', () => {
        main.classList.add('hide');
        vacantes.classList.add('hide');
        misPracticas.classList.add('hide');
        postulaciones.classList.remove('hide');
        misProyectos.classList.add('hide');
    });

    misProyectosBtn.addEventListener('click', () => {
        main.classList.add('hide');
        vacantes.classList.add('hide');
        misPracticas.classList.add('hide');
        postulaciones.classList.add('hide');
        misProyectos.classList.remove('hide');
    });

}