<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestados extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'texto',
        'ip',
        'preguntados_id',
        'fecha',
        'pregunta'

    ];
    protected $table = "respuestados";
    public function preguntados()
    {
        return $this->belongsTo(Preguntados::class, 'preguntados_id');
    }
}