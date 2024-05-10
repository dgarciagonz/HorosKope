<x-app-layout>
@if($usuario->estado)
    <div class="container ">
        <div class="row ">
            <div class="col-12 mt-5 ">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="rounded-circle overflow-hidden"  style="width: 20rem; height: 20rem;">
                                <img src="{{ asset($usuario->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                        </div>
                    </div>

                    <div class="col-12 col-md-4  ">
                        <div class="row d-flex justify-content-between">
                            <div class="col-12 text-center mt-4"><h1>{{ $usuario->username }}</h1></div>
                            @if ($usuarioActual->id_usuario !== $usuario->id_usuario)
                               
                                <div class="col-12 mt-3 mb-5 d-flex justify-content-center align-items-center">
                                @if (auth()->user()->seguidores->contains('id_seguido', $usuario->id_usuario)) 
                                    <form action="{{ route('unfollowUsuario', ['idUsuario' => $usuario->id_usuario]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Dejar de seguir</button>
                                    </form>
                                @else
                                    <form action="{{ route('seguirUsuario', ['idUsuario' => $usuario->id_usuario]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-success" type="submit">Seguir</button>
                                    </form>
                                @endif
                                </div>

                            @else
                                
                                <div class="col-12 mt-2 mb-4 d-flex justify-content-center align-items-center"><a href="/profile"class="btn color-boton textoB">Editar perfil</a></div>
                            @endif 
                            <div class="row  ">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="ms-4 col-12 rounded p-3 d-flex justify-content-around align-items-center text-center publicacion">
                                    <div><button class="noSub" data-bs-toggle="modal" data-bs-target="#seguidoresM">{{ $lista_seguidores->count() }} Seguidores</button></div>
                                    <div><button class="noSub" data-bs-toggle="modal" data-bs-target="#seguidosM">{{ $lista_seguidos->count() }} Seguidos</button></div>

                                    <div class="modal fade" id="seguidoresM" tabindex="-1" aria-labelledby="seguidoresLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header emergente textoB">
                                                    <h5 class="modal-title" id="seguidoresLabel">Seguidores</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        @foreach($lista_seguidores as $seguidor)
                                                                <div class="col-md-12 pb-2">
                                                                    <div class="card border-0">
                                                                        <div class="card-body rounded">
                                                                            <div class="d-flex align-items-center mb-1">
                                                                                <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                                                    <img src="{{ asset($seguidor->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                                                                </div>
                                                                                <h5 class="card-title mb-0 ms-2"><a class="noSub" href="{{ url('perfil/' . $seguidor->username) }}">{{ $seguidor->username }}</a></h5>
                                                                            </div>  
                                                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        @endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="seguidosM" tabindex="-1" aria-labelledby="seguidosLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header emergente textoB">
                                                    <h5 class="modal-title" id="seguidosLabel">Seguidos</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                    @foreach($lista_seguidos as $seguido)
                                                                <div class="col-md-12 pb-2">
                                                                    <div class="card border-0">
                                                                        <div class="card-body rounded ">
                                                                            <div class="d-flex align-items-center mb-1">
                                                                                <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                                                    <img src="{{ asset($seguido->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                                                                </div>
                                                                                <h5 class="card-title mb-0 ms-2"><a class="noSub" href="{{ url('perfil/' . $seguido->username) }}">{{ $seguido->username }}</a></h5>
                                                                            </div>  
                                                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        @endforeach
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4 mt-md-0 d-flex justify-content-center">
                        @if ($usuarioActual->id_usuario !== $usuario->id_usuario)
                        <div class="card" style="min-height: 25vh">
                            <div class="card-body d-flex flex-column rounded justify-content-around {{$nombreSigno}}">
                                <h5 class="card-title mb-0 ms-2 textoB font-weight-bold">Compatibilidad con {{ $nombreSigno}}</h5>
                                <div>
                                    <div class="d-flex col-12">
                                        <i class="fa-solid fa-heart-crack fa-lg text-start col-6" style="color: #FFFF;"></i>
                                        <i class="fa-solid fa-heart fa-lg text-end col-6" style="color: #FFFF;"></i>
                                    </div>
                                    <div class="progress border-1 mt-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar barraAmor" style="width: 50%"></div>
                                    </div> 
                                </div>
                                 
                                <div>
                                    <div class="d-flex col-12">
                                        <i class="fa-solid fa-face-frown fa-lg text-start col-6" style="color: #FFFF;"></i>
                                        <i class="fa-solid fa-face-smile fa-lg text-end col-6" style="color: #FFFF;"></i>
                                    </div>
                                    <div class="progress border-1 mt-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar barraAmistad" style="width: 50%"></div>
                                    </div> 
                                </div>

                            </div>
                        </div>
                        @else
                        <div class="card" >
                            <div class="card-body d-flex flex-column rounded justify-content-around {{$nombreSigno}}">
                                <h5 class="card-title mb-0 ms-2 text-center textoB font-weight-bold">{{ $nombreSigno }}</h5>
                                <p class="text-center">{{ $descripcionSigno}} </p>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">
            @foreach($publicaciones as $publicacion)
            <div class="col-md-12 pb-2">
                        <div class="card ">
                            <div class="card-body rounded publicacion">
                            <div class="d-flex align-items-center mb-1">
                                <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                    <img src="{{ asset($publicacion->user->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                </div>
                                <h5 class="card-title mb-0 ms-2"><a href="{{ url('perfil/' . $publicacion->user->username) }}" class="noSub">{{ $publicacion->user->username }}</a></h5>
                            </div>
                          <a href="{{ route('publicacion', ['id_publicacion' => $publicacion->id_publicacion]) }}" class="noSub">
                                <p class="card-text ps-5 pe-5 ">{{ $publicacion->contenido }}</p>
                                </a>
                                @if($publicacion->media !=null)
                                <div class="row d-flex justify-content-center pt-2">
                                    <div class="col-12">
                                        <img src="{{ asset($publicacion->media) }}" class="w-100 rounded h-100 object-fit-cover object-center" style="max-height: 30vh;">
                                    </div>
                                </div>
                                @endif
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
                                                        <button type="submit"> <i class="fa-regular fa-heart" style="color: #FF0DDC     ;"></i> {{ $publicacion->likes->count() }}</button>
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
                                        
                                            @if (auth()->user()->id_usuario === $publicacion->id_creador)
                                            <form id="eliminarPubli{{ $publicacion->id_publicacion }}" action="{{ route('borrarPublicacion', ['id_publicacion' => $publicacion->id_publicacion]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <p>
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $publicacion->id_publicacion }}">
                                                        <i class="pt-3 fa-solid fa-trash" style="color: #FF0DDC;"></i></button>
                                                    </p>
                                                    <div class="modal fade" id="confirmDeleteModal{{ $publicacion->id_publicacion }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $publicacion->id_publicacion }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content ">
                                                            <div class="modal-body text-center emergente textoB">
                                                                ¿Estás seguro de que deseas borrar la publicación?
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-around">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                    
                                                </form>

                                                
                                                
                                            @else
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
                        </div>
                    </div>

                    @endforeach
            </div>
        </div>
    </div>
@else
    <h1 class="text-center">Usuario no disponible temporalmente</h1>
@endif
    <script src="{{ asset('/js/comentarios.js') }}"></script>
    <script src="{{ asset('/js/perfil.js') }}"></script>

</x-app-layout>
