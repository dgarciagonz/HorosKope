<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_comentario';

    protected $fillable = [
        'id_publicacion',
        'id_usuario',
        'fecha_creacion',
        'contenido',
        'media',
        'visible',
    ];

    public function publicacion()
    {
        return $this->belongsToMany(Publicacione::class, 'id_publicacion');
    }

    public function user()
{
    return $this->belongsTo(User::class, 'id_usuario');
}
}
