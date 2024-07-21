<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Voto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class CandidatosController extends Controller
{
    public function index(Request $request)
    {

        $candidatos = Candidato::all();
        $candidato1 = Voto::with('candidatos')
        ->where('candidato_id', 1)
        ->count();
        $candidato2 = Voto::with('candidatos')
        ->where('candidato_id', 2)
        ->count();
        $candidato3 = Voto::with('candidatos')
        ->where('candidato_id', 3)
        ->count();
        $candidato4 = Voto::with('candidatos')
        ->where('candidato_id', 4)
        ->count();
        $candidato5 = Voto::with('candidatos')
        ->where('candidato_id', 5)
        ->count();
        $candidato6 = Voto::with('candidatos')
        ->where('candidato_id', 6)
        ->count();
        $candidato7 = Voto::with('candidatos')
        ->where('candidato_id', 7)
        ->count();

        //$candidatos = Candidato::withCount('votos')->get();
        //dd($candidatos);
        return view('candidatos.index', compact('candidatos','candidato1','candidato2','candidato3','candidato4','candidato5','candidato6','candidato7'));
    }

}
