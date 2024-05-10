function mostrarPe(elemento1, elemento2) {
    let bloquePerfil= document.getElementById(elemento1);
    let bloquePublis = document.getElementById(elemento2);
    let btnPerfil = document.getElementById('texto_perfiles');
    let btnPost = document.getElementById('texto_posts');

   
        bloquePerfil.style.display = "block";
        bloquePublis.style.display = "none";
        btnPerfil.classList.add('btnActivado');
        btnPost.classList.remove('btnActivado');

    
}

function mostrarPo(elemento1, elemento2) {
    let bloquePublis = document.getElementById(elemento1);
    let bloquePerfil = document.getElementById(elemento2);
    let btnPerfil = document.getElementById('texto_perfiles');
    let btnPost = document.getElementById('texto_posts');
   
        bloquePublis.style.display = "block";
        bloquePerfil.style.display = "none";
        btnPost.classList.add('btnActivado');
        btnPerfil.classList.remove('btnActivado');

}

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

