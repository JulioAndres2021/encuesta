<?php

namespace App\Http\Controllers;

use App\Models\Senador;
use App\Models\VotoSenador;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenadorController extends Controller
{
    public function index(){
        $now = Carbon::now()->format('Y-m-d h:iA');
        $senadores = Senador::all();
        $candidatosenador1 = VotoSenador::where('senador_id', '1')->count();
        $candidatosenador2 = VotoSenador::where('senador_id', '2')->count();
        $candidatosenador3 = VotoSenador::where('senador_id', '3')->count();
        $candidatosenador4 = VotoSenador::where('senador_id', '4')->count();
        return view('votosenador.index', compact('now','senadores','candidatosenador1','candidatosenador2','candidatosenador3','candidatosenador4' ));
    }

    public function existeip(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = VotoSenador::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function listar_senador(Request $request)
    {

        if($request->ajax()){
            $votosenadores = VotoSenador::all();//ELOQUENT
            //$votos = DB::table('votos')->select('*')->get();
            //dd($votos[0]);
            $html = view('votosenador.parent.ajax_lista_votosenador', compact('votosenadores'))->render(); //renderizo
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

    public function registrar_senador(Request $request)
    {


        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('votosenadores')->insert([
                'ip' => $request->ip,
                'fecha' => $request->fecha,
                'senador_id' => $request->senador_id

              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Senador registrado.!'
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
