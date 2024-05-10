<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function like($publicacionId)
    {
        $userActual = Auth::id();

        Like::create([
            'id_usuario' => $userActual,
            'id_publicacion' => $publicacionId,
        ]);
        return redirect()->back();
    }

    public function unlike($publicacionId)
    {
        $userActual = Auth::id();

        Like::where('id_usuario', $userActual)
            ->where('id_publicacion', $publicacionId)
            ->delete();
            
        return redirect()->back();
    }
}