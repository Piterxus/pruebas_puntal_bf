<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alquiler extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'alquiler';
    protected $primaryKey = ['PlazaBaseID', 'EmbarcacionID'];
    public $incrementing = false;
    // protected $primaryKey = 'PlazaBaseID';
    protected $fillable = ['PlazaBaseID', 'EmbarcacionID', 'FechaInicio', 'FechaFinalizacion'];

    public function plazaBase()
    {
        return $this->belongsToMany(PlazaBase::class,  'PlazaBaseID')
        
        ->withPivot('FechaInicio', 'FechaFinalizacion')
        ->withTimestamps();
    }

    public function embarcacion()
    {
        return $this->belongsToMany(Embarcacion::class,  'EmbarcacionID')
        
        ->withPivot('FechaInicio', 'FechaFinalizacion')
        ->withTimestamps();
    }
  
}
