<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntados extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'texto'

    ];
    protected $table = "preguntados";
    public function respuestados()
    {
        return $this->hasMany(Respuestados::class,'id');
    }
}