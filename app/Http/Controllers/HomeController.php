<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Publicacione;
use App\Models\Seguidore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function cargarInicio(){

    //ID del usuario
    $userId = Auth::id();

    //Usuarios seguidos por el usuario
    $usuariosSeguidos = Seguidore::select('id_seguido')
            ->where('id_seguidor', '=', $userId)
            ->get();

    
    //Publicaciones de los usuarios seguidos
    $postSeguidos = Publicacione::whereIn('id_creador', $usuariosSeguidos)
                    ->where('visible', true)
                    ->orderByDesc('fecha_creacion')
                    ->get();

    //Publicaciones del usuario
    $postUsuario = Publicacione::where('id_creador', $userId)
                ->where('visible', true)
                ->orderByDesc('fecha_creacion')
                ->get();

    $numPublis=count($postSeguidos);
    $recientes=null;
    if($numPublis > 0){

        //Coge las 10 ultimas publicaciones que no sean del usuario ni de los usuarios a los que sigue
        $recientes = Publicacione::where('visible', true)
        ->where('id_creador','!=', $userId) 
        ->whereNotIn('id_creador', $usuariosSeguidos) 
        ->orderByDesc('fecha_creacion')
        ->take(10)
        ->get();

            
    }else{
        //Coge las 10 ultimas publicaciones que no sean del usuario
        $recientes = Publicacione::where('visible', true)
        ->where('id_creador','!=', $userId) 
        ->orderByDesc('fecha_creacion')
        ->take(10)
        ->get();

    }
    //Añadir todas las publicaciones
    $posts = $postSeguidos->concat($postUsuario);
    $posts = $posts->concat($recientes);
    
    //Ordenar publicaciones por fecha
    $posts = $posts->sortByDesc('fecha_creacion');

    /*Devuelve la vista de la página Horoskope con un array asociativo llamado 'publicaciones' 
    que contiene las publicaciones de los seguidos y el usuario */
    return view('home')->with('publicaciones', $posts);
    }


    
}
