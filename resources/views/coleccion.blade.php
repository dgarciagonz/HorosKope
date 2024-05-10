

<x-app-layout>
@if($cartas->isEmpty())
<div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="text-center">Todavia no tienes ninguna carta en tu colección</p>
                    <button class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ route('tarot') }}'">Realizar una tirada</button>
                </div>
            </div>
        </div>
@else
    <div class="container">
        <h1 class="text-center">Cartas en tu Colección</h1>
        <div class="row d-flex justify-content-center">
            @foreach($cartas as $carta)
                <div class="col-5  col-md-3 mb-4">
                    <div class="card carta">
                        <img src="{{ asset($carta->imagen) }}" alt="{{ $carta->nombre }}" style="max-width: 100%; max-height: 520px;" class="card-img-top" data-bs-toggle="modal" data-bs-target="#cartaModal{{ $carta->id_carta }}">
                        <div class="card-body">
                            <h5 class=" text-center" data-bs-toggle="modal" data-bs-target="#cartaModal{{ $carta->id_carta }}">{{ $carta->nombre }}</h5>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="cartaModal{{$carta->id_carta}}" tabindex="-1" aria-labelledby="cartaModal{{$carta->id_carta}}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header emergente textoB d-flex">
                                <h5 class="modal-title" id="cartaModal{{$carta->id_carta}}Label">{{$carta->nombre}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6  d-flex justify-content-center align-items-center">
                                        <img src="{{ asset($carta->imagen) }}" alt="{{$carta->nombre}}" class="img-fluid mb-3" style="max-width: 75%; height: auto;">
                                    </div>
                                    <div class="col-md-6 ">
                                        <h3>Significado</h3>
                                        <p class="textoCarta">{{$carta->significado}}</p>
                                        <h3>Amor</h3>
                                        <p class="textoCarta">{{$carta->amor}}</p>
                                        <h3>Dinero</h3>
                                        <p class="textoCarta">{{$carta->dinero}}</p>
                                        <h3>Salud</h3>
                                        <p class ="textoCarta">{{$carta->salud}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endif
</x-app-layout>