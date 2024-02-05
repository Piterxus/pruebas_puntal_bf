<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrativo extends Usuario
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'administrativo';

  
    protected $fillable = [
        'UsuarioID',
    
    ];

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class, 'UsuarioID');
    }

    public function plazas(){
        return $this->belongsToMany(Plaza::class, 'administrativo_plaza', 'UsuarioID', 'PlazaID');
    }
}
