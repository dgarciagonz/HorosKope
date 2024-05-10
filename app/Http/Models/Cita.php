<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $primaryKey = 'id_cita';
    public $timestamps = false;

    protected $fillable = [
        'id_pitonisa',
        'id_usuario',
        'fecha',
    ];

    public function pitonisa()
    {
        return $this->belongsTo(User::class, 'id_pitonisa');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
