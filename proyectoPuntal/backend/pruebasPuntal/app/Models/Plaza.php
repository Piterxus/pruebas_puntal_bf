<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plaza extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'plaza';
    protected $primaryKey = 'PlazaID';

    protected $fillable = [
        'PlazaID',
        'CodigoPlaza',
        'Anio',
        'PantalanID',
        'tipoPlaza',
        'estado',
    ];

    public function pantalan()
    {
        return $this->belongsTo(Pantalan::class, 'PantalanID');
    }

    public function administrativos()
    {
        return $this->belongsToMany(Administrativo::class, 'administrativo_plaza', 'PlazaID', 'UsuarioID');
    }
}
