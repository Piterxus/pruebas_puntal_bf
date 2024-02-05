<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tripulante extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tripulante';
    protected $primaryKey = 'NumeroDocumento';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'NumeroDocumento',
        'Nombre',
        'Sexo',
        'Nacionalidad',
     
    ];

    public function transitos(){
        return $this->belongsToMany(Transito::class, 'tripulante_transito', 'NumeroDocumento', 'TransitoID'  );
    }

}
