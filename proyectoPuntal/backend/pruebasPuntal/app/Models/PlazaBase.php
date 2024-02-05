<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlazaBase extends Plaza
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'plazabase';

    protected $fillable = [
        'PlazaID',
        'FechaEntrada',
        'FinContrato',
        'DatosEstancia'

    ];

    public function embarcaciones(){
        return $this->belongsToMany(Embarcacion::class, 'alquiler', 'PlazaBaseID', 'EmbarcacionID');
    }
}
