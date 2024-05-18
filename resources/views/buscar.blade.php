<x-app-layout>

<div class="container-fluid">
    <div class="row d-flex justify-content-around">
    
        <div class="col-lg-8 ">
            <div class="row">
                <div class="d-flex align-items-center mt-4 mb-4">
                <form method="POST" action="{{ route('buscarF') }}" class="d-flex flex-grow-1 me-2" role="search">
                        @csrf   
                        <input class="form-control me-2" id="contenidoBusqueda" type="search" placeholder="Buscar" aria-label="Search" name="query">
                        <button class="btn color-boton textoB" id="buscador" type="submit" disabled>Buscar</button>
                    
                </div>
                

                <div class="d-flex justify-content-around rounded">
                    <a class="col-md-6 noSub2 bordeizq text-center p-2 color-boton btnActivado" id="texto_posts" onclick="mostrarPo('bloque_posts', 'bloque_perfiles')">Publicaciones</a>
                    <a class="col-md-6 noSub2 bordeder text-center p-2 color-boton" id="texto_perfiles" onclick="mostrarPe('bloque_perfiles', 'bloque_posts')">Usuarios</a>
                </div>
                <div id="bloque_perfiles" style="display:none">
                    @if($perfiles->isEmpty())
                        <div class="col-md-12 mb-4">
                            <div class="card border-0">
                                <div class="card-body rounded usuario">
                                    <p class="card-text">No hay ningun perfin que coincida en esta búsqueda</p>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach($perfiles as $perfil)
                                    <div class="col-md-12 pb-2">
                                        <div class="card border-0">
                                            <div class="card-body rounded usuario">
                                                <div class="d-flex align-items-center mb-1">
                                                    <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                                                        <img src="{{ asset($perfil->icono) }}" class="w-100 h-100 object-fit-cover object-center">
                                                    </div>
                                                    <h5 class="card-title mb-0 ms-2"><a class="noSub" href="{{ url('perfil/' . $perfil->username) }}">{{ $perfil->username }}</a></h5>
                                                </div>  
                                                                        
                                            </div>
                                        </div>
                                    </div>
                        @endforeach
                    @endif
                </div>
                
                <div id="bloque_posts" style="display:block">
                    @if($publicaciones->isEmpty())
                        <div class="col-md-12 mb-4">
                            <div class="card border-0">
                                <div class="card-body rounded publicacion">
                                    <p class="card-text">No hay ninguna publicación que coincida en esta búsqueda</p>
                                </div>
                            </div>
                        </div>
                    @else
                        @foreach($publicaciones as $publicacion)
                            @if($publicacion->user->estado)
                            <div class="col-md-12 pb-2">
                                <div class="card wow fadeInDown border-0">
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
                                                    <p>
                                                        <button type="submit"> <i class="fa-solid fa-heart" style="color: #FF0DDC;"></i> {{ $publicacion->likes->count() }}</button>
                                                    </p>
                                            @else
                                                    <p>
                                                        <button type="submit"> <i class="fa-regular fa-heart" style="color: #FF0DDC     ;"></i> {{ $publicacion->likes->count() }}</button>
                                                    </p>
                                            @endif
                                        </p>
                                    </div>

                                    <div class="col-4 text-center">
                                        <p class="card-text comentario">
                                            <button><i class="fa-regular fa-comment" style="color: #FF0DDC;"></i> {{ $publicacion->comentarios->count() }} </button> 
                                        </p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    
                            @endif
                        @endforeach
                        
                    @endif
                    </div>
                </div>
            </div>
        
        <div class="col-lg-3 sticky-top z-0 d-none d-lg-block" style="height: 90vh">
            <div class="row d-none d-md-flex flex-column justify-content-around mt-5">
                <div class="d-none d-md-flex justify-content-around rounded col-md-12 publicacion p-3">
                    <div>
                        <div class="m-2">
                                <h3 class="tit">Usuarios</h3>
                                <div class="form-check tit">
                                    <input class="form-check-input" type="radio" name="usuar" id="todos" value="todos" checked>
                                    <label class="form-check-label" for="todos">
                                        Cualquiera
                                    </label>
                                </div>
                                <div class="form-check tit ">
                                    <input class="form-check-input" type="radio" name="usuar" id="seguidos" value="seguidos">
                                    <label class="form-check-label" for="seguidos">
                                        Seguidos
                                    </label>
                                </div>
                            </div>
                        
                    </div>
                    <div>
                        
                            <div class="m-2">
                                <h3 class="tit">Publicaciones</h3>
                                <div class="form-check tit">
                                    <input class="form-check-input" type="radio" name="fechas" id="semana" value="semana">
                                    <label class="form-check-label" for="semana">
                                        Última semana
                                    </label>
                                </div>
                                <div class="form-check tit">
                                    <input class="form-check-input" type="radio" name="fechas" id="mes" value="mes">
                                    <label class="form-check-label" for="mes">
                                        Último Mes
                                    </label>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                <div class="col-md-12 mt-4 mb-4">
                <div class="d-flex justify-content-between">
                        <div class="col-md-12 ">
                            <h5 class="tit  mb-0">Soporte</h5>
                            <ul class="list-group list-group-flush subtext">
                                <li ><p class="subtext">soporte@horsokope.com</p></li>
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

<script src="{{ asset('/js/buscador.js') }}"></script>

</x-app-layout>
