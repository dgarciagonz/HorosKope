<x-app-layout>
<div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="row d-flex bg-primary flex-row jutify-between items-center w-100 m-2 rounded">
                        @foreach($signos as $signo)
                        <div class="col-3 d-flex justify-center items-center ">
                            <button 
                                class="btn h-100 w-100 text-center btn-primary rounded signo" value='signo-{{$signo->id_signo}}'> 
                                {{ $signo->nombre }}
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row">
                <div class="col-4">
                    @foreach($diarios as $diario)
                    
                        <div class=" p-2 card signo-{{$diario->signo}}" style=" display:none; min-height: 40vh;">
                            <div class="card-body">
                                <h5 class="card-title">Horóscopo diario</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$diario->fecha}}</h6>
                                <p class="card-text textoCarta">{{$diario->descripcion}}</p>
                            </div>
                        </div>

                    @endforeach
                </div>

                <div class="col-4">
                    @foreach($semanales as $semanal)
                    <div class="p-2 card signo-{{$semanal->signo}}" style=" display:none; min-height: 40vh;">
                        <div class="card-body">
                            <h5 class="card-title">Horóscopo semanal</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$semanal->fecha}}</h6>
                            <p class="card-text textoCarta">{{$semanal->descripcion}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-4">
                    @foreach($mensuales as $mensual)
                    <div class="p-2 card signo-{{$mensual->signo}}" style=" display:none; min-height: 40vh;">
                        <div class="card-body">
                            <h5 class="card-title">Horóscopo mensual</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$mensual->fecha}}</h6>
                            <p class="card-text textoCarta">{{$mensual->descripcion}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

@if(Auth::user()->rol == 'pitonisa')
<div class="row d-flex justify-center items-center w-100 mt-5">
                <div class="col-12 d-flex justify-center items-center ">
                    <form id="nuevoHoroscop" action="{{ route('nuevoHoroscopo')}}" method="POST">
                        @csrf
                        <button type="button" data-bs-toggle="modal" data-bs-target="#nuevoHoroscopo" class="btn btn-secondary">Añadir horoscopo</button>

                            <div class="modal fade" id="nuevoHoroscopo" tabindex="-1" aria-labelledby="nuevoHoroscopo" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="crearPublicacionModalLabel">Nuevo Horoscopo</h5>
                                                                        </div>
                                                                        <div class="modal-body text-start">

                                                                        <div class="col-12 d-flex justify-content-around">  
                                                                            <div class="col-5">
                                                                                    <label for="signo">Selecciona un signo:</label>
                                                                                    <select name="signo" id="signo" class="form-control">
                                                                                        @foreach ($signos as $signo)
                                                                                            <option value="{{ $signo->id_signo }}">{{ $signo->nombre }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-5">
                                                                                <label for="tipo">Selecciona el tipo:</label>
                                                                                    <select name="tipo" id="tipo" class="form-control">
                                                                                            <option value="diario">Diario</option>
                                                                                            <option value="semanal">Semanal</option>   
                                                                                            <option value="mensual">Mensual</option>        
                                                                                    </select>
                                                                                </div>
                                                                            </div>  
                                                                        <div class="col-12 pt-2">
                                                                        <label for="descripcion">Selecciona el tipo:</label>
                                                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="10" maxlength="500" style="resize:none" required></textarea>
                                                                        </div>
                                                                    </div>      
                                                                        
                                                                        
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-success">Añadir Horoscopo</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                    </form>
            </div>
        </div>
</div>

@endif
    <script src="{{ asset('/js/verHoroscopo.js') }}"></script>

</x-app-layout>
