<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'nombre',
        'partido',
        'ciudad',
        'provincia',
        'descripcion',
        'link'
    ];
    protected $table = "candidatos";
    public function votos()
    {
        return $this->hasMany(Voto::class,'id', 'candidato_id');
    }
    public function encuestaimagenes()
    {
        return $this->hasMany(EncuestaImagen::class,'id', 'candidato_id');
    }
}
