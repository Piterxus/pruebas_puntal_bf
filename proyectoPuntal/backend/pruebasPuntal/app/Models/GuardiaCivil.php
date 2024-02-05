<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GuardiaCivil extends Usuario
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'guardiacivil';
    protected $fillable = [
        'UsuarioID'
    ];

    public function transitos(){
        $this->belongsToMany(Transito::class, 'guardiacivil_transito', 'GuardiaCivilID', 'TransitoID'  );
    }
}
