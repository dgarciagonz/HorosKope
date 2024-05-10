<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
    
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('correo')) {
            $request->user()->email_verified_at = null;
        }

        if ($request->user()->save()) {
            return Redirect::route('profile.edit')->with('success', 'Cambios realizados con éxito');
        } else {
            return Redirect::route('profile.edit')->with('error', 'No se ha podido cambiar el correo');
        }
    }

    public function updateFoto(Request $request)
    {
        $user = Auth::user();

        //Validar la imagen
        $request->validate([
            'icono' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //verifica si el campo no esta vacio
        if ($request->hasFile('icono')) {

            // Obtener el archivo de imagen del formulario
            $icono = $request->file('icono');

            // Generar un nombre único para la imagen
            $iconoNombre = time() . '.' . $icono->getClientOriginalExtension();

            //Almacenar la imagen en public/profile_pic
            Storage::putFileAs('public/profile_pic', $icono, $iconoNombre);

            //Actualiza el campo icono en la base de datos con la ruta de la nueva imagen
            $user->icono = 'storage/profile_pic/' . $iconoNombre;
            
            if ($user->save()) {
                return Redirect::route('profile.edit')->with('success', '¡Cambios realizados con éxito!');
            } else {
                return Redirect::route('profile.edit')->with('error', 'No se ha podido cambiar la foto de perfil');
            }
        }else{
            return Redirect::route('profile.edit')->with('error', 'No se ha podido cambiar la foto de perfil');
        }

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
