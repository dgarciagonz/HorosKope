<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Like;
use App\Models\Publicacione;
use App\Models\Seguidore;
use App\Models\Comentario;

class PerfilController extends Controller
{
    public function mostrar($nombre)
    {
        
        //Seleccionamos el id del usuario actual
        $userActual = Auth::id();
        $datosUser = User::findOrFail($userActual);

        //Buscamos el usuario y guardamos su id
        $usuario = User::where('username', $nombre)->firstOrFail();
        $idUsuario = $usuario->id_usuario;

        //Seleccionamos todas las publicaciones de ese usuario
        $posts = Publicacione::where('id_creador', $idUsuario)
                     ->where('visible', true)
                     ->orderBy('fecha_creacion', 'desc')
                     ->get();

        //Obtenemos el número de seguidores y seguidos de ese usuario
        $seguidos = Seguidore::select('id_seguido')
                                ->where('id_seguidor', '=', $idUsuario)
                                ->get();
        
        $seguidores = Seguidore::select('id_seguidor')
                                ->where('id_seguido', '=', $idUsuario)
                                ->get();

        $lista_seguidos = User::select('id_usuario','icono','username')->whereIn('id_usuario',$seguidos)->get();

        $lista_seguidores = User::select('id_usuario','icono','username')->whereIn('id_usuario',$seguidores)->get();
        
        //Obtenemos los comentarios del usuario
        $comentarios = Comentario::where('id_usuario', '=', $idUsuario)
                        ->where('visible',true)
                        ->orderBy('fecha_creacion', 'desc')
                        ->get();
        
        //Obtenemos los likes del usuario
        $publiLikes = Like::select('id_publicacion')
                    ->where('id_usuario','=',$idUsuario)
                    ->get();

        $publiConlikes = Publicacione::whereIn('id_publicacion', $publiLikes)
                ->where('visible', true)
                ->get();

        $nombreSigno = $usuario->signo->nombre;
        $descripcionSigno = $usuario->signo->descripcion;
        

        $publiLikes=$publiLikes->count();
        if($userActual==$idUsuario){
            return view('perfil')
            ->with('usuario', $usuario)
            ->with('usuarioActual',$datosUser)
            ->with('publicaciones',$posts)
            ->with('lista_seguidos', $lista_seguidos)
            ->with('lista_seguidores', $lista_seguidores)
            ->with('nombreSigno', $nombreSigno)
            ->with('descripcionSigno',$descripcionSigno)
            ->with('comentarios',$comentarios)
            ->with('numLikes',$publiLikes)
            ->with('publiLikes',$publiConlikes)
            ;
            
        }else{
            return view('perfil')
            ->with('usuario', $usuario)
            ->with('usuarioActual',$datosUser)
            ->with('publicaciones',$posts)
            ->with('lista_seguidos', $lista_seguidos)
            ->with('lista_seguidores', $lista_seguidores)
            ->with('nombreSigno', $nombreSigno)
            ->with('descripcionSigno',$descripcionSigno)
            ->with('comentarios',$comentarios)
            ->with('numLikes',$publiLikes)
            ->with('publiLikes',$publiConlikes)
            ;
        }
    }
}