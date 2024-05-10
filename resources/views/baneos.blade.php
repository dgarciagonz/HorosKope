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

    @if($baneos->IsEmpty())
    <div class="container pt-5">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <p class="text-center">Todavia no hay baneos</p>
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
                                <th>Id.Informe</th>
                                <th>Usuario</th>
                                <th>Fecha Finalización</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($baneos as $baneo)
                            <tr>
                                <td>{{$baneo->id_reporte}}
                                    @if($baneo->reporte->id_comentario == null)

                                        <button type="button" data-bs-toggle="modal" data-bs-target="#verPublicacion{{ $baneo->reporte->id_publicacion }}">
                                        <i class="fa-solid fa-magnifying-glass" style="color: #B197FC;"></i></button>

                                        <div class="modal fade" id="verPublicacion{{ $baneo->reporte->id_publicacion }}" tabindex="-1" aria-labelledby="verPublicacion{{ $baneo->reporte->id_publicacion }} Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body text-start">
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
                                                                <td>{{ $baneo->reporte->fecha_creacion}}</td>
                                                                <td>{{ $baneo->reporte->id_publicacion}}</td>
                                                                <td>{{ $baneo->reporte->user->username}}</td>
                                                                <td>{{ $baneo->reporte->motivo}}</td>
                                                                <td>{{ $baneo->reporte->solucion}}</td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @else

                                    <button type="button" data-bs-toggle="modal" data-bs-target="#verComentario{{ $baneo->reporte->id_comentario }}">
                                        <i class="fa-solid fa-magnifying-glass" style="color: #B197FC;"></i></button>

                                        <div class="modal fade" id="verComentario{{ $baneo->reporte->id_comentario }}" tabindex="-1" aria-labelledby="verComentario{{ $baneo->reporte->id_comentario }} Label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body text-start">
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
                                                                <td>{{ $baneo->reporte->fecha_creacion}}</td>
                                                                <td>{{ $baneo->reporte->id_comentario}}</td>
                                                                <td>{{ $baneo->reporte->user->username}}</td>
                                                                <td>{{ $baneo->reporte->descripcion}}</td>
                                                                <td>{{ $baneo->reporte->solucion}}</td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endif

                                </td>
                                <td>{{ $baneo->usuario->username }}</td> 
                                <td>{{ $baneo->fecha_finalizacion }}</td>                                     
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    @endif    

@endif


</x-app-layout>