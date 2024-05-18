let btnPost = document.getElementById('texto_posts');
let btnComent = document.getElementById('texto_comments');
let btnLike = document.getElementById('texto_likes');


function mostrarPo(elemento1, elemento2,elemento3) {
    let bloquePublis = document.getElementById(elemento1);
    let bloqueComentarios= document.getElementById(elemento2);
    let bloqueLikes= document.getElementById(elemento3);

        bloquePublis.style.display = "block";
        bloqueComentarios.style.display = "none";
        bloqueLikes.style.display = "none";
        btnPost.classList.add('btnActivado');
        btnComent.classList.remove('btnActivado');
        btnLike.classList.remove('btnActivado');

    
}



function mostrarCo(elemento1, elemento2,elemento3) {
    let bloqueComentarios = document.getElementById(elemento1);
    let bloquePosts = document.getElementById(elemento2);
    let bloqueLikes = document.getElementById(elemento3);
   
        bloqueComentarios.style.display = "block";
        bloquePosts.style.display = "none";
        bloqueLikes.style.display = "none";
        btnComent.classList.add('btnActivado');
        btnPost.classList.remove('btnActivado');
        btnLike.classList.remove('btnActivado');

}

function mostrarLi(elemento1, elemento2,elemento3) {
    let bloqueLikes = document.getElementById(elemento1);
    let  bloqueComentarios= document.getElementById(elemento2);
    let bloquePosts = document.getElementById(elemento3);
   
        bloqueLikes.style.display = "block";
        bloqueComentarios.style.display = "none";
        bloquePosts.style.display = "none";
        btnLike.classList.add('btnActivado');
        btnComent.classList.remove('btnActivado');
        btnPost.classList.remove('btnActivado');

}

function generarNumerosAleatorios() {
    // Genera tres números aleatorios entre 0 y 100
    var numero1 = Math.floor(Math.random() * 101);
    var numero2 = Math.floor(Math.random() * 101);
    var numero3 = Math.floor(Math.random() * 101);

    // Aplica los números aleatorios a las barras de progreso
    document.querySelectorAll('.progress-bar')[0].style.width = numero1 + '%';
    document.querySelectorAll('.progress-bar')[1].style.width = numero2 + '%';
    document.querySelectorAll('.progress-bar')[2].style.width = numero3 + '%';
}

// Llama a la función al cargar la página
window.onload = function() {
    generarNumerosAleatorios();
};