<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senador extends Model
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
    protected $table = "senadores";

    
}
