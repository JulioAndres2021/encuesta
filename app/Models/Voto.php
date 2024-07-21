<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'candidato_id',
        'votos',
        'ip',
        'fecha',
        'partido',
        'ciudad'
    ];
    protected $table = "votos";
    public function candidatos()
    {
        return $this->belongsTo(Candidato::class,'id');
    }
}
