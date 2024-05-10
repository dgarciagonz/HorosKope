<x-app-layout>
    <div class="container-fluid {{ $valor }}">
        <div class="row justify-content-center align-items-center pt-5">
        <h3 class="text-center fw-bold tit">Tirada de {{ $valor }}</h3>
            @foreach($cartas as $index => $carta)
            <div class="col-md-4 pt-3 text-center mb-5">
                <div class="d-flex justify-content-center align-items-center mb-4" style="max-height: 520px;">
                    <img src="{{ asset($carta->imagen) }}" alt="{{ $carta->nombre }}" class="img-fluid mb-4" style="max-width: 200px; max-height: 520px;">
                </div>
                <h3 class="mb-2 tit fw-bold">{{ $carta->nombre }}</h3>
                <p class="textoB">{{ $significados[$index] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
