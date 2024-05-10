<x-app-layout>
<div class="container-fluid ">
<div class="row d-flex justify-content-around">
    <div class="col-md-10 pt-2 ">
        <div class="card border-0">
            <div class="card-body rounded publicacion">
                <div class="d-flex align-items-center mb-1">
                    <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                        <img src="{{ asset($publicacion->user->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                    </div>
                    <h5 class="card-title mb-0 ms-2"><a class="noSub" href="{{ url('perfil/' . $publicacion->user->username) }}">{{ $publicacion->user->username }}</a></h5>
                </div>
                <p class="card-text ps-5 pe-5">{{ $publicacion->contenido }}</p>

                @if($publicacion->media !=null)
                    <div class="row d-flex justify-content-center pt-2">
                        <div class="col-12">
                            <img src="{{ asset($publicacion->media) }}" class="w-100 rounded h-100 object-fit-cover object-center" >
                        </div>
                    </div>
                @endif
                <p class="card-text pt-2"><small class="subtext">{{ $publicacion->fecha_creacion }}</small></p>

                
                <div class="row align-items-center">
                    <div class="col-4 text-center">
                        <p class="card-text">
                            @if (auth()->user()->likes->contains('id_publicacion', $publicacion->id_publicacion))
                                <form action="{{ route('unlike', ['publicacionId' => $publicacion->id_publicacion]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <p>
                                    <button type="submit"> <i class="fa-solid fa-heart" style="color: #FF0DDC;"></i> {{ $publicacion->likes->count() }}</button>
                                    </p>
                                </form>
                            @else
                                <form action="{{ route('like', ['publicacionId' => $publicacion->id_publicacion]) }}" method="POST">
                                    @csrf
                                    <p>
                                    <button type="submit"> <i class="fa-regular fa-heart" style="color: #FF0DDC;"></i> {{ $publicacion->likes->count() }}</button>
                                    </p>
                                </form>
                            @endif
                        </p>
                    </div>
                    <div class="col-4 text-center">
                        <p class="card-text comentario" data-target="#form-comment-{{ $publicacion->id_publicacion }}">
                            <button><i class="fa-regular fa-comment" style="color: #FF0DDC;"></i> {{ $publicacion->comentarios->count() }} </button>
                        </p>
                    </div>

                    <div class="col-4 text-center">
                        
                            @if (auth()->user()->id_usuario != $publicacion->id_creador)
                            <form id="reportar{{ $publicacion->id_publicacion }}" action="{{ route('reportarPubli', ['id_publicacion' => $publicacion->id_publicacion]) }}" method="POST">
                                                    @csrf
                                                    <p>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#reportarPubli{{ $publicacion->id_publicacion }}">
                                                    <i class="pt-3 fa-regular fa-flag" style="color: #FF0DDC;"></i></button>
                                                    </p>

                                                    <div class="modal fade" id="reportarPubli{{ $publicacion->id_publicacion }}" tabindex="-1" aria-labelledby="reportarPublicacion{{ $publicacion->id_publicacion }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center emergente textoB">
                                                                Selecciona el motivo por el cual quieres reportar esta publicación:
                                                            </div>
                                                            <div class="modal-body text-start">

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo1" value="Incitacion al odio">
                                                                    <label class="form-check-label" for="motivo1">
                                                                        Incitacion al odio
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo2" value="Violencia o acoso">
                                                                    <label class="form-check-label" for="motivo2">
                                                                        Violencia o acoso
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo3" value="Contenido delicado o perturbador">
                                                                    <label class="form-check-label" for="motivo3">
                                                                        Contenido delicado o perturbador
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo4" value="Suicidio o autolesiones">
                                                                    <label class="form-check-label" for="motivo4">
                                                                        Suicidio o autolesiones
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo5" value="Spam">
                                                                    <label class="form-check-label" for="motivo5">
                                                                        Spam
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <input type="text" name="idUsuarioR" value="{{ $publicacion->id_creador }}" hidden>
                                                            
                                                            <div class="modal-footer d-flex justify-content-around">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Enviar reporte</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                                </div>
                            @endif
                            
                    </div>
                </div>
                                <div class="row d-flex justify-content-center ms-2 ">
                                        <div class="">
                                            <form action="{{ route('crearComentario') }}" method="POST" enctype="multipart/form-data" class="mb-2 nuevo-Comment rounded form-comment p-3" id="form-comment-{{ $publicacion->id_publicacion }}" style="display: none ">
                                                @csrf
                                                <input type="hidden" name="id_publicacion" value="{{ $publicacion->id_publicacion }}">

                                                <div class="form-group ">
                                                    <label for="contenido">Nuevo comentario:</label>
                                                    <textarea class="form-control nuevoComment" id="nuevoComment" name="nuevoComment" rows="3"></textarea>
                                                    <div class="form-text "><p class="contador2"></p></div>
                                                    <div class="form-group d-flex justify-content-between">
                                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 focus:outline-none  col-6"  type="file" name="newImagenC" id="newImagenC">
                                                            <button type="submit" id="btnguardarComment" class="mt-1 col-3 text-center btn color-boton textoB btnguardarComment" disabled>Añadir</button>
                                                        </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
            </div>
        </div>

    @foreach($comentarios as $comentario)
        <div class="card mt-2 border-0">
                <div class="card-body rounded publicacion">
                    <div class="d-flex align-items-center mb-1">
                        <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                            <img src="{{ asset($comentario->user->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                        </div>
                        <h5 class="card-title mb-0 ms-2"><a class="noSub" href="{{ url('perfil/' . $comentario->user->username) }}">{{ $comentario->user->username }}</a></h5>
                    </div>
                    <p class="card-text ps-5 pe-5">{{ $comentario->contenido }}</p>
                    @if($comentario->media !=null)
                    <div class="row d-flex justify-content-center pt-2">
                        <div class="col-6">
                            <img src="{{ asset($comentario->media) }}" class="w-100 rounded h-100 object-fit-cover object-center" >
                        </div>
                    </div>
                    @endif
                    <p class="card-text"><small class="subtext">{{ $comentario->fecha_creacion }}</small></p>

                    <div class="col-12 text-end">
                    @if (auth()->user()->id_usuario != $comentario->id_usuario)

                    <form id="reportarC{{ $comentario->id_comentario }}" action="{{ route('reportarComm', ['id_comentario' => $comentario->id_comentario]) }}" method="POST">
                                                    @csrf
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#reportarComm{{ $comentario->id_comentario }}">
                                                    <i class="fa-regular fa-flag" style="color: #FF0DDC;"></i></button>


                                                    <div class="modal fade" id="reportarComm{{ $comentario->id_comentario }}" tabindex="-1" aria-labelledby="reportarComm{{ $comentario->id_comentario }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-start">
                                                        
                                                                <p>Selecciona el motivo por el cual quieres reportar este comentario:</p>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo1" value="Incitacion al odio">
                                                                    <label class="form-check-label" for="motivo1">
                                                                        Incitacion al odio
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo2" value="Violencia o acoso">
                                                                    <label class="form-check-label" for="motivo2">
                                                                        Violencia o acoso
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo3" value="Contenido delicado o perturbador">
                                                                    <label class="form-check-label" for="motivo3">
                                                                        Contenido delicado o perturbador
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo4" value="Suicidio o autolesiones">
                                                                    <label class="form-check-label" for="motivo4">
                                                                        Suicidio o autolesiones
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="motivo" id="motivo5" value="Spam">
                                                                    <label class="form-check-label" for="motivo5">
                                                                        Spam
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <input type="text" name="idUsuarioR" value="{{ $comentario->id_usuario }}" hidden>
                                                            
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Enviar reporte</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form></div>

                    @else

                        <form id="eliminarComment{{ $comentario->id_comentario }}" action="{{ route('borrarComentario', ['id_comentario' => $comentario->id_comentario]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" data-bs-toggle="modal" data-bs-target="#eliminarComm{{ $comentario->id_comentario }}">
                                <i class="fa-solid fa-trash" style="color: #FF0DDC;"></i>
                            </button>
                                <div class="modal fade" id="eliminarComm{{ $comentario->id_comentario }}" tabindex="-1" aria-labelledby="eliminarComm{{ $comentario->id_comentario }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body text-center emergente textoB">
                                                ¿Estás seguro de que deseas borrar el comentario?
                                            </div>
                                            <div class="modal-footer d-flex justify-content-around">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        
                    @endif

                    </div>

                </div>
        </div>


                


    @endforeach
    </div>

    
    </div>
    </div>
    <script src="{{ asset('/js/comentarios.js') }}"></script>
</x-app-layout>