<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Comentario;
use App\Models\Diputado;
use App\Models\Encuesta;
use App\Models\EncuestaImagen;
use App\Models\Encuestas;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\Senador;
use App\Models\VotoDiputado;
use App\Models\VotoSenador;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TapaController extends Controller
{
    public function index(Request $request)
    {
        $date = Carbon::now();
        $diputados = Diputado::all();
        $senadores = Senador::all();
        $candidatos = Candidato::all();
        $comentarios = Comentario::all();
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::with('preguntas')->get();

        //$contarvotodiputado1 = VotoDiputado::where('diputado_ip', '=', 1)->get();
        $contarvotoimagencandidato1 = EncuestaImagen::where("candidato_id", 1)->count();
        $contarvotoimagencandidato2 = EncuestaImagen::where("candidato_id", 2)->count();

        //CONTAR VOTACION DE CANDIDATOS POR IMAGEN
        //1 = MUY BUENA - 2 BUENA - 3 = MALA - 4 = MUY MALA - 5 = NS/NC


        //-------------------------------------------------------------------
        $contarvotodiputado1 = VotoDiputado::where("diputado_id", 1)->count();
        $contarvotodiputado2 = VotoDiputado::where("diputado_id", 2)->count();

        //CONTAR VOTOS SENADOR
        $contarvotosenador1 = VotoSenador::where("senador_id", 1)->count();
        $contarvotosenador2 = VotoSenador::where("senador_id", 2)->count();

        //$candidatos = Candidato::withCount('votos')->get();
        //dd($candidatos);
        return view('tapa', compact('diputados',
        'senadores',
        'contarvotodiputado1',
        'contarvotodiputado2',
        'contarvotosenador1',
        'contarvotosenador2',
        'candidatos',
        'contarvotoimagencandidato1',
        'contarvotoimagencandidato2',
        'comentarios',
        'preguntas',
        'respuestas',
        'date'

    ));
    }

    public function existeipencuesta(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = EncuestaImagen::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function existeiprespuesta(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = Respuesta::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function buscarrespuestas(Request $request)
    {

        //dd($ip);
        //buscamos por eloquent el id que traemos
        if($request->ajax()){
            $id_respuesta = $request->id_respuesta;
            $respuesta = Respuesta::where('pregunta_id', '=', $id_respuesta)->get();

            return response()->json($respuesta);

        }
       // $respuesta = Respuesta::where('pregunta_id', '=', $id_respuesta)->paginate(1);
        //return response()->json($respuesta);

    }

    public function registrar_encuesta(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('encuestaimagenes')->insert([
                'candidato_id' => $request->candidato_id,
                'nombre' => $request->nombre,
                'opcion' => $request->opcion,
                'votos' => $request->votos,
                'ip' => $request->ip,
                'estado' => $request->estado,
                'fecha' => $request->fecha

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
                'messsage' => 'Encuesta registrada.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }

    public function registrar_comentarios(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('comentarios')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'estado' => $request->estado,
                'fecha' => $request->fecha,
                'created_at' => $request->created_at

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
                'messsage' => 'Comentario registrado.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }

    public function registrar_respuesta(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('respuestas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->pregunta_id,
                'fecha' => $request->fecha,
                'created_at' => $request->created_at

              ]);

              DB::table('respuestastodas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->pregunta_id,
                'fecha' => $request->fecha,
                'created_at' => $request->created_at

              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Respuesta registrado.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }

    //LISTAR COMENTARIOS
     public function listar_comentarios(Request $request)
     {

         if($request->ajax()){
             $comentarios = Comentario::all();//ELOQUENT

             //$votos = DB::table('votos')->select('*')->get();
             //dd($votos[0]);
             $html = view('ajax_lista_comentarios', compact('comentarios'))->render(); //renderizo
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

     //LISTAR PREGUNTAS
     public function listar_preguntas(Request $request)
     {

         if($request->ajax()){
             //$preguntas = Pregunta::all();//ELOQUENT
             $preguntas = Respuesta::with('preguntas')->get();
             //$votos = DB::table('votos')->select('*')->get();
             //dd($votos[0]);
             $html = view('ajax_lista_preguntas', compact('preguntas'))->render(); //renderizo
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

     public function obtener_preguntas_por_id(Request $request)
     {
        if ($request->ajax())
        {
           // dd($request->all());
            $preguntas = Pregunta::find($request->id_pregunta);
            //dd($preguntas);
            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Pregunta encontrada.!',
                'preguntas' => $preguntas
            ],200);

        } else {

            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'message' => 'Error, no se puede acceder a la pagina'
            ],404);

        }

    }

}//fin
