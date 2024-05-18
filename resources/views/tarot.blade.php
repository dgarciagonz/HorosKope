<x-app-layout>
<div class="container ">
    <div class="row ">
        <!-- Tarjeta 1: Formulario de pregunta -->
        <div class="col-md-4 mt-5 d-flex wow animate__animated animate__bounceInDown">
            <div class="card cartaOpcion fondoCarta1 w-100">
                <div class="card-body cuerpoTarjeta w-100">
                <h3 class="card-title mb-0 pt-3 text-center mb-5 ">Tirada de Si o No</h3>

                    <form class=" d-flex flex-column justify-content-center h-100" method="POST" action="{{ route('pregunta', ['pregunta' => 'texto']) }}">
                        @csrf
                        
                            <input type="text" name="pregunta" class="form-control w-75 m-5 p-2 text-center" placeholder="Ingrese su pregunta">
                            
                            <button type="submit" class="btn color-boton m-5  p-3">Realizar pregunta</button>
                            
                        
                    </form>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2: Botones para tipos de tirada -->

        

        <div class="col-md-4 mt-5 d-flex wow animate__animated animate__bounceInDown" data-wow-delay="0.2s">
            <div class="card cartaOpcion fondoCarta2 w-100">
                
                <div class="card-body cuerpoTarjeta w-100">
                <h3 class="card-title mb-0 pt-3 text-center mb-5">Tirada tematica</h3>
                    <div class=" d-flex flex-column justify-content-around h-100" >
                        <a href="{{ route('tirada', ['valor' => 'amor']) }}" class="btn btn-danger p-3 m-2">Amor</a>
                        <a href="{{ route('tirada', ['valor' => 'dinero']) }}" class="btn btn-warning p-3 m-2">Dinero</a>
                        <a href="{{ route('tirada', ['valor' => 'salud']) }}" class="btn btn-success p-3 m-2">Salud</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3: Formulario de solicitud de cita -->
        <div class="col-md-4 mt-5 d-flex wow animate__animated animate__bounceInDown" data-wow-delay="0.5s">
            <div class="card cartaOpcion fondoCarta3 w-100">
                <div class="card-body cuerpoTarjeta w-100">
                <h3 class="card-title mb-0 pt-3 text-center mb-5">Cita con pitonisa</h3>

                    <form action="{{ route('solicitar-cita') }}" method="POST">
                        @csrf

                        <select name="pitonisa" id="pitonisa" class="form-control mb-3">
                            <option value="" disabled selected>Seleccione una pitonisa</option>
                            @foreach ($pitonisas as $pitonisa)
                                <option value="{{ $pitonisa->id_usuario }}">{{ $pitonisa->username }}</option>
                            @endforeach
                        </select>

                        <select name="fecha" id="fecha" class="form-control">
                            <option value="" disabled selected>Seleccione una fecha disponible</option>
                        </select>
                       

                        <button type="submit" id="guardarCita"class="btn color-boton mt-5 w-100  p-3" disabled>Solicitar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="{{ asset('/js/fechas.js') }}"></script>

</x-app-layout>
