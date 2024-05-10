<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Controllers\UsernameUnico;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'lowercase', 'regex:/^[a-zA-Z0-9_]+$/u', new UsernameUnico],
            'correo' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'fecha_nacimiento' => ['required','date'],
        ]);

        
        $mes = date('m', strtotime($request->fecha_nacimiento));
        $dia = date('d', strtotime($request->fecha_nacimiento));
        $signo='01';

        switch ($mes) {
            case '01':
                if ($dia <= 20) {
                    $signo= 1;
                } else {
                    $signo= 2;
                }
                break;

            case '02':
                if ($dia <= 19) {
                    $signo=2;
                } else {
                    $signo=3;
                }
                break;
            
            case '03':
                if ($dia <= 20) {
                    $signo= 3;
                } else {
                    $signo= 4;
                }
                break;  

            case '04':
                if ($dia <= 20) {
                    $signo=4;
                } else {
                    $signo=5;
                }
                break;

            case '05':
                if ($dia <= 21) {
                    $signo=5;
                } else {
                    $signo= 6;
                }
                break;

            case '06':
                if ($dia <= 21) {
                    $signo= 6;
                } else {
                    $signo= 7;
                }
                break;

            case '07':
                if ($dia <= 22) {
                    $signo= 7;
                } else {
                    $signo= 8;
                }
                break;
    
            case '08':
                if ($dia <= 22) {
                    $signo= 8;
                } else {
                    $signo= 9;
                }
                break;
                
            case '09':
                if ($dia <= 22) {
                    $signo= 9;
                } else {
                    $signo= 10;
                }
                break;  

            case '10':
                if ($dia <= 22) {
                    $signo= 10;
                } else {
                    $signo= 11;
                }
                break;
    
            case '11':
                if ($dia <= 21) {
                    $signo= 11;
                } else {
                    $signo= 12;
                }
                break;
    
            case '12':
                if ($dia <= 21) {
                    $signo= 12;
                } else {
                    $signo= 1;
                }
                break;
            default:
            $signo= null;
                break;
        }


        $user = User::create([
            'username' => $request->username,
            'correo' => $request->correo,
            'password' => Hash::make($request->password),
            'estado' => true,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'id_signo'=> $signo,
            'rol'=> 'usuario',
            'icono' => '/profile_pic/blank.png',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }
}
