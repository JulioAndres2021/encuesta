<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntatres extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'texto'

    ];
    protected $table = "preguntatres";
    // public function respuestatres()
    // {
    //     return $this->hasMany(Respuestatres::class,'id');
    // }
}