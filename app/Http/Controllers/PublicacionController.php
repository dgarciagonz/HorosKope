<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacione;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class PublicacionController extends Controller
{
    public function NuevaPublicacion(Request $request)
    {
        //ID del usuario
        $userId = Auth::id();
        
        //Contenido de la publicacion
        $contenidoPost = $request->input('nuevoPost');

        $foto=null;

        //Tiempo actual
        $fecha = Carbon::now();
        $fecha = $fecha->addHours(2);

        $validator = Validator::make($request->all(), [
            'newImagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        if ($validator->fails()) {
            Publicacione::create([
                'id_creador' => $userId,
                'contenido'=>$contenidoPost,
                'fecha_creacion'=>$fecha,
                'media'=>null,
                'visible'=>true,
            ]);
        }else{
    
            if ($request->hasFile('newImagen')) {

                // Obtener el archivo de imagen del formulario
                $imagen = $request->file('newImagen');

                //Generar un nombre único para la imagen
                $nombreFotoPubli = time().$userId . '.' . $imagen->getClientOriginalExtension();

                //Almacenar la imagen en el disco
                Storage::putFileAs('public/media_publicaciones', $imagen, $nombreFotoPubli);

                //Guardamos la ruta en la variable
                $foto = 'storage/media_publicaciones/' . $nombreFotoPubli;

                //Creamos el objeto publicacion y añadimos los datos
                Publicacione::create([
                'id_creador' => $userId,
                'contenido'=>$contenidoPost,
                'fecha_creacion'=>$fecha,
                'media'=>$foto,
                'visible'=>true,
            ]);
            }else{
                Publicacione::create([
                    'id_creador' => $userId,
                    'contenido'=>$contenidoPost,
                    'fecha_creacion'=>$fecha,
                    'media'=>null,
                    'visible'=>true,
                ]);
            }
        }


        return redirect()->route('home');

    }
    public function mostrar($idPublicacion)
    {
        $publicacion = Publicacione::findOrFail($idPublicacion);

        $comentarios=Comentario::where('id_publicacion', $idPublicacion)
            ->orderByDesc('fecha_creacion')
            ->where('visible',true)
            ->get();

        return view('publicacion')->with('publicacion',$publicacion)->with('comentarios', $comentarios);
    }

    public function borrar($idPublicacion)
    {
        Publicacione::where('id_publicacion', $idPublicacion)
        ->delete();   

        return redirect()->back();
    }
}