<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Embarcacion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'embarcaciones';
    protected $primaryKey = 'Matricula';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];

    protected $fillable = [
        'Matricula',
        'Manga',
        'Eslora',
        'Origen',
        'Titular',
        'Imagen',
        'Numero_Registro',
        'Datos_Tecnicos',
        'Modelo',
        'Nombre',
        'Tipo',


    ];

    public function transitos(){
        $this->belongsToMany(Transito::class, 'transito_embarcacion', 'Matricula', 'TransitoID');
    }
    public function plazasbases(){
        $this->belongsToMany(PlazaBase::class, 'alquiler', 'EmbarcacionID', 'PlazaBaseID');
    }

    
}
