<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'texto',
        'ip',
        'pregunta_id',
        'fecha'

    ];
    protected $table = "respuestas";
    public function preguntas()
    {
        return $this->belongsTo(Pregunta::class, 'pregunta_id');
    }
}
