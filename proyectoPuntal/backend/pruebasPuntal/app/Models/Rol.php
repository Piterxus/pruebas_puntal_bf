<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'rol';
    protected $primaryKey = 'RolID';

    protected $fillable = [
        'RolID',
        'NombreRol',
        'Permisos',
        'Descripcion',
       
    ];

    public function concesionarios()
    {
       return $this->belongsToMany(Concesionario::class, 'concesionario_rol', 'RolID', 'UsuarioID');
    }
    public function usuarios(){
        return $this->hasMany(Usuario::class, 'RolID');
    }
}
