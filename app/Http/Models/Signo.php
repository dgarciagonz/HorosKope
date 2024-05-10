<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signo extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_signo';

    protected $fillable = [
        'nombre',
        'descripcion'
        ];

    public function horoscopos()
    {
        return $this->hasMany(Horoscopo::class, 'id_signo');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'signo');
    }
}
