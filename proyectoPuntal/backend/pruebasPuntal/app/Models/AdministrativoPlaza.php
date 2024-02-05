<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdministrativoPlaza extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'administrativo_plaza';
}
