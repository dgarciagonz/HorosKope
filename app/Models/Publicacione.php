<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacione extends Model
{
    protected $primaryKey = 'id_publicacion';

    protected $fillable = [
        'id_creador',
        'contenido',
        'fecha_creacion',
        'media',
        'visible'
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'id_creador');
}

    public function likes()
    {
        return $this->hasMany(Like::class, 'id_publicacion');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_publicacion');
    }
    public $timestamps = false;
    
}