<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotoDiputado extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'ip',
        'fecha',
        'diputado_id',
        


    ];
    protected $table = "votodiputados";
}
