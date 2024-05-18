<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carta extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_carta';

    protected $fillable = [
        'nombre',
        'imagen',
        'significado',
        'amor',
        'dinero',
        'salud',
        'posNeg',
    ];

    public $timestamps = false;

    public function coleccion()
    {
        return $this->hasMany(Colection::class, 'id_carta', 'id_carta');
    }

    public function usuarios()
{
    return $this->belongsToMany(User::class, 'colections', 'id_carta', 'id_usuario');
}
}
