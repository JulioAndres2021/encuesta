<?php

namespace App\Http\Controllers;

use App\Models\Diputado;
use App\Models\VotoDiputado;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiputadoController extends Controller
{
    public function index(){
        $now = Carbon::now()->format('Y-m-d h:iA');
        $diputados = Diputado::all();
        $candidatodiputado1 = VotoDiputado::where('diputado_id', '1')->count();
        $candidatodiputado2 = VotoDiputado::where('diputado_id', '2')->count();
        $candidatodiputado3 = VotoDiputado::where('diputado_id', '3')->count();
        $candidatodiputado4 = VotoDiputado::where('diputado_id', '4')->count();
        return view('votodiputado.index', compact('now','diputados','candidatodiputado1','candidatodiputado2','candidatodiputado3','candidatodiputado4' ));
    }

    public function existeip(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = VotoDiputado::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function listar_diputado(Request $request)
    {

        if($request->ajax()){
            $votodiputados = VotoDiputado::all();//ELOQUENT
            //$votos = DB::table('votos')->select('*')->get();
            //dd($votos[0]);
            $html = view('votodiputado.parent.ajax_lista_votodiputado', compact('votodiputados'))->render(); //renderizo
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

    public function registrar_diputado(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('votodiputados')->insert([
                'ip' => $request->ip,
                'fecha' => $request->fecha,
                'diputado_id' => $request->diputado_id

              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Diputado registrado.!'
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




