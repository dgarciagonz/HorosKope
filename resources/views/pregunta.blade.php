<x-app-layout>
<div class="container-fluid fondoPregunta">
    <h2 class="text-center pt-3 textoB">{{ $pregunta }}</h2>
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
        <img src="{{ asset($carta->imagen) }}" alt="{{ $carta->nombre }}" class="img-fluid" style="max-width: 300px;">
        </div>
        <div class="col-md-3 d-flex h-100 flex-column justify-content-around p-3 ">
                <h2 class="text-center textoB fw-bold">{{ $carta->nombre }}</h2>
                <h4 class="text-center textoB">La respuesta a tu pregunta es</h4>
                @if($carta->posNeg == 1)
                    <h1 class="text-center  fw-bold pos">Sí</h1>
                @elseif($carta->posNeg == 0)
                    <h1 class="text-center fw-bold neg">No</h1>
                @else
                    <h1 class="text-center text-secondary fw-bold">No hay respuesta temporalmente</h1>
                @endif
                <div class="d-flex flex-column align-items-center">
                    <form method="POST" action="/horoskope">
                        @method('POST')
                        @csrf
                            <textarea class="form-control w-0" id="contenidoPost" name="nuevoPost" style="resize:none" hidden>
                        Mi tirada de pregunta '{{ $pregunta }}' me ha devuelto la carta de {{ $carta->nombre }} que significa 
                        @if($carta->posNeg == 1) un sí
                        @elseif($carta->posNeg == 0) un no
                        @else
                         que no hay respuesta temporalmente
                        @endif
                        
                        </textarea>
                        <button type="submit" class="btn color-boton mt-5 p-3 ">Compartir</button>
                    </form>
                </div>

        </div>
        <div class="d-none  col-md-4  d-md-flex justify-content-center align-items-center ">
        <img src="{{ asset($carta->imagen) }}" alt="{{ $carta->nombre }}" class="img-fluid" style="max-width: 300px;">
        </div>
    </div>
</div>
</x-app-layout>

