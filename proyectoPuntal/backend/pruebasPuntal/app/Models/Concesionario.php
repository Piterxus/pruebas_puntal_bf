<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concesionario extends Usuario
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'concesionario';
    protected $fillable = [

        'UsuarioID'
    ];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'concesionario_rol', 'UsuarioID', 'RolID');
    }

    public function instalaciones()
    {
        return $this->hasMany(Instalacion::class);
    }
}
