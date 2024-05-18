<x-app-layout>

<div class="container-fluid">
    <div class="row d-flex justify-content-around">
    <div class="d-flex align-items-center mt-2 col-12 d-md-none ">
                    <form method="POST" action="{{ route('buscar') }}" class="d-flex flex-grow-1 me-2" role="search">
                        @csrf
                        <input class="form-control me-2" id="contenidoBusqueda" type="search" placeholder="Buscar" aria-label="Search" name="query">
                        <button class="btn color-boton textoB" id="buscador" type="submit" disabled>Buscar</button>
                    </form>
                </div>
        <div class="col-lg-8">
            <div class="row mt-3 mt-md-5">
                <button id="crearPublicacionBtn" class=" btn color-boton textoB mb-3 " data-bs-toggle="modal" data-bs-target="#crearPublicacionModal">Crear Publicación</button>
                    <div class="modal fade" id="crearPublicacionModal" tabindex="-1" aria-labelledby="crearPublicacionModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-center emergente textoB">
                                    Nueva publicación
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/horoskope" enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                        <textarea class="form-control" id="contenidoPost" name="nuevoPost" rows="10" maxlength="500" style="resize:none"></textarea>
                                        <div id="contador" class="form-text"></div>
                                        <div class="form-group ">
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 focus:outline-none"  type="file" name="newImagen" id="newImagen">
                                        </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-around">                                    
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" id="btnCrearPost" class="btn color-boton textoB" disabled>Guardar</button>
                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>


                    @foreach($publicaciones as $publicacion)
                    <div class="col-md-12 pb-2">
                        <div class="card  border-0 wow animate__animated animate__fadeIn" data-wow-duration="0.6s" >
                            <div class="card-body  rounded publicacion ">
                            <div class="d-flex align-items-center mb-1 ">
                                <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                    <img src="{{ asset($publicacion->user->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                </div>
                                <h5 class="card-title mb-0 ms-2 "><a href="{{ url('perfil/' . $publicacion->user->username) }}" class="noSub">{{ $publicacion->user->username }}</a></h5>
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

                                    <div class="col-4 text-center align-items-center">
                                        
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
                                            <form action="{{ route('crearComentario') }}" method="POST" enctype="multipart/form-data" class="mb-2 nuevo-Comment rounded form-comment p-3 wow animate__animated animate__fadeIn" id="form-comment-{{ $publicacion->id_publicacion }}" style="display: none ">
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
        <div class="col-lg-3 sticky-top z-0 d-none d-lg-block" style="height: 90vh">
            <div class="row d-flex flex-column justify-content-around mt-5">
                <div class="d-flex align-items-center mt-4">
                    <form method="POST" action="{{ route('buscar') }}" class="d-flex flex-grow-1 me-2" role="search">
                        @csrf
                        <input class="form-control me-2" id="contenidoBusqueda2" type="search" placeholder="Buscar" aria-label="Search" name="query">
                        <button class="btn color-boton textoB" id="buscador2" type="submit" disabled>Buscar</button>
                    </form>
                </div>

                <a href="/tarot" class="noSub">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="card border-0 bg-tarot p-2">
                            <div class="card-body ">
                               <h1 class=" text-center p-5 "> </h1>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/horoscopo" class="noSub">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="card border-0 bg-horoscopo p-3">
                            <div class="card-body ">
                                <h1 class=" text-center p-5 "></h1>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="col-md-12 mt-3">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-12 ">
                            <h5 class="tit  mb-0">Soporte</h5>
                            <ul class="list-group list-group-flush subtext">
                                <li ><p class="subtext">soporte@horoskope.com</p></li>
                            </ul>
                            <h5 class="tit pt-2 mb-0">Trabaja con nosotros</h5>
                            <ul class="list-group list-group-flush fw-lighter">
                                <li ><p class="subtext mb-0">Solicitud para pitonisa</p></li>
                                <li ><p class="subtext">Solicitud para programador</p></li>
                            </ul>
                            <p >horoskope © Todos los derechos reservados 2024</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> 
</div>

<script src="{{ asset('/js/principal.js') }}"></script>
<script src="{{ asset('/js/comentarios.js') }}"></script>



</x-app-layout>
