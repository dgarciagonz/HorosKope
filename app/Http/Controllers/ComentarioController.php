<?php
namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class ComentarioController extends Controller
{

    public function crearComentario(Request $request)
        {
            $userId = Auth::id();
        
            //Contenido del comentario
            $contenidoComment = $request->input('nuevoComment');
            $id_publicacion = $request->input('id_publicacion');

            $foto=null;

            //Tiempo actual en segundos, lo pasamos al formato de fecha con horas minutos y segundos para la base de datos
            $fecha = Carbon::now();
            $fecha = $fecha->addHours(2);

            $validator = Validator::make($request->all(), [
                'newImagenC' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            
            if ($validator->fails()) {
                
            }else{
                if ($request->hasFile('newImagenC')) {
    
                    //Obtener el archivo de imagen del formulario
                    $imagen = $request->file('newImagenC');
        
                    //Generar un nombre único para la imagen
                    $nombreFotoComment = time().$userId . '.' . $imagen->getClientOriginalExtension();
        
                    //Almacenar la imagen en el disco
                    Storage::putFileAs('public/media_comentarios', $imagen, $nombreFotoComment);
        
                    //Guardamos la ruta en la variable
                    $foto = 'storage/media_comentarios/' . $nombreFotoComment;
    
                    //Creamos el objeto Comentario y añadimos los datos
                    Comentario::create([
                        'id_publicacion' => $id_publicacion,
                        'id_usuario' => $userId,
                        'contenido'=>$contenidoComment,
                        'fecha_creacion'=>$fecha,
                        'media'=>$foto,
                        'visible'=>true,
                ]);
                }else{
                    Comentario::create([
                        'id_publicacion' => $id_publicacion,
                        'id_usuario' => $userId,
                        'contenido'=>$contenidoComment,
                        'fecha_creacion'=>$fecha,
                        'media'=>null,
                        'visible'=>true,
                    ]);
                }
            }

            return redirect()->back();
        }



        public function borrarComentario($idComentario)
        {
            Comentario::where('id_comentario', $idComentario)
            ->delete();   

            return redirect()->back();
        }
    }

    