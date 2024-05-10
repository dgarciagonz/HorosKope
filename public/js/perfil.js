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