<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Publicacione;
use App\Models\Seguidore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;



class BuscadorController extends Controller
{

    public function buscarDefault(Request $request)
    {
        // Obtener el contenido de búsqueda desde la solicitud
        $contenidoBusqueda = $request->input('query');

        // Realizar la búsqueda en usuarios y publicaciones
        $usuarios = User::where('username', 'like', '%' . $contenidoBusqueda . '%')
                                ->where('estado',true)
                                ->get();

        $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                    ->where('visible',true)
                                    ->orderBy('fecha_creacion','desc')                            
                                    ->get();

        // Pasar los resultados a la vista
        return view('buscar')->with('perfiles', $usuarios)->with('publicaciones', $publicaciones);
    }

    public function buscarConFiltros(Request $request)
    {
        //Cogemos las fecha de Hoy, la semana pasada y el mes pasado.
        $hoy = Carbon::today();
        
         //Obtener el contenido de búsqueda desde la solicitud
         $contenidoBusqueda = $request->input('query');

         $publicaciones=null;

         if($request->fechas){
            switch ($request->fechas) {
                case 'semana':
                    $semanaPasada = $hoy->copy()->subWeek();
                    if ($request->usuar == 'seguidos'){
                        //ID del usuario
                        $userId = Auth::id();

                        //Usuarios seguidos por el usuario
                        $usuariosSeguidos = Seguidore::select('id_seguido')
                                            ->where('id_seguidor', '=', $userId)
                                            ->get();

                        //Publicaciones de los usuarios seguidos
                        $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                        ->whereIn('id_creador', $usuariosSeguidos)
                                        ->where('visible', true)
                                        ->whereDate('fecha_creacion', '>=', $semanaPasada)
                                        ->whereDate('fecha_creacion', '<=', $hoy)
                                        ->orderByDesc('fecha_creacion')
                                        ->get();
                    }else{
                        
                        $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                        ->where('visible',true)
                                        ->whereDate('fecha_creacion', '>=', $semanaPasada)
                                        ->whereDate('fecha_creacion', '<=', $hoy)
                                        ->orderBy('fecha_creacion','desc')                            
                                        ->get();

                        
                    }

                    break;
                case 'mes':
                    $mesPasado = $hoy->copy()->subMonth();

                    if ($request->usuar == 'seguidos'){
                        //ID del usuario
                        $userId = Auth::id();

                        //Usuarios seguidos por el usuario
                        $usuariosSeguidos = Seguidore::select('id_seguido')
                                            ->where('id_seguidor', '=', $userId)
                                            ->get();

                        //Publicaciones de los usuarios seguidos
                        $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                        ->whereIn('id_creador', $usuariosSeguidos)
                                        ->where('visible', true)
                                        ->whereDate('fecha_creacion', '>=', $mesPasado)
                                        ->whereDate('fecha_creacion', '<=', $hoy)
                                        ->orderByDesc('fecha_creacion')
                                        ->get();
                    }else{
                        
                        $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                        ->where('visible',true)
                                        ->whereDate('fecha_creacion', '>=', $mesPasado)
                                        ->whereDate('fecha_creacion', '<=', $hoy)
                                        ->orderBy('fecha_creacion','desc')                            
                                        ->get();
                    }

                    break;
            }
        }else{
            if ($request->usuar == 'seguidos'){
                //ID del usuario
                $userId = Auth::id();

                //Usuarios seguidos por el usuario
                $usuariosSeguidos = Seguidore::select('id_seguido')
                                    ->where('id_seguidor', '=', $userId)
                                    ->get();

                //Publicaciones de los usuarios seguidos
                $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                ->whereIn('id_creador', $usuariosSeguidos)
                                ->where('visible', true)
                                ->orderByDesc('fecha_creacion')
                                ->get();
            }else{
                
                $publicaciones = Publicacione::where('contenido', 'like', '%' . $contenidoBusqueda . '%')
                                ->where('visible',true)
                                ->orderBy('fecha_creacion','desc')                            
                                ->get();
            }
        }

        



        //Realizar la búsqueda en usuarios y publicaciones
        $usuarios = User::where('username', 'like', '%' . $contenidoBusqueda . '%')
                                ->where('estado',true)
                                ->get();

        //Pasar los resultados a la vista
        return view('buscar')->with('perfiles', $usuarios)->with('publicaciones', $publicaciones);
    }
}

