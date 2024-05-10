<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Seguidore;

class SeguidorController extends Controller
{
    public function seguirUsuario($idUsuario)
    {
        //Buscamos el usuario a seguir
        $usuarioSeguido = User::findOrFail($idUsuario);
        
        //Buscamos el usuario actual
        $userActual = Auth::id();
        $datosUser = User::findOrFail($userActual);

        $n_seguidos = Seguidore::select('id_seguido')
                                ->where('id_seguidor', '=', $userActual)
                                ->where('id_seguido', '=', $idUsuario)
                                ->count();

        //Comprobamos si el usuario ya sigue al usuario del perfil, si todavia no lo hace, crea la relación
        if ($n_seguidos == 0) {
            $seguidor = new Seguidore();
            $seguidor->id_seguidor = $datosUser->id_usuario;
            $seguidor->id_seguido = $usuarioSeguido->id_usuario;
            $seguidor->save();
        }

        return redirect()->back();
    }

    public function unfollowUsuario($idUsuario)
{

    //Buscamos el usuario actual
    $userActual = Auth::id();

    //Buscamos el usuario a dejar de seguir
    $usuarioSeguido = User::findOrFail($idUsuario);

    // Buscar y eliminar el registro
    Seguidore::where('id_seguidor', $userActual)
            ->where('id_seguido', $usuarioSeguido->id_usuario)
            ->delete();

    return redirect()->back();
}
}