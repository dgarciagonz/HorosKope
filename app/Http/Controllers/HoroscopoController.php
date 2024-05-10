<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horoscopo;
use App\Models\Signo;
use Carbon\Carbon;


class HoroscopoController extends Controller
{
    public function index()
    {
        $signos = [1,2,3,4,5,6,7,8,9,10,11,12];

        //Creamos los arrays para guardar los horoscopos
    $horoscoposD = [];
    $horoscoposS = [];
    $horoscoposM = [];

    //Horoscopos diarios para cada signo
    foreach ($signos as $signo) {
        $horoscoposDiarios = Horoscopo::whereIn('signo', [$signo])
            ->where('formato', 'diario')
            ->orderByDesc('fecha')
            ->first();

        if ($horoscoposDiarios) {
            $horoscoposD[] = $horoscoposDiarios;
        }
    }

    //Horoscopos semanal para cada signo
    foreach ($signos as $signo) {
        $horoscoposSemanales = Horoscopo::whereIn('signo', [$signo])
            ->where('formato', 'semanal')
            ->orderByDesc('fecha')
            ->first();

        if ($horoscoposSemanales) {
            $horoscoposS[] = $horoscoposSemanales;
        }
    }

    //Horoscopos mensual para cada signo
    foreach ($signos as $signo) {
        $horoscoposMensuales = Horoscopo::whereIn('signo', [$signo])
            ->where('formato', 'mensual')
            ->orderByDesc('fecha')
            ->first();

        if ($horoscoposMensuales) {
            $horoscoposM[] = $horoscoposMensuales;
        }
    }

    $signosV=Signo::select('id_signo','nombre')->get();

        return view('horoscopo')->with('signos',$signosV)->with('diarios', $horoscoposD)->with('semanales',$horoscoposS)->with('mensuales',$horoscoposM);
    }

    public function nuevoHoroscopo(Request $request){

        Horoscopo::create([
            'signo' => $request->signo,
            'descripcion'=>$request->input('descripcion'),
            'fecha'=>Carbon::now(),
            'formato'=>$request->tipo,
        ]);

    return redirect('horoscopo');    
    }

}