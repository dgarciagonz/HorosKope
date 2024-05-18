<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cita;
use Carbon\Carbon;
use App\Models\User;


class CitasController extends Controller
{

    public function solicitarCita(Request $request)
    {
        //ID del usuario
        $userId = Auth::id();
        
        //Contenido de la Cita
        $fecha = $request->input('fecha');
        $pitonisa = $request->input('pitonisa');

        //Creamos el objeto Cita y añadimos los datos
        Cita::create([
            'id_pitonisa' => $pitonisa,
            'id_usuario' => $userId,
            'fecha' => $fecha,
        ]);
        
        return redirect('citas');    
    }

    public function fechas()
{
    $fechaInicio = Carbon::today()->addDay();
    $fechaInicio->setHour(18)->setMinute(0)->setSecond(0);
    $fechaFin = $fechaInicio->copy()->addDays(10);

    //Sacamos las citas de los proximos 10 dias
    $citas = Cita::whereBetween('fecha', [$fechaInicio, $fechaFin])
        ->get();

    //Creamos un array asociativo para las fechas ocupadas por cada pitonisa
    $fechasOcupadasPorPitonisa = [];

    foreach ($citas as $cita) {
        $fechaCita = $cita->fecha;
        $pitonisaId = $cita->id_pitonisa;

        //Guarda las fechas ocupadas por las pitonisas
        if (!isset($fechasOcupadasPorPitonisa[$pitonisaId])) {
            $fechasOcupadasPorPitonisa[$pitonisaId] = [];
        }

        //Agregar la fecha ocupada a la lista de la pitonisa correspondiente
        $fechasOcupadasPorPitonisa[$pitonisaId][] = $fechaCita;
    }

    //Crea un array asociativo con las citas disponibles por pitonisa
    $fechasDisponiblesPorPitonisa = [];
    $pitonisas = $this->pitonisas();

    foreach ($pitonisas as $pitonisa) {
        $idPitonisa = $pitonisa->id_usuario;

        $fechasDisponibles = [];

        for ($fecha = $fechaInicio->copy(); $fecha->lte($fechaFin); $fecha->addDay()) {
            $fechaActual = $fecha->setHour(18)->setMinute(0)->setSecond(0)->toDateTimeString();

            //Si la fecha actual no está en las fechas ocupadas, se añade a las disponibles
            if (in_array($fechaActual, $fechasOcupadasPorPitonisa[$idPitonisa])) {

            }else{
                $fechasDisponibles[] = [
                    'title' => 'Disponible',
                    'dia' => $fechaActual,
                ];
            }
        }

        //Guardar las fechas disponibles para esta pitonisa
        $fechasDisponiblesPorPitonisa[$idPitonisa] = $fechasDisponibles;
    }

    return $fechasDisponiblesPorPitonisa;
}

    public function fechasAjax($id_pitonisa)
    {
        //Obtener las fechas disponibles para la pitonisa seleccionada
        $fechas = $this->fechas();
        $fechasDisponibles = $fechas[$id_pitonisa];

        //Devolver los datos como respuesta JSON
        return response()->json($fechasDisponibles);
    }



    /*public function fechasUnaPitonisa()
    {
        $fechaInicio = Carbon::today()->addDay();
        $fechaInicio->setHour(18)->setMinute(0)->setSecond(0);
        $fechaFin=$fechaInicio->copy()->addDays(10);

        // Obtener las fechas dentro de 10 dias de las citas de la tabla Citas
        $fechasOcupadas = Cita::select('fecha')
        ->whereBetween('fecha', [$fechaInicio, $fechaFin])
        ->get();

        $fechasDisponibles = [];
        //Si ninguna fecha coincide, crea las siguientes 10
        if ($fechasOcupadas->isEmpty()) {
            //Si no hay citas ocupadas, todas las fechas están disponibles
            for ($fecha = $fechaInicio->copy(); $fecha->lte($fechaFin); $fecha->addDay()) {
                $fechaNueva = $fecha->format('Y-m-d H:i:s');
                $fechasDisponibles[] = [
                    'title' => 'Disponible',
                    'dia' => $fechaNueva,
                ];
            }
        } else {
            //Si hay citas ocupadas, comprueba cada fecha
            for ($fecha = $fechaInicio->copy(); $fecha->lte($fechaFin); $fecha->addDay()) {
                $fechaEstaOcupada = false;
        
                foreach ($fechasOcupadas as $fechaOcupada) {
                    if ($fecha->equalTo($fechaOcupada->fecha)) {
                        $fechaEstaOcupada = true;
                        break;
                    }
                }
        
                if (!$fechaEstaOcupada) {
                    $fechaNueva = $fecha->format('Y-m-d H:i:s');
                    $fechasDisponibles[] = [
                        'title' => 'Disponible',
                        'dia' => $fechaNueva,
                    ];
                }
            }
        }
        return ($fechasDisponibles);    
    }*/


    public function pitonisas(){
        $pitonisas = User::select('id_usuario','username')
        ->where('rol', '=', 'pitonisa')
        ->get();

        return ($pitonisas);
    }

    
    public function obtenerFechasDisponibles()
    {
        $fechasDisponibles = $this->fechas();
        $pitonisas = $this->pitonisas();

        return view('tarot')->with('fechas',$fechasDisponibles)->with('pitonisas',$pitonisas);
    }

    

    public function verCitas(){
        
        $userId = Auth::id();
        $citas = Cita::where('id_usuario','=', $userId)
                    ->where('fecha','>', Carbon::now())
                    ->orderBy('fecha','asc')
                    ->get();
             
        $citasPitonisa = Cita::where('id_pitonisa','=', $userId)
                    ->where('fecha','>', Carbon::now())
                    ->orderBy('fecha','asc')
                    ->get();

        $fechasDisponibles = $this->fechas();
        $pitonisas = $this->pitonisas();

        return view('citas')->with('citas',$citas)->with('citasP',$citasPitonisa)->with('fechas',$fechasDisponibles)->with('pitonisas',$pitonisas);
    }

    public function borrarCita($idCita){
        
        Cita::where('id_cita', $idCita)
        ->delete(); 

        return redirect()->back();    
    }

    public function editarCita(Request $request,$idCita)
    {
    
        //Contenido de la Cita
        $fecha = $request->input('fecha');
        $pitonisa = $request->input('pitonisa');

        //Guardamos la Cita con los nuevos los datos
        Cita::where('id_cita', $idCita)->update([
            'id_pitonisa' => $pitonisa,
            'fecha' => $fecha,
        ]);
        
        return redirect('citas');    
    }
}