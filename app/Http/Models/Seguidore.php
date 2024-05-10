<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seguidore extends Model
{
    public $incrementing = false;

    public function seguidor()
    {
        return $this->belongsToMany(User::class, 'id_seguidor');
    }
    public function seguido()
    {
        return $this->belongsToMany(User::class, 'id_seguido');
    }

    public $timestamps = false;

}