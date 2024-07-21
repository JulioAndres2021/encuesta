<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Voto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotoController extends Controller
{
    public function index(){
        $now = Carbon::now()->format('Y-m-d h:iA');
        $candidatos = Candidato::all();
        $cargosenador = Candidato::where('cargopolitico', '=', 'SENADOR')->get();
        $cargodiputado = Candidato::where('cargopolitico', '=', 'DIPUTADO')->get();
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
        return view('votos.index', compact(
            'now',
            'candidatos',
            'cargosenador',
            'cargodiputado',
            'candidato1',
            'candidato2',
            'candidato3',
            'candidato4',
            'candidato5',
            'candidato6',
            'candidato7'
        ));
    }

    public function existeip(Request $request)
    {
        $ip = $request->ip;


        //buscamos por eloquent el id que traemos
        $respuesta = Voto::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function listar_votos(Request $request)
    {

        if($request->ajax()){
            $votos = Voto::with('candidatos')->get();//ELOQUENT
            //$votos = DB::table('votos')->select('*')->get();
            //dd($votos[0]);
            $html = view('votos.parent.ajax_lista_votos', compact('votos'))->render(); //renderizo
            return response()->json([
                'code' => 200,
                'html' => $html,
                'msg' => 'success',
            ],200);
        }else{

            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'message' => 'Error, no se puede acceder a la pagina'
            ],404);
        }
    }

    public function registrar_votos(Request $request)
    {

        if ($request->ajax())
        {
            
            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('votos')->insert([
                'candidato_id' => $request->candidato_id,
                'votos' => $request->votos,
                'ip' => $request->ip,
                'fecha' => $request->fecha,
                'partido' => $request->partido,
                'ciudad' => $request->ciudad,
                'cargopolitico' => $request->cargopolitico
              ]);

            //   DB::table('senador')->insert([
            //     'candidato' => $request->candidato_id,
            //     'votos' => $request->votos,
            //     'ip' => $request->ip,
            //     'fecha' => $request->fecha,
            //     'partido' => $request->partido,
            //     'ciudad' => $request->ciudad
            //   ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Voto registrado.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }
}
