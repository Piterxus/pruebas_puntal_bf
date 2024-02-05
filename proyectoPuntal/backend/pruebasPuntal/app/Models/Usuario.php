<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'usuarios';
    protected $primaryKey = 'UsuarioID';

    protected $fillable = [
        'UsuarioID',
        'NombreCompleto',
        'NombreUsuario',
        'RolID',
        'Habilitado',
        'InstalacionID',
        'DNI',
        'Telefono',
        'Email',
        'Direccion',
        'Imagen',
        'Descripcion',

    ];

    public function rol(){
        return $this->belongsTo(Rol::class, 'RolID');
    }
}
