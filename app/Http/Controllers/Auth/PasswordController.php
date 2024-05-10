<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Redirect;


class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $contr=$request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        if ($contr) {
            return Redirect::route('profile.edit')->with('success', 'Contraseña actualizada con çexito');
        } else{
            return Redirect::route('')->with('error','');
        }
    }
}
