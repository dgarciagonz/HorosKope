const pitonisas = document.getElementById('pitonisa');
const fechas = document.getElementById('fecha');
const botoncito = document.getElementById('guardarCita');

if(pitonisas!=null){
pitonisas.addEventListener('change', function() {
    const pitonisa = this.value;
    botoncito.disabled = false;
    //Solicitud AJAX
    fetch(`/fechas-disponibles/${pitonisa}`)
        .then(response => response.json())
        .then(data => {
            // Limpiar las opciones anteriores
            fechas.innerHTML = '';

            // Agregar las nuevas opciones de fecha
            data.forEach(fecha => {
                const nuevaFecha = document.createElement('option');
                nuevaFecha.value = fecha.dia;
                nuevaFecha.textContent = fecha.dia;
                fechas.appendChild(nuevaFecha);
            });
        })
        .catch(error => console.error('Error al obtener fechas disponibles:', error));
});
}

//Para que una pitonisa pueda cambiar sus citas:
const pitonisaAct= document.getElementById('pitonisaAct')
const fechasPitonisaAct = document.getElementById('fechaP');

if(pitonisaAct!=null){
    const pitonisa2 = pitonisaAct.value;

    fetch(`/fechas-disponibles/${pitonisa2}`)
            .then(response => response.json())
            .then(data => {

                fechasPitonisaAct.innerHTML = '';

                data.forEach(fecha => {
                    const nuevaFechas = document.createElement('option');
                    nuevaFechas.value = fecha.dia;
                    nuevaFechas.textContent = fecha.dia;
                    fechasPitonisaAct.appendChild(nuevaFechas);
                });
            })
            .catch(error => console.error('Error al obtener fechas disponibles:', error));
}