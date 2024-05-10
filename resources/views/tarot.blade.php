<x-app-layout>
<div class="container ">
    <div class="row ">
        <!-- Tarjeta 1: Formulario de pregunta -->
        <div class="col-md-4 mt-5">
            <div class="card h-100">
            <h5 class="card-title mb-0 pt-3 text-center">Tirada de Si o No</h5>
                <div class="card-body">
                    <form class=" d-flex flex-column justify-content-around h-100" method="POST" action="{{ route('pregunta', ['pregunta' => 'texto']) }}">
                        @csrf
                        
                            <input type="text" name="pregunta" class="form-control text-center" placeholder="Ingrese su pregunta">
                            
                            <button type="submit" class="btn btn-primary ">Realizar pregunta</button>
                            
                        
                    </form>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2: Botones para tipos de tirada -->
        <div class="col-md-4 mt-5">
            <div class="card h-100">
            <h5 class="card-title mb-0 pt-3 text-center">Tirada tematica</h5>
                <div class="card-body">
                    <div class=" d-flex flex-column justify-content-around h-100" >
                        <a href="{{ route('tirada', ['valor' => 'amor']) }}" class="btn btn-danger">Amor</a>
                        <a href="{{ route('tirada', ['valor' => 'dinero']) }}" class="btn btn-warning">Dinero</a>
                        <a href="{{ route('tirada', ['valor' => 'salud']) }}" class="btn btn-success">Salud</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3: Formulario de solicitud de cita -->
        <div class="col-md-4 mt-5">
            <div class="card h-100">
            <h5 class="card-title mb-0 pt-3 text-center">Cita con pitonisa</h5>
                <div class="card-body">
                    <form action="{{ route('solicitar-cita') }}" method="POST">
                        @csrf

                        <label for="fecha">Selecciona una fecha para tu cita:</label>
                        <select name="fecha" id="fecha" class="form-control">
                            @foreach ($fechas as $fecha)
                                <option value="{{ $fecha['dia'] }}">{{ $fecha['dia'] }}</option>
                            @endforeach
                        </select>
                        <label for="pitonisa">Pitonisa:</label>
                        <select name="pitonisa" id="pitonisa" class="form-control">
                            @foreach ($pitonisas as $pitonisa)
                                <option value="{{ $pitonisa->id_usuario }}">{{ $pitonisa->username }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary mt-3">Solicitar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
