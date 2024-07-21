<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diputado extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'nombre',
        'partido',
        'ciudad',
        'descripcion',
        'provincia'
    ];
    protected $table = "diputados";
}
