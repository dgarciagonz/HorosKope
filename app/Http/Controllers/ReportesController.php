<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informe;
use App\Models\Publicacione;
use App\Models\Baneo;
use App\Models\Comentario;
use Carbon\Carbon;
use App\Models\User;


class ReportesController extends Controller
{
    public function reportarPublicacion(Request $request, $id_publicacion)
    {     
            //Tiempo actual en segundos, lo pasamos al formato de fecha con horas minutos y segundos para la base de datos
            $timestamp = time();
            $fecha = date("Y-m-d H:i:s", ($timestamp+7200));

            //Creamos el objeto Informe y añadimos los datos
            Informe::create([
                'id_publicacion' => $id_publicacion,
                'id_usuario' => $request->idUsuarioR,
                'id_comentario' => null,
                'motivo'=>$request->motivo,
                'fecha_creacion'=>$fecha,
                'solucion'=>null,
            ]);

            return redirect()->back();
    }

    public function reportarUser(Request $request, $id_user)
    {     
            //Tiempo actual en segundos, lo pasamos al formato de fecha con horas minutos y segundos para la base de datos
            $timestamp = time();
            $fecha = date("Y-m-d H:i:s", ($timestamp+7200));

            //Creamos el objeto Informe y añadimos los datos
            Informe::create([
                'id_publicacion' => null,
                'id_usuario' => $id_user,
                'id_comentario' => null,
                'motivo'=>$request->motivo,
                'fecha_creacion'=>$fecha,
                'solucion'=>null,
            ]);

            return redirect()->back();
    }

    public function reportarComentario(Request $request, $id_comentario)
    {     
            //Tiempo actual en segundos, lo pasamos al formato de fecha con horas minutos y segundos para la base de datos
            $timestamp = time();
            $fecha = date("Y-m-d H:i:s", ($timestamp+7200));

            //Creamos el objeto Informe y añadimos los datos
            Informe::create([
                'id_publicacion' => null,
                'id_usuario' => $request->idUsuarioR,
                'id_comentario' => $id_comentario,
                'motivo'=>$request->motivo,
                'fecha_creacion'=>$fecha,
                'solucion'=>null,
            ]);

            return redirect()->back();
    }

    public function verInformes()
    {     
        //Selecionamos todos los informes ordenandolos por el mas reciente
        $informes = Informe::orderByDesc('fecha_creacion')->get();

        return view('informes')->with('informes',$informes);
    }

    public function editarInformeUser(Request $request,$id_reporte)
    {
        $informe = Informe::findOrFail($id_reporte);

        //Actualizamos los campos del informe
        Informe::where('id_reporte', $id_reporte)->update([
            'solucion'=>$request->motivo,
        ]);

        $fechaBann=null;


        switch ($request->motivo) {
            case 'Contenido común, omitido':
                break;
            case 'Eliminación de contenido':
                //Ocultamos la publicacion baneada
                Publicacione::where('id_creador', $informe->id_usuario)->update([
                    'visible'=>false,
                ]);

                Comentario::where('id_usuario', $informe->id_usuario)->update([
                    'visible'=>false,
                ]);
                break;
            case 'Baneo de una semana':
                $fechaBann = Carbon::today()->addWeek();
                break;
            case 'Baneo de dos semanas':
                $fechaBann = Carbon::today()->addWeeks(2);
                break;
            case 'Baneo de un mes':
                $fechaBann = Carbon::today()->addMonth();
                break;
            case 'Baneo de tres meses':
                $fechaBann = Carbon::today()->addMonths(3);
                break;
            case 'Baneo permanente':
                $fechaBann = Carbon::today()->addYears(150);
                break;
        }

        if($fechaBann!=null){

            //Ocultamos la publicacion baneada
            Publicacione::where('id_creador', $informe->id_usuario)->update([
                'visible'=>false,
            ]);
            Comentario::where('id_usuario', $informe->id_usuario)->update([
                'visible'=>false,
            ]);

            //Creamos el baneo
            Baneo::create([
                'id_reporte' => $informe->id_reporte,
                'id_usuario' => $informe->id_usuario,
                'fecha_finalizacion' => $fechaBann,
            ]);

            //Aplicamos el baneo al usuario
            User::where('id_usuario', $informe->id_usuario)->update([
                'estado'=>false,
            ]);
        }
        

        return redirect('informes');    
    }


    public function editarInformePublicacion(Request $request,$id_reporte)
    {
        $informe = Informe::findOrFail($id_reporte);

        //Actualizamos los campos del informe
        Informe::where('id_reporte', $id_reporte)->update([
            'solucion'=>$request->motivo,
        ]);

        $fechaBann=null;


        switch ($request->motivo) {
            case 'Contenido común, omitido':
                break;
            case 'Eliminación de contenido':
                //Ocultamos la publicacion baneada
                Publicacione::where('id_publicacion', $informe->id_publicacion)->update([
                    'visible'=>false,
                ]);
                break;
            case 'Baneo de una semana':
                $fechaBann = Carbon::today()->addWeek();
                break;
            case 'Baneo de dos semanas':
                $fechaBann = Carbon::today()->addWeeks(2);
                break;
            case 'Baneo de un mes':
                $fechaBann = Carbon::today()->addMonth();
                break;
            case 'Baneo de tres meses':
                $fechaBann = Carbon::today()->addMonths(3);
                break;
            case 'Baneo permanente':
                $fechaBann = Carbon::today()->addYears(150);
                break;
        }

        if($fechaBann!=null){

            //Ocultamos la publicacion baneada
            Publicacione::where('id_publicacion', $informe->id_publicacion)->update([
                'visible'=>false,
            ]);

            //Creamos el baneo
            Baneo::create([
                'id_reporte' => $informe->id_reporte,
                'id_usuario' => $informe->id_usuario,
                'fecha_finalizacion' => $fechaBann,
            ]);

            //Aplicamos el baneo al usuario
            User::where('id_usuario', $informe->id_usuario)->update([
                'estado'=>false,
            ]);
        }
        

        return redirect('informes');    
    }

    public function editarInformeComentario(Request $request,$id_reporte)
    {
        $informe = Informe::findOrFail($id_reporte);

        //Actualizamos los campos del informe
        Informe::where('id_reporte', $id_reporte)->update([
            'solucion'=>$request->motivo,
        ]);

        $fechaBann=null;


        switch ($request->motivo) {
            case 'Contenido común, omitido':
                break;
            case 'Eliminación de contenido':
                //Ocultamos la publicacion baneada
                Comentario::where('id_comentario', $informe->id_comentario)->update([
                    'visible'=>false,
                ]);
                break;
            case 'Baneo de una semana':
                $fechaBann = Carbon::today()->addWeek();
                break;
            case 'Baneo de dos semanas':
                $fechaBann = Carbon::today()->addWeeks(2);
                break;
            case 'Baneo de un mes':
                $fechaBann = Carbon::today()->addMonth();
                break;
            case 'Baneo de tres meses':
                $fechaBann = Carbon::today()->addMonths(3);
                break;
            case 'Baneo permanente':
                $fechaBann = Carbon::today()->addYears(150);
                break;
        }

        if($fechaBann!=null){

            //Ocultamos la publicacion baneada
            Comentario::where('id_comentario', $informe->id_comentario)->update([
                'visible'=>false,
            ]);

            //Creamos el baneo
            Baneo::create([
                'id_reporte' => $informe->id_reporte,
                'id_usuario' => $informe->id_usuario,
                'fecha_finalizacion' => $fechaBann,
            ]);

            //Aplicamos el baneo al usuario
            User::where('id_usuario', $informe->id_usuario)->update([
                'estado'=>false,
            ]);
        }
        

        return redirect('informes');    
    }
}