<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestatres extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'texto',
        'ip',
        'preguntatres_id',
        'fecha',
        'pregunta'

    ];
    protected $table = "respuestatres";
    // public function preguntatres()
    // {
    //     return $this->belongsTo(Preguntatres::class, 'preguntatres_id');
    // }
}