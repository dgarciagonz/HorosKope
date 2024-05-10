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
        </div>
        <div class="d-none  col-md-4  d-md-flex justify-content-center align-items-center ">
        <img src="{{ asset($carta->imagen) }}" alt="{{ $carta->nombre }}" class="img-fluid" style="max-width: 300px;">
        </div>
    </div>
</div>
</x-app-layout>

