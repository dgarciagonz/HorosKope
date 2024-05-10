<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Publicacione;
use App\Models\Seguidore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
    
}