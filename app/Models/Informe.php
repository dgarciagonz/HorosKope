<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $primaryKey = 'id_reporte';
    public $timestamps = false;
    protected $fillable = [
        'id_publicacion',
        'id_usuario',
        'id_comentario',
        'motivo',
        'solucion',
        'fecha_creacion'
    ];

    public function publicacion()
    {
        return $this->belongsTo(Publicacione::class, 'id_publicacion');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function comentario()
    {
        return $this->belongsTo(Comentario::class, 'id_comentario');
    }
}
