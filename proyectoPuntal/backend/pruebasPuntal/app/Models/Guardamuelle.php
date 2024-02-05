<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardamuelle extends Usuario
{
    use HasFactory, SoftDeletes;
    protected $table = 'guardamuelles';
    protected $fillable =[
        'UsuarioID',
    ];

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class, 'GuardamuellesID');
    }
    public function transitos()
    {
        return $this->hasMany(Transito::class, 'GuardamuellesID');
    }
}
