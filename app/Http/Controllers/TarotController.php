<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Colection;
use App\Models\Carta;

class TarotController extends Controller
{
    public function tirada($valor)
    {

        //Pedimos un numero aleatorio
        $numsGenerados = [];

        // Generar números aleatorios únicos
        while (count($numsGenerados) < 3) {
            $numRandom = rand(1, 78);
            if (!in_array($numRandom, $numsGenerados)) {
                $numsGenerados[] = $numRandom;
            }
        }

        //Buscamos la carta con ese indice
        $cartas = Carta::whereIn('id_carta', $numsGenerados)->get();

        //Obtener el usuario actual
        $usuario = auth()->user();

        //Obtener el significado dependiendo de la opcion seleccionada
        $significados = [];
    
        foreach ($cartas as $carta) {
            switch ($valor) {
                case 'amor':
                    $significados[] = $carta->amor;
                    break;
                case 'dinero':
                    $significados[] = $carta->dinero;
                    break;
                case 'salud':
                    $significados[] = $carta->salud;
                    break;
                default:
                    $significados[] = '';
                    break;
            }

        //Verificar si el usuario tiene la carta en su colección
        $tieneCarta = $usuario->cartas->contains($carta);
    
         //Si el usuario no tiene la carta, se añade a su coleccion
         if (!$tieneCarta) {
             $usuario->cartas()->attach($carta);
         }
         
        }
    
        //Devolver el significado de la carta
        return view('tirada')->with('significados', $significados)->with('cartas',$cartas)->with('valor',$valor);
    }

    public function pregunta(Request $pregunta)
    {
         //Pedimos un numero aleatorio
         $numRandom = rand(1, 78);

         $textoPregunta = $pregunta->input('pregunta');

         //Buscamos la carta con ese indice
         $carta = Carta::find($numRandom);
         
         //Obtener el usuario actual
         $usuario = auth()->user();
     
         //Verificar si el usuario tiene la carta en su colección
         $tieneCarta = $usuario->cartas->contains($carta);
     
         //Si el usuario no tiene la carta, se añade a su coleccion
         if (!$tieneCarta) {
             $usuario->cartas()->attach($carta);
         }
     
         //Devolver el significado de la carta
         return view('pregunta')->with('carta',$carta)->with('pregunta',$textoPregunta);
    }

    public function index()
    {
        // Obtener el usuario actualmente autenticado
        $user = Auth::user();
        // Obtener las cartas del usuario actual
        $cartas = $user->cartas()->orderBy('id_carta')->get();

        // Retornar la vista con las cartas ordenadas
        return view('coleccion')->with('cartas', $cartas);
    }
}