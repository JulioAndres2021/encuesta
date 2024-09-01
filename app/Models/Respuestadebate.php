<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestadebate extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'texto',
        'ip',
        'debate_id',
        'fecha',
        'pregunta'


    ];
    protected $table = "respuestadebates";

}