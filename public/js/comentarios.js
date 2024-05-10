//Mostrar el formulario
document.addEventListener('DOMContentLoaded', function () {
    const comentar = document.querySelectorAll('.comentario');

    comentar.forEach(btn => {
        btn.addEventListener('click', function () {
            const formId = this.getAttribute('data-target');
            const formComment = document.querySelector(formId);
            if (formComment.style.display === 'block') {
                formComment.style.display = 'none';
            } else {
                formComment.style.display = 'block';
            }
        });
    });
});


const formulariosComment = document.querySelectorAll('.form-comment');

// Itera sobre cada formulario de comentario
formulariosComment.forEach((formComment) => {
    const nuevoComment = formComment.querySelector('.nuevoComment');
    const contador2 = formComment.querySelector('.contador2');
    const btnguardarComment = formComment.querySelector('.btnguardarComment');

    // Llamamos al event listener para el evento input en el textarea
    nuevoComment.addEventListener('input', function () {
        // Cuenta la cantidad de caracteres actuales
        let contadorActual = nuevoComment.value.length;

        // Cuando el número de caracteres pasa del límite, corta a partir del carácter 500 no permitiendo más
        if (contadorActual > 500) {
            nuevoComment.value = nuevoComment.value.slice(0, 500);
            contadorActual = 500;
        }

        contador2.textContent = contadorActual + '/500';

        // Si no hay caracteres, deshabilita el botón de guardar comentario; de lo contrario, habilita el botón
        btnguardarComment.disabled = contadorActual === 0;
    });
});
