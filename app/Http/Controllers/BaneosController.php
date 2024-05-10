<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Baneo;


class BaneosController extends Controller
{

    public function verBans()
        {     
            //Selecionamos todos los informes ordenandolos por el mas reciente
            $baneos = Baneo::orderByDesc('id_baneo')->get();

            return view('baneos')->with('baneos',$baneos);
        }
}