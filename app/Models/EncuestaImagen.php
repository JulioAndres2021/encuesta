<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncuestaImagen extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'candidato_id',
        'nombre',
        'opcion',
        'votos',
        'ip',
        'estado',
        'fecha',
        'created_at'

    ];
    protected $table = "encuestaimagenes";
    public function candidatos()
    {
        return $this->belongsTo(Candidato::class,'id');
    }
}
