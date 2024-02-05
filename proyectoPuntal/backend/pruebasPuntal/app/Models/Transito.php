<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transito extends Plaza
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'transito';

    protected $fillable = [
        'PlazaID',
        'FechaEntrada',
        'FinContrato',
        'DatosEstancia'
    ];

    public function embarcaciones(){
        return $this->belongsToMany(Embarcacion::class, 'transito_embarcacion', 'TransitoID', 'EmbarcacionID');
    }
    public function guardamuelle(){
        return $this->belongsTo(GuardaMuelle::class, 'UsuarioID');
    }
    public function guardiasciviles(){
        return $this->belongsToMany(GuardiaCivil::class, 'guardiacivil_transito', 'TransitoID', 'GuardiaCivilID');
    }

    public function tripulantes(){
        return $this->belongsToMany(Tripulante::class, 'transito_tripulante', 'TransitoID', 'TripulanteID');
    }
}
