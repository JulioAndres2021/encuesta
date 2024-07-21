<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotoSenador extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'ip',
        'fecha',
        'senador_id'


    ];
    protected $table = "votosenadores";
}
