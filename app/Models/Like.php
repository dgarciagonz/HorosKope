<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_publicacion',
        'id_usuario',
    ];

    public function publicacion_like()
    {
        return $this->belongsToMany(Publicacione::class, 'id_publicacion');
    }


    public function usuario_like()
    {
        return $this->belongsToMany(User::class, 'id_usuario');
    }

}

