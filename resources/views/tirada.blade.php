<x-app-layout>
@php
    $primer = 0.2;
    $primerTexto = 0.6; 
    $retraso = 0.3; 
@endphp
    <div class="container-fluid {{ $valor }}">
        <div class="row justify-content-center align-items-center pt-5">
        <h3 class="text-center fw-bold tit">Tirada de {{ $valor }}</h3>
            @foreach($cartas as $index => $carta)
            @php
                $delay = $primer + ($loop->index * $retraso);
                $delayTexto = $primerTexto + ($loop->index * $retraso);
            @endphp
            <div class="col-md-4 pt-3 text-center mb-2">
                <div class="d-flex justify-content-center align-items-center mb-4 wow animate__animated animate__bounceInUp" data-wow-delay="{{$delay}}s" data-wow-duration="1s" style="max-height: 520px;">
                    <img src="{{ asset($carta->imagen) }}" alt="{{ $carta->nombre }}" class="img-fluid mb-4" style="max-width: 200px; max-height: 520px;">
                </div>
                <h3 class="mb-2 tit fw-bold wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="{{$delayTexto}}s">{{ $carta->nombre }}</h3>
                <p class="textoB wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="{{$delayTexto}}s">{{ $significados[$index] }}</p>
            </div>
            
            @endforeach

            <div class="d-flex flex-column align-items-center">
                    <form method="POST" action="/horoskope">
                        @method('POST')
                        @csrf
                            <textarea class="form-control w-0" id="contenidoPost" name="nuevoPost" style="resize:none" hidden>
                        Mi tirada de {{ $valor }} me ha devuelto estas cartas:
                        
                        @foreach($cartas as $index => $carta)
                        {{ $carta->nombre }} ,
                        @endforeach
                        
                        
                        
                        </textarea>
                        <button type="submit" class="btn color-boton2 mt-1 mb-5 p-3 wow animate__animated animate__fadeIn"  data-wow-delay="2.5s">Compartir</button>
                    </form>
                </div>
        </div>
    </div>
</x-app-layout>
