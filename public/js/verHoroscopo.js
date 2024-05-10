
document.addEventListener('DOMContentLoaded', function () {
    const botonesSigno = document.querySelectorAll('.signo');
    const tarjetas = document.querySelectorAll('.card');

    botonesSigno.forEach(function (boton) {
        boton.addEventListener('click', function () {
            // Oculta todas las tarjetas
            tarjetas.forEach(function (tarjeta) {
                tarjeta.style.display = 'none';
            });

            // Muestra solo las tarjetas asociadas con el signo del botón
            const signo = boton.value;
            const tarjetasSigno = document.querySelectorAll('.' + signo);
            tarjetasSigno.forEach(function (tarjetaSigno) {
                tarjetaSigno.style.display = 'block';
            });
        });
    });
});