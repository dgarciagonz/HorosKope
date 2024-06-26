<x-app-layout>
@if($citas->isEmpty() && $citasP->isEmpty())
    @if(Auth::user()->rol=='pitonisa')
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="text-center">No tienes ninguna cita programada</p>
                </div>
            </div>
        </div>
    @else
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-21 text-center">
                    <p class="text-center">No tienes ninguna cita programada</p>
                    <button class="btn btn-primary btn-lg btn-block" onclick="location.href='{{ route('tarot') }}'">Pedir Cita</button>
                </div>
            </div>
        </div>
    @endif


@else
    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <table class="table text-center">
                @if(Auth::user()->rol!='pitonisa')
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Pitonisa</th>
                            <th>Configuración</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        <tr>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->pitonisa->username }}</td>
                            <td class="d-flex justify-content-around">
                                

                                <form id="editar{{ $cita->id_cita }}" action="{{ route('editarCita', ['id_cita' => $cita->id_cita]) }}" method="POST">
                                        @csrf
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editaCita{{ $cita->id_cita }}">
                                        <i class="fa-solid fa-pencil" style="color: #B197FC;"></i></i></button>


                                        <div class="modal fade" id="editaCita{{ $cita->id_cita }}" tabindex="-1" aria-labelledby="editaCita{{ $cita->id_cita }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body text-start">
                                                        
                                                    <label for="pitonisa">Cambiar pitonisa:</label>
                                                    <select name="pitonisa" id="pitonisa" class="form-control">
                                                        <option value="" disabled selected>----</option>
                                                        @foreach ($pitonisas as $pitonisa)
                                                            <option value="{{ $pitonisa->id_usuario }}">{{ $pitonisa->username }}</option>
                                                        @endforeach
                                                    </select>

                                                    <label for="fecha" >Nueva fecha para la cita:</label>
                                                    <select name="fecha" id="fecha" class="form-control">

                                                    </select>
                                                        
                                                    </div>
                                                      
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn color-boton" id="guardarCita" disabled>Cambiar cita</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <form action="{{ route('borrarCita', ['id_cita' => $cita->id_cita]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa-solid fa-trash" style="color: #B197FC;"></i></button>
                                </form>

                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                @else
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Configuración</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citasP as $cita)
                        <tr>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->usuario->username }}</td>
                            <td class="d-flex justify-content-around">
                                

                                <form id="editar{{ $cita->id_cita }}" action="{{ route('editarCita', ['id_cita' => $cita->id_cita]) }}" method="POST">
                                        @csrf
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editaCita{{ $cita->id_cita }}">
                                        <i class="fa-solid fa-pencil" style="color: #B197FC;"></i></i></button>


                                        <div class="modal fade" id="editaCita{{ $cita->id_cita }}" tabindex="-1" aria-labelledby="editaCita{{ $cita->id_cita }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body text-start">
                                                        
                                                    <label for="fecha">Nueva fecha para tu cita:</label>
                                                    <select name="fecha" id="fechaP" class="form-control">
                                                    <input type="text" name="pitonisa" id="pitonisaAct" hidden class="form-control hidden" value="{{ Auth::User()->id_usuario }}">       
                                                        
                                                    </div>
                                                      
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit"  class="btn btn-danger" >Cambiar cita</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <form action="{{ route('borrarCita', ['id_cita' => $cita->id_cita]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa-solid fa-trash" style="color: #B197FC;"></i></button>
                                </form>

                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                @endif    
                </table>
            </div>

            <div class="col-md-4 text-center">
                <button class="btn color-boton btn-lg btn-block" onclick="location.href='{{ route('tarot') }}'">Pedir Cita</button>
            </div>
            
        </div>
@endif    

<script src="{{ asset('/js/fechas.js') }}"></script>

</x-app-layout>
