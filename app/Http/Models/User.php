<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'correo',
        'password',
        'estado',
        'fecha_nacimiento',
        'id_signo',
        'icono',
        'rol', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function seguidores()
    {
        return $this->hasMany(Seguidore::class, 'id_seguidor');
    }

    public function siguiendo()
    {
        return $this->hasMany(Seguidore::class, 'id_seguido');
    }

    public function publicaciones()
    {
        return $this->hasMany(Publicacione::class, 'id_creador');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'id_usuario');
    }
    
    public function coleccion()
    {
        return $this->hasMany(Colection::class, 'id_creador');
    }

    public function cartas()
    {
        return $this->belongsToMany(Carta::class, 'colections', 'id_usuario', 'id_carta');
    }

    public function signo()
    {
        return $this->belongsTo(Signo::class, 'id_signo');
    }

    public function informe()
    {
        return $this->hasMany(Informe::class, 'id_usuario');
    }
        
}
