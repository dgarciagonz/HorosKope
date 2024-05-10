//Creacion de publicaciones

    //Creamos las variables con los datos 
const contenidoPost = document.getElementById('contenidoPost');
const contador = document.getElementById('contador');
let btnCrearPost = document.getElementById('btnCrearPost');

    //Llamamos al event listener para el evento
contenidoPost.addEventListener('input', function () {

    //Cuenta la cantidad de caracteres actuales
    let contadorActual = contenidoPost.value.length;

    //Cuando el numero de caracteres pasa del limite, corta a partir del caracter 500 no permitiendo mas
    if (contadorActual > 500) {
        contenidoPost.value = contenidoPost.value.slice(0, 500);
        contadorActual = 500;
    }
    contador.textContent = contadorActual + '/500';

    //Si no hay caracteres, no permite presionar el botón
    if (contadorActual > 0) {
        btnCrearPost.disabled = false;
    } else {
        btnCrearPost.disabled = true;
    }

});




//Busqueda
    
//Creamos las variables con los datos 
const btnBuscar = document.getElementById('buscador');
const contenidoBusqueda = document.getElementById('contenidoBusqueda');

    //Llamamos al event listener para el evento
contenidoBusqueda.addEventListener('input', function () {
    let contadorBusqueda = contenidoBusqueda.value.length;

    //Si no hay caracteres, no permite presionar el botón
    if (contadorBusqueda > 0) {
        btnBuscar.disabled = false;
    } else {
        btnBuscar.disabled = true;
    }
});

const btnBuscar2 = document.getElementById('buscador2');
const contenidoBusqueda2 = document.getElementById('contenidoBusqueda2');

    //Llamamos al event listener para el evento
    contenidoBusqueda2.addEventListener('input', function () {
        let contadorBusqueda2 = contenidoBusqueda2.value.length;
    
        //Si no hay caracteres, no permite presionar el botón
        if (contadorBusqueda2 > 0) {
            btnBuscar2.disabled = false;
        } else {
            btnBuscar2.disabled = true;
        }
    });