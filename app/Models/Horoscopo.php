<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horoscopo extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'signo', 
        'descripcion', 
        'formato', 
        'fecha'
        ];

    public function signo()
    {
        return $this->belongsTo(Signo::class, 'id_signo');
    }
}