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
    }


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