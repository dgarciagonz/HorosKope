<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baneo extends Model
{
    protected $primaryKey = 'id_baneo';
    public $timestamps = false;

    protected $fillable = [
        'id_reporte',
        'id_usuario',
        'fecha_finalizacion',
    ];

    public function reporte()
    {
        return $this->belongsTo(Informe::class, 'id_reporte');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
