<x-app-layout>
@if(Auth::user()->rol != 'admin')
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="text-center">No tienes permiso para acceder a esta página</p>
                </div>
            </div>
        </div>
@else

    @if($informes->IsEmpty())
    <div class="container pt-5">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <p class="text-center">Todavia no hay informes</p>
                    </div>
                </div>
            </div>
    @else
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Fecha y Hora</th>
                                <th>Publicacion</th>
                                <th>Usuario</th>
                                <th>Descripción</th>
                                <th>Solución</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($informes as $informe)
                            <tr>
                                <td>{{$informe->fecha_creacion}}</td>
                                @if($informe->id_comentario == null)
                                    <td>
            
                                    {{ $informe->id_publicacion }}
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#verPublicacion{{ $informe->id_publicacion }}">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #B197FC;"></i></button>

                                    <div class="modal fade" id="verPublicacion{{ $informe->id_publicacion }}" tabindex="-1" aria-labelledby="verPublicacion{{ $informe->id_publicacion }} Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-start">
                                                    
                                                    <div class="card ">
                                                        <div class="card-body rounded  publicacion">
                                                        <div class="d-flex align-items-center mb-1">
                                                            <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                                <img src="{{ asset($informe->publicacion->user->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                                            </div>
                                                            <h5 class="card-title mb-0 ms-2"><a href="{{ url('perfil/' . $informe->publicacion->user->username) }}" class="noSub">{{ $informe->publicacion->user->username }}</a></h5>
                                                        </div>
                                                            <p class="card-text ps-5 pe-5 ">{{ $informe->publicacion->contenido }}</p>
                                                            <div class="row align-items-center">
                                                                <div class="col-md-2 text-center">
                                                                    <p class="card-text">
                                                                        <p>
                                                                            <button type="submit">{{ $informe->publicacion->likes->count() }} <i class="fa-regular fa-heart" style="color: #B197FC;"></i></button>
                                                                        </p>
                                                                    </p>
                                                                </div>
                                                                
                                                                <div class="col-md-2 text-start">
                                                                    <p class="card-text">
                                                                        <button><i class="fa-regular fa-comment" style="color: #B197FC;"></i> {{ $informe->publicacion->comentarios->count() }} </button> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                @else
                                    <td>
                                    {{ $informe->id_comentario }}
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#verComentario{{ $informe->id_comentario }}">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #B197FC;"></i></button>

                                    <div class="modal fade" id="verComentario{{ $informe->id_comentario }}" tabindex="-1" aria-labelledby="verComentario{{ $informe->id_comentario }} Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-start">
                                                    
                                                    <div class="card ">
                                                        <div class="card-body rounded  publicacion">
                                                        <div class="d-flex align-items-center mb-1">
                                                            <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                                <img src="{{ asset($informe->comentario->user->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                                            </div>
                                                            <h5 class="card-title mb-0 ms-2"><a href="{{ url('perfil/' . $informe->comentario->user->username) }}" class="noSub">{{ $informe->comentario->user->username }}</a></h5>
                                                        </div>
                                                            <p class="card-text ps-5 pe-5 ">{{ $informe->comentario->contenido }}</p>
                                                            <div class="row align-items-center">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                                    </td>
                                @endif
                                <td>{{ $informe->user->username }}</td>
                                <td>{{ $informe->motivo }}</td>
                                @if($informe->solucion==null)
                                    @if($informe->id_comentario == null)

                                        <td>
                                            <form id="editar{{ $informe->id_reporte }}" action="{{ route('editarInformePublicacion', ['id_informe' => $informe->id_reporte]) }}" method="POST">
                                                    @csrf
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editainforme{{ $informe->id_reporte }}">
                                                    <i class="fa-solid fa-pencil" style="color: #B197FC;"></i></button>


                                                    <div class="modal fade" id="editainforme{{ $informe->id_reporte }}" tabindex="-1" aria-labelledby="editainforme{{ $informe->id_reporte }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body text-start">
                                                                        <p>Selecciona una solución para el informe:</p>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo0" value="Contenido común, omitido">
                                                                                <label class="form-check-label" for="motivo0">
                                                                                    Contenido común, omitir
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo1" value="Eliminación de contenido">
                                                                                <label class="form-check-label" for="motivo1">
                                                                                    Eliminar de contenido
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo2" value="Baneo de una semana">
                                                                                <label class="form-check-label" for="motivo2">
                                                                                    Baneo de una semana
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo3" value="Baneo de dos semanas">
                                                                                <label class="form-check-label" for="motivo3">
                                                                                    Baneo de dos semanas
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo4" value="Baneo de un mes">
                                                                                <label class="form-check-label" for="motivo4">
                                                                                    Baneo de un mes
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo5" value="Baneo de tres meses">
                                                                                <label class="form-check-label" for="motivo5">
                                                                                    Baneo de tres meses
                                                                                </label>
                                                                            </div> 
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="motivo" id="motivo6" value="Baneo permanente">
                                                                                <label class="form-check-label" for="motivo6">
                                                                                    Baneo permanente
                                                                                </label>
                                                                            </div>      
                                                                </div>
                                                                
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-danger">Enviar solución</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                    @else 
                                    <td>
                                        <form id="editarC{{ $informe->id_reporte }}" action="{{ route('editarInformeComentario', ['id_informe' => $informe->id_reporte]) }}" method="POST">
                                                        @csrf
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editainformeC{{ $informe->id_reporte }}">
                                                        <i class="fa-solid fa-pencil" style="color: #B197FC;"></i></button>


                                                        <div class="modal fade" id="editainformeC{{ $informe->id_reporte }}" tabindex="-1" aria-labelledby="editainformeC{{ $informe->id_reporte }}" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-start">
                                                                            <p>Selecciona una solución para el informe:</p>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo0" value="Contenido común, omitido">
                                                                                    <label class="form-check-label" for="motivo0">
                                                                                        Contenido común, omitir
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo1" value="Eliminación de contenido">
                                                                                    <label class="form-check-label" for="motivo1">
                                                                                        Eliminar de contenido
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo2" value="Baneo de una semana">
                                                                                    <label class="form-check-label" for="motivo2">
                                                                                        Baneo de una semana
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo3" value="Baneo de dos semanas">
                                                                                    <label class="form-check-label" for="motivo3">
                                                                                        Baneo de dos semanas
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo4" value="Baneo de un mes">
                                                                                    <label class="form-check-label" for="motivo4">
                                                                                        Baneo de un mes
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo5" value="Baneo de tres meses">
                                                                                    <label class="form-check-label" for="motivo5">
                                                                                        Baneo de tres meses
                                                                                    </label>
                                                                                </div> 
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo6" value="Baneo permanente">
                                                                                    <label class="form-check-label" for="motivo6">
                                                                                        Baneo permanente
                                                                                    </label>
                                                                                </div>      
                                                                    </div>
                                                                    
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-danger">Enviar solución</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>

                                    @endif

                                @else

                                <td>{{ $informe->solucion }}</td>

                                @endif
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    @endif    

@endif


</x-app-layout>