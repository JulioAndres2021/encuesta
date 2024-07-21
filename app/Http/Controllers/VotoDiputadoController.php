<?php

namespace App\Http\Controllers;

use App\Models\VotoDiputado;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VotoDiputadoController extends Controller
{
    public function index(){
        $now = Carbon::now()->format('Y-m-d h:iA');
        $votosdiputados = VotoDiputado::all();
        return view('votodiputado.index', compact('now','votosdiputados' ));
    }
}
