<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instalacion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'instalacion';
    protected $primaryKey = 'InstalacionID';

    protected $fillable = [
        'InstalacionID',
        'CodigoInstalacion',
        'Ubicacion',
        'Dimensiones',
        'Descripcion',
        'Estado',
        'FechaCreacion',
    ];

    public function concesionario(){
        return $this->belongsTo(Concesionario::class);
    }

    public function pantalanes(){
        return $this->hasMany(Pantalan::class, 'InstalacionID');
    }
}
