<x-app-layout>
    @if($usuario->estado)
        <div class="container ">
            <div class="row ">
                <div class="col-12 mt-5 ">
                    <div class="row d-flex justify-content-between">
                        <div class="col-12 col-md-4 d-flex justify-content-center">
                            <div class="rounded-circle overflow-hidden" style="width: 20rem; height: 20rem;">
                                <img src="{{ asset($usuario->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                            </div>
                        </div>



                        <div class="col-12 col-md-4  ">
                            <div class="row d-flex justify-content-between ">
                                <div class="col-12 text-center mt-4">
                                    <h1>{{ $usuario->username }}</h1>
                                </div>
                                @if ($usuarioActual->id_usuario !== $usuario->id_usuario)

                                    <div class="col-12 mt-3 mb-5 d-flex justify-content-center align-items-center">
                                        @if (auth()->user()->seguidores->contains('id_seguido', $usuario->id_usuario))
                                            <form action="{{ route('unfollowUsuario', ['idUsuario' => $usuario->id_usuario]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Dejar de seguir</button>
                                            </form>
                                        @else









                                            <form action="{{ route('seguirUsuario', ['idUsuario' => $usuario->id_usuario]) }}"
                                                method="POST">
                                                @csrf
                                                <button class="btn btn-success" type="submit">Seguir</button>
                                            </form>
                                        @endif









                                    </div>

                                @else










                                    <div class="col-12 mt-2 mb-4 d-flex justify-content-center align-items-center"><a
                                            href="/profile" class="btn color-boton textoB">Editar perfil</a></div>
                                @endif 
                                <div class="row  ">
                                    <div class="col-12 d-flex justify-content-center">
                                        <div
                                            class="ms-4 col-12 rounded p-3 d-flex justify-content-around align-items-center text-center publicacion">
                                            <div><button class="noSub" data-bs-toggle="modal"
                                                    data-bs-target="#seguidoresM">{{ $lista_seguidores->count() }}
                                                    Seguidores</button></div>
                                            <div><button class="noSub" data-bs-toggle="modal"
                                                    data-bs-target="#seguidosM">{{ $lista_seguidos->count() }}
                                                    Seguidos</button></div>

                                            <div class="modal fade" id="seguidoresM" tabindex="-1"
                                                aria-labelledby="seguidoresLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header emergente textoB">
                                                            <h5 class="modal-title" id="seguidoresLabel">Seguidores</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            @if($lista_seguidores->isEmpty())
                                                                <div class="col-md-12 mb-4">
                                                                    <div class="card border-0">
                                                                        <div class="card-body rounded usuario">
                                                                            <p class="card-text">No hay ningún seguidor</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else









                                                                @foreach($lista_seguidores as $seguidor)
                                                                                                                                                                            <div class="col-md-12 pb-2">
                                                                        <div class="card border-0">
                                                                            <div class="card-body rounded">
                                                                                <div class="d-flex align-items-center mb-1">
                                                                                    <div class="rounded-circle overflow-hidden"
                                                                                        style="width: 50px; height: 50px;">
                                                                                        <img src="{{ asset($seguidor->icono) }}"
                                                                                            class="w-100 h-100 object-fit-cover object-center">
                                                                                    </div>
                                                                                    <h5 class="card-title mb-0 ms-2"><a
                                                                                            class="noSub"
                                                                                            href="{{ url('perfil/' . $seguidor->username) }}">{{ $seguidor->username }}</a>
                                                                                    </h5>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif









                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="seguidosM" tabindex="-1"
                                                aria-labelledby="seguidosLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header emergente textoB">
                                                            <h5 class="modal-title" id="seguidosLabel">Seguidos</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            @if($lista_seguidos->isEmpty())
                                                                <div class="col-md-12 mb-4">
                                                                    <div class="card border-0">
                                                                        <div class="card-body rounded usuario">
                                                                            <p class="card-text">No sigue a ningun seguido</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else









                                                                @foreach($lista_seguidos as $seguido)
                                                                                                                                                                            <div class="col-md-12 pb-2">
                                                                        <div class="card border-0">
                                                                            <div class="card-body rounded ">
                                                                                <div class="d-flex align-items-center mb-1">
                                                                                    <div class="rounded-circle overflow-hidden"
                                                                                        style="width: 50px; height: 50px;">
                                                                                        <img src="{{ asset($seguido->icono) }}"
                                                                                            class="w-100 h-100 object-fit-cover object-center">
                                                                                    </div>
                                                                                    <h5 class="card-title mb-0 ms-2"><a
                                                                                            class="noSub"
                                                                                            href="{{ url('perfil/' . $seguido->username) }}">{{ $seguido->username }}</a>
                                                                                    </h5>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif 
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
                                        <div class="d-flex justify-content-around pb-5">
                                            <img src="{{asset('icon/' . $nombreSigno . '.png')}}"
                                                style="heigth:50px; width:50px;">
                                            <h5 class="card-title mb-0 ms-2 pt-2 tit font-weight-bold text-center">
                                                Compatibilidad con {{ $nombreSigno}}</h5>
                                            <img src="{{asset('icon/' . $nombreSigno . '.png')}}"
                                                style="heigth:50px; width:50px;">
                                        </div>
                                        <div class="pb-5">
                                            <div class="d-flex col-12">
                                                <i class="fa-solid fa-heart-crack fa-lg text-start col-6"
                                                    style="color: #FFFF;"></i>
                                                <i class="fa-solid fa-heart fa-lg text-end col-6" style="color: #FFFF;"></i>
                                            </div>
                                            <div class="progress border-1 mt-3" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar barraAmor" style="width: 50%"></div>
                                            </div>
                                        </div>

                                        <div class="pb-5">
                                            <div class="d-flex col-12">
                                                <i class="fa-solid fa-face-frown fa-lg text-start col-6"
                                                    style="color: #FFFF;"></i>
                                                <i class="fa-solid fa-face-smile fa-lg text-end col-6"
                                                    style="color: #FFFF;"></i>
                                            </div>
                                            <div class="progress border-1 mt-3" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar barraAmistad" style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <form id="reportar{{ $usuario->id_usuario }}"
                                            action="{{ route('reportarUser', ['id_user' => $usuario->id_usuario]) }}"
                                            method="POST">
                                            @csrf
                                            <p>
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#reportarUser{{ $usuario->id_usuario }}">
                                                    <i class="pt-3 fa-regular fa-flag w-100" style="color: #FFFF;"></i></button>
                                            </p>

                                            <div class="modal fade" id="reportarUser{{ $usuario->id_usuario }}" tabindex="-1"
                                                aria-labelledby="reportarUser{{ $usuario->id_usuario }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center emergente textoB">
                                                            Selecciona el motivo por el cual quieres reportar este usuario:
                                                        </div>
                                                        <div class="modal-body text-start">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="motivo"
                                                                    id="motivo1" value="Incitacion al odio">
                                                                <label class="form-check-label" for="motivo1">
                                                                    Incitacion al odio
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="motivo"
                                                                    id="motivo2" value="Violencia o acoso">
                                                                <label class="form-check-label" for="motivo2">
                                                                    Violencia o acoso
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="motivo"
                                                                    id="motivo3"
                                                                    value="Publica contenido delicado o perturbador">
                                                                <label class="form-check-label" for="motivo3">
                                                                    Publica contenido delicado o perturbador
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="motivo"
                                                                    id="motivo4" value="Fomenta el suicidio o autolesiones">
                                                                <label class="form-check-label" for="motivo4">
                                                                    Fomenta el suicidio o autolesiones
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="motivo"
                                                                    id="motivo5" value="Spam">
                                                                <label class="form-check-label" for="motivo5">
                                                                    Spam
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="motivo"
                                                                    id="motivo6"
                                                                    value="Este usuario se hace pasar por alguien que conozco">
                                                                <label class="form-check-label" for="motivo6">
                                                                    Este usuario se hace pasar por alguien que conozco
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer d-flex justify-content-around">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                                                            <button type="submit" class="btn btn-danger">Enviar reporte</button>
                                                        </div>
                                                    </div>

                                                </div>
                                        </form>
                                    </div>
                                </div>
                            @else









                                <div class="card">
                                    <div class="card-body d-flex flex-column rounded justify-content-around {{$nombreSigno}}">

                                        <div class="d-flex justify-content-around">
                                            <img src="{{asset('icon/' . $nombreSigno . '.png')}}"
                                                style="heigth:50px; width:50px;">
                                            <h5 class="card-title mb-0 ms-2 mt-3 text-center tit font-weight-bold">
                                                {{ $nombreSigno }}
                                            </h5>
                                            <img src="{{asset('icon/' . $nombreSigno . '.png')}}"
                                                style="heigth:50px; width:50px;">
                                        </div>


                                        <p class="text-center ">{{ $descripcionSigno}} </p>
                                    </div>
                                </div>

                            @endif









                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-around rounded mt-5">
                    <a class="col-4 noSub2 bordeizq text-center p-2 color-boton btnActivado" id="texto_posts"
                        onclick="mostrarPo('bloque_posts','bloque_comentarios','bloque_likes')">Publicaciones</a>
                    <a class="col-4 noSub2 bordearrib text-center p-2 color-boton" id="texto_comments"
                        onclick="mostrarCo('bloque_comentarios', 'bloque_posts','bloque_likes')">Comentarios</a>
                    <a class="col-4 noSub2 bordeder text-center p-2 color-boton" id="texto_likes"
                        onclick="mostrarLi('bloque_likes','bloque_comentarios', 'bloque_posts')">Likes</a>
                </div>



                <div class="col-12" id="bloque_posts">
                    @if($publicaciones->isEmpty())
                        <div class="col-md-12 pb-2">
                            <div class="card border-0 ">
                                <div class="card-body rounded publicacion">
                                    <p class="text-center">Este usuario no ha creado ninguna publicación</p>
                                </div>
                            </div>
                        </div>
                    @else



                            @foreach($publicaciones as $publicacion)
                                                                <div class="col-md-12 pb-2">
                                        <div class="card wow fadeInDown border-0">
                                            <div class="card-body  rounded publicacion ">
                                                <div class="d-flex align-items-center mb-1 ">
                                                    <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                        <img src="{{ asset($publicacion->user->icono) }}"
                                                            class="w-100 h-100 object-fit-cover object-center">
                                                    </div>
                                                    <h5 class="card-title mb-0 ms-2 "><a
                                                            href="{{ url('perfil/' . $publicacion->user->username) }}"
                                                            class="noSub">{{ $publicacion->user->username }}</a></h5>
                                                </div>
                                                <a href="{{ route('publicacion', ['id_publicacion' => $publicacion->id_publicacion]) }}"
                                                    class="noSub">
                                                    <p class="card-text ps-5 pe-5 ">{{ $publicacion->contenido }}</p>
                                                </a>

                                                @if($publicacion->media != null)
                                                    <div class="row d-flex justify-content-center pt-2">
                                                        <div class="col-12">
                                                            <img src="{{ asset($publicacion->media) }}"
                                                                class="w-100 rounded h-100 object-fit-cover object-center"
                                                                style="max-height: 30vh;">
                                                        </div>
                                                    </div>
                                                @endif


                                                <div class="row align-items-center">

                                                    <div class="col-4 text-center">
                                                        <p class="card-text">
                                                            @if (auth()->user()->likes->contains('id_publicacion', $publicacion->id_publicacion))
                                                                <form
                                                                    action="{{ route('unlike', ['publicacionId' => $publicacion->id_publicacion]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <p>
                                                                        <button type="submit"> <i class="fa-solid fa-heart"
                                                                                style="color: #FF0DDC;"></i>
                                                                            {{ $publicacion->likes->count() }}</button>
                                                                    </p>
                                                                </form>
                                                            @else


                                                                <form
                                                                    action="{{ route('like', ['publicacionId' => $publicacion->id_publicacion]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <p>
                                                                        <button type="submit"> <i class="fa-regular fa-heart"
                                                                                style="color: #FF0DDC     ;"></i>
                                                                            {{ $publicacion->likes->count() }}</button>
                                                                    </p>
                                                                </form>
                                                            @endif


                                                        </p>
                                                    </div>

                                                    <div class="col-4 text-center">
                                                        <p class="card-text comentario"
                                                            data-target="#form-comment-{{ $publicacion->id_publicacion }}">
                                                            <button><i class="fa-regular fa-comment" style="color: #FF0DDC;"></i>
                                                                {{ $publicacion->comentarios->count() }} </button>
                                                        </p>
                                                    </div>

                                                    <div class="col-4 text-center align-items-center">

                                                        @if (auth()->user()->id_usuario === $publicacion->id_creador)
                                                            <form id="eliminarPubli{{ $publicacion->id_publicacion }}"
                                                                action="{{ route('borrarPublicacion', ['id_publicacion' => $publicacion->id_publicacion]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <p>
                                                                    <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#confirmDeleteModal{{ $publicacion->id_publicacion }}">
                                                                        <i class="pt-3 fa-solid fa-trash" style="color: #FF0DDC;"></i></button>
                                                                </p>
                                                                <div class="modal fade"
                                                                    id="confirmDeleteModal{{ $publicacion->id_publicacion }}" tabindex="-1"
                                                                    aria-labelledby="confirmDeleteModalLabel{{ $publicacion->id_publicacion }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content ">
                                                                            <div class="modal-body text-center emergente textoB">
                                                                                ¿Estás seguro de que deseas borrar la publicación?
                                                                            </div>
                                                                            <div class="modal-footer d-flex justify-content-around">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </form>



                                                        @else


                                                            <form id="reportar{{ $publicacion->id_publicacion }}"
                                                                action="{{ route('reportarPubli', ['id_publicacion' => $publicacion->id_publicacion]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <p>
                                                                    <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#reportarPubli{{ $publicacion->id_publicacion }}">
                                                                        <i class="pt-3 fa-regular fa-flag" style="color: #FF0DDC;"></i></button>
                                                                </p>

                                                                <div class="modal fade" id="reportarPubli{{ $publicacion->id_publicacion }}"
                                                                    tabindex="-1"
                                                                    aria-labelledby="reportarPublicacion{{ $publicacion->id_publicacion }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body text-center emergente textoB">
                                                                                Selecciona el motivo por el cual quieres reportar esta
                                                                                publicación:
                                                                            </div>
                                                                            <div class="modal-body text-start">

                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo"
                                                                                        id="motivo1" value="Incitacion al odio">
                                                                                    <label class="form-check-label" for="motivo1">
                                                                                        Incitacion al odio
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo"
                                                                                        id="motivo2" value="Violencia o acoso">
                                                                                    <label class="form-check-label" for="motivo2">
                                                                                        Violencia o acoso
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo"
                                                                                        id="motivo3" value="Contenido delicado o perturbador">
                                                                                    <label class="form-check-label" for="motivo3">
                                                                                        Contenido delicado o perturbador
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo"
                                                                                        id="motivo4" value="Suicidio o autolesiones">
                                                                                    <label class="form-check-label" for="motivo4">
                                                                                        Suicidio o autolesiones
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="radio" name="motivo"
                                                                                        id="motivo5" value="Spam">
                                                                                    <label class="form-check-label" for="motivo5">
                                                                                        Spam
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <input type="text" name="idUsuarioR"
                                                                                value="{{ $publicacion->id_creador }}" hidden>

                                                                            <div class="modal-footer d-flex justify-content-around">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-danger">Enviar
                                                                                    reporte</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                            </form>
                                                        @endif



                                                    </div>

                                                </div>
                                                <div class="row d-flex justify-content-center ms-2 ">
                                                    <div class="">
                                                        <form action="{{ route('crearComentario') }}" method="POST"
                                                            enctype="multipart/form-data"
                                                            class="mb-2 nuevo-Comment rounded form-comment p-3"
                                                            id="form-comment-{{ $publicacion->id_publicacion }}" style="display: none ">
                                                            @csrf
                                                            <input type="hidden" name="id_publicacion"
                                                                value="{{ $publicacion->id_publicacion }}">

                                                            <div class="form-group ">
                                                                <label for="contenido">Nuevo comentario:</label>
                                                                <textarea class="form-control nuevoComment" id="nuevoComment"
                                                                    name="nuevoComment" rows="3"></textarea>
                                                                <div class="form-text ">
                                                                    <p class="contador2"></p>
                                                                </div>
                                                                <div class="form-group d-flex justify-content-between">
                                                                    <input
                                                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 focus:outline-none  col-6"
                                                                        type="file" name="newImagenC" id="newImagenC">
                                                                    <button type="submit" id="btnguardarComment"
                                                                        class="mt-1 col-3 text-center btn color-boton textoB btnguardarComment"
                                                                        disabled>Añadir</button>
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
                    @endif

            </div>


            <div class="col-12" id="bloque_likes" style="display:none">
                @if($numLikes == 0)
                    <div class="col-md-12 pb-2">
                        <div class="card border-0">
                            <div class="card-body rounded publicacion">
                                <p class="text-center">Este usuario no ha dado ningún like</p>
                            </div>
                        </div>
                    </div>
                @else


                    @foreach($publiLikes as $publicacion)
                                                                                                                                                                                <div class="col-md-12 pb-2">
                            <div class="col-md-12 pb-2">
                                <div class="card wow fadeInDown border-0">
                                    <div class="card-body  rounded publicacion ">
                                        <div class="d-flex align-items-center mb-1 ">
                                            <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                <img src="{{ asset($publicacion->user->icono) }}"
                                                    class="w-100 h-100 object-fit-cover object-center">
                                            </div>
                                            <h5 class="card-title mb-0 ms-2 "><a
                                                    href="{{ url('perfil/' . $publicacion->user->username) }}"
                                                    class="noSub">{{ $publicacion->user->username }}</a></h5>
                                        </div>
                                        <a href="{{ route('publicacion', ['id_publicacion' => $publicacion->id_publicacion]) }}"
                                            class="noSub">
                                            <p class="card-text ps-5 pe-5 ">{{ $publicacion->contenido }}</p>
                                        </a>

                                        @if($publicacion->media != null)
                                            <div class="row d-flex justify-content-center pt-2">
                                                <div class="col-12">
                                                    <img src="{{ asset($publicacion->media) }}"
                                                        class="w-100 rounded h-100 object-fit-cover object-center"
                                                        style="max-height: 30vh;">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="row align-items-center">

                                            <div class="col-4 text-center">
                                                <p class="card-text">
                                                    @if (auth()->user()->likes->contains('id_publicacion', $publicacion->id_publicacion))
                                                        <form
                                                            action="{{ route('unlike', ['publicacionId' => $publicacion->id_publicacion]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <p>
                                                                <button type="submit"> <i class="fa-solid fa-heart"
                                                                        style="color: #FF0DDC;"></i>
                                                                    {{ $publicacion->likes->count() }}</button>
                                                            </p>
                                                        </form>
                                                    @else

                                                        <form
                                                            action="{{ route('like', ['publicacionId' => $publicacion->id_publicacion]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <p>
                                                                <button type="submit"> <i class="fa-regular fa-heart"
                                                                        style="color: #FF0DDC     ;"></i>
                                                                    {{ $publicacion->likes->count() }}</button>
                                                            </p>
                                                        </form>
                                                    @endif

                                                </p>
                                            </div>

                                            <div class="col-4 text-center">
                                                <p class="card-text comentario"
                                                    data-target="#form-comment-{{ $publicacion->id_publicacion }}">
                                                    <button><i class="fa-regular fa-comment" style="color: #FF0DDC;"></i>
                                                        {{ $publicacion->comentarios->count() }} </button>
                                                </p>
                                            </div>

                                            <div class="col-4 text-center align-items-center">

                                                @if (auth()->user()->id_usuario === $publicacion->id_creador)
                                                    <form id="eliminarPubli{{ $publicacion->id_publicacion }}"
                                                        action="{{ route('borrarPublicacion', ['id_publicacion' => $publicacion->id_publicacion]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <p>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#confirmDeleteModal{{ $publicacion->id_publicacion }}">
                                                                <i class="pt-3 fa-solid fa-trash" style="color: #FF0DDC;"></i></button>
                                                        </p>
                                                        <div class="modal fade"
                                                            id="confirmDeleteModal{{ $publicacion->id_publicacion }}" tabindex="-1"
                                                            aria-labelledby="confirmDeleteModalLabel{{ $publicacion->id_publicacion }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content ">
                                                                    <div class="modal-body text-center emergente textoB">
                                                                        ¿Estás seguro de que deseas borrar la publicación?
                                                                    </div>
                                                                    <div class="modal-footer d-flex justify-content-around">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </form>



                                                @else

                                                    <form id="reportar{{ $publicacion->id_publicacion }}"
                                                        action="{{ route('reportarPubli', ['id_publicacion' => $publicacion->id_publicacion]) }}"
                                                        method="POST">
                                                        @csrf
                                                        <p>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#reportarPubli{{ $publicacion->id_publicacion }}">
                                                                <i class="pt-3 fa-regular fa-flag" style="color: #FF0DDC;"></i></button>
                                                        </p>

                                                        <div class="modal fade" id="reportarPubli{{ $publicacion->id_publicacion }}"
                                                            tabindex="-1"
                                                            aria-labelledby="reportarPublicacion{{ $publicacion->id_publicacion }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center emergente textoB">
                                                                        Selecciona el motivo por el cual quieres reportar esta
                                                                        publicación:
                                                                    </div>
                                                                    <div class="modal-body text-start">

                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="motivo"
                                                                                id="motivo1" value="Incitacion al odio">
                                                                            <label class="form-check-label" for="motivo1">
                                                                                Incitacion al odio
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="motivo"
                                                                                id="motivo2" value="Violencia o acoso">
                                                                            <label class="form-check-label" for="motivo2">
                                                                                Violencia o acoso
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="motivo"
                                                                                id="motivo3" value="Contenido delicado o perturbador">
                                                                            <label class="form-check-label" for="motivo3">
                                                                                Contenido delicado o perturbador
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="motivo"
                                                                                id="motivo4" value="Suicidio o autolesiones">
                                                                            <label class="form-check-label" for="motivo4">
                                                                                Suicidio o autolesiones
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="motivo"
                                                                                id="motivo5" value="Spam">
                                                                            <label class="form-check-label" for="motivo5">
                                                                                Spam
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <input type="text" name="idUsuarioR"
                                                                        value="{{ $publicacion->id_creador }}" hidden>

                                                                    <div class="modal-footer d-flex justify-content-around">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-danger">Enviar
                                                                            reporte</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                    </form>
                                                @endif


                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center ms-2 ">
                                            <div class="">
                                                <form action="{{ route('crearComentario') }}" method="POST"
                                                    enctype="multipart/form-data"
                                                    class="mb-2 nuevo-Comment rounded form-comment p-3"
                                                    id="form-comment-{{ $publicacion->id_publicacion }}" style="display: none ">
                                                    @csrf
                                                    <input type="hidden" name="id_publicacion"
                                                        value="{{ $publicacion->id_publicacion }}">

                                                    <div class="form-group ">
                                                        <label for="contenido">Nuevo comentario:</label>
                                                        <textarea class="form-control nuevoComment" id="nuevoComment"
                                                            name="nuevoComment" rows="3"></textarea>
                                                        <div class="form-text ">
                                                            <p class="contador2"></p>
                                                        </div>
                                                        <div class="form-group d-flex justify-content-between">
                                                            <input
                                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer bg-gray-50 focus:outline-none  col-6"
                                                                type="file" name="newImagenC" id="newImagenC">
                                                            <button type="submit" id="btnguardarComment"
                                                                class="mt-1 col-3 text-center btn color-boton textoB btnguardarComment"
                                                                disabled>Añadir</button>
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
                @endif
            </div>
            </div></div>






            <div class="col-12" id="bloque_comentarios" style="display:none">
                @if($comentarios->isEmpty())
                    <div class="col-md-12 pb-2">
                        <div class="card border-0">
                            <div class="card-body rounded publicacion">
                                <p class="text-center">Este usuario no ha creado nigún comentario</p>
                            </div>
                        </div>
                    </div>
                @else



                    @foreach($comentarios as $comentario)                                                                                                                              <div class="col-md-12 pb-2">
                            <div class="card mb-2 border-0">
                                <div class="card-body rounded publicacion">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                            <img src="{{ asset($comentario->user->icono) }}"
                                                class="w-100 h-100 object-fit-cover object-center">
                                        </div>
                                        <h5 class="card-title mb-0 ms-2"><a class="noSub"
                                                href="{{ url('perfil/' . $comentario->user->username) }}">{{ $comentario->user->username }}</a>
                                        </h5>
                                    </div>
                                        <a href="{{ route('publicacion', ['id_publicacion' => $comentario->id_publicacion]) }}"
                                            class="noSub">
                                            <p class="card-text ps-5 pe-5">{{ $comentario->contenido }}</p>
                                        </a>
                                    @if($comentario->media != null)
                                        <div class="row d-flex justify-content-center pt-2">
                                            <div class="col-6">
                                                <img src="{{ asset($comentario->media) }}"
                                                    class="w-100 rounded h-100 object-fit-cover object-center">
                                            </div>
                                        </div>
                                    @endif

                                    <p class="card-text"><small class="subtext">{{ $comentario->fecha_creacion }}</small></p>

                                    <div class="col-12 text-end">
                                        @if (auth()->user()->id_usuario != $comentario->id_usuario)

                                                <form id="reportarC{{ $comentario->id_comentario }}"
                                                    action="{{ route('reportarComm', ['id_comentario' => $comentario->id_comentario]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#reportarComm{{ $comentario->id_comentario }}">
                                                        <i class="fa-regular fa-flag" style="color: #FF0DDC;"></i></button>


                                                    <div class="modal fade" id="reportarComm{{ $comentario->id_comentario }}" tabindex="-1"
                                                        aria-labelledby="reportarComm{{ $comentario->id_comentario }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body text-start">

                                                                    <p>Selecciona el motivo por el cual quieres reportar este comentario:
                                                                    </p>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="motivo"
                                                                            id="motivo1" value="Incitacion al odio">
                                                                        <label class="form-check-label" for="motivo1">
                                                                            Incitacion al odio
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="motivo"
                                                                            id="motivo2" value="Violencia o acoso">
                                                                        <label class="form-check-label" for="motivo2">
                                                                            Violencia o acoso
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="motivo"
                                                                            id="motivo3" value="Contenido delicado o perturbador">
                                                                        <label class="form-check-label" for="motivo3">
                                                                            Contenido delicado o perturbador
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="motivo"
                                                                            id="motivo4" value="Suicidio o autolesiones">
                                                                        <label class="form-check-label" for="motivo4">
                                                                            Suicidio o autolesiones
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="motivo"
                                                                            id="motivo5" value="Spam">
                                                                        <label class="form-check-label" for="motivo5">
                                                                            Spam
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <input type="text" name="idUsuarioR" value="{{ $comentario->id_usuario }}"
                                                                    hidden>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-danger">Enviar reporte</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </form>
                                            </div>

                                        @else


                                            <form id="eliminarComment{{ $comentario->id_comentario }}"
                                                action="{{ route('borrarComentario', ['id_comentario' => $comentario->id_comentario]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#eliminarComm{{ $comentario->id_comentario }}">
                                                    <i class="fa-solid fa-trash" style="color: #FF0DDC;"></i>
                                                </button>
                                                <div class="modal fade" id="eliminarComm{{ $comentario->id_comentario }}" tabindex="-1"
                                                    aria-labelledby="eliminarComm{{ $comentario->id_comentario }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center emergente textoB">
                                                                ¿Estás seguro de que deseas borrar el comentario?
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-around">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancelar</button>
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
                @endif





            </div>
















        </div>
        </div>

    @else





        <h1 class="text-center">Usuario no disponible temporalmente</h1>
    @endif





    <script src="{{ asset('/js/comentarios.js') }}"></script>
    <script src="{{ asset('/js/perfil.js') }}"></script>

</x-app-layout>