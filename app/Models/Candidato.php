<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function votos(): HasMany
    {
        return $this->hasMany(Voto::class,'id', 'candidato_id');
    }
    public function encuestaimagenes(): HasMany
    {
        return $this->hasMany(EncuestaImagen::class,'id', 'candidato_id');
    }
}
