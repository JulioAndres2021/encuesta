<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'candidato',
        'pregunta',
        'muybien',
        'bien',
        'mala',
        'nose',
        'estado',
        'ip',
        'link'
    ];
    protected $table = "encuestas";
}
