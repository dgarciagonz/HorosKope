<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UsernameUnico implements Rule
{
    public function passes($attribute, $value)
    {
        return !User::where('username', $value)->exists();
    }

    public function message()
    {
        return 'El nombre de usuario ya está en uso.';
    }
}