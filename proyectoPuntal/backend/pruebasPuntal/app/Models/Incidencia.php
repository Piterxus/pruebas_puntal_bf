<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incidencia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'incidencia';
    protected $primaryKey = 'IncidenciaID';

    protected $fillable = [
        'IncidenciaID',
        'Titulo',
        'GuardamuellesID',
        'Foto',
        'Descripcion',
        'AdministrativoID',

    ];

    public function guardamuelle()
    {
        return $this->belongsTo(Guardamuelle::class, 'GuardamuellesID');
    }
    
    public function administrativo()
    {
        return $this->belongsTo(Administrativo::class, 'AdministrativoID');
    }
}
