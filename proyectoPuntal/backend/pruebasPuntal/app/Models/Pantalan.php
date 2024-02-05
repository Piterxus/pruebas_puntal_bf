<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pantalan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pantalan';
    protected $primaryKey = 'PantalanID';

    protected $fillable = [
        'PantalanID',
        'NombrePantalan',
        'Ubicacion',
        'Descripcion',
        'InstalacionID',
        'Capacidad',
    ];

    public function instalacion(){
        return $this->belongsTo(Instalacion::class, 'InstalacionID');
    }
    public function plazas(){
        return $this->hasMany(Plaza::class, 'PantalanID');
    }
}
