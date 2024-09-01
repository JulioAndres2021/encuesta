<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Models\Comentario;
use App\Models\Diputado;
use App\Models\Encuesta;
use App\Models\EncuestaImagen;
use App\Models\Encuestas;
use App\Models\Pregunta;
use App\Models\Preguntados;
use App\Models\Preguntatres;
use App\Models\Respuesta;
use App\Models\Respuestados;
use App\Models\Respuestatres;
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
        $preguntados = Preguntados::all();
        $preguntatres = Preguntatres::all();
        $encuestaporimagenes = EncuestaImagen::all()->count();//cuenta todo os votos
        $respuestas = Respuesta::with('preguntas')->get();
        $respuestados = Respuestados::with('preguntados')->get();

        //-----------------ENCUESTA IMAGEN--------------------------------
        $contarvotoimagencandidato1 = EncuestaImagen::where("candidato_id", 1)->count();
        $contarvotoimagencandidato2 = EncuestaImagen::where("candidato_id", 2)->count();
        //----------------------------------------------------------------

        //CONTAR LAS RESPUESTAS DE LA PREGUNTA 1 POR SI/NO
        $contarpreguntaunoSI = Respuesta::where("texto", "SI")
        ->where("pregunta_id", 1)->count();
        $contarpreguntaunoNO = Respuesta::where("texto", "NO")
        ->where("pregunta_id", 1)->count();

        //CONTAR LAS RESPUESTAS DE LAS PREGUNTAS POR SI/NO
        $contarvotoSIpreguntasino = Respuestados::where("texto", "SI")
        ->where("preguntados_id", 1)->count();
        $contarvotoNOpreguntasino = Respuestados::where("texto", "NO")
        ->where("preguntados_id", 1)->count();
        $contarvotoOTROpreguntasino = Respuestados::where("texto", "OTRO")
        ->where("preguntados_id", 1)->count();
        //----------------------------------------------------------------

        //CONTAR LAS RESPUESTAS
        //MUY BUENA  BUENA  MALA  MUY MALA  NS/NC
        //PREGUNTA 1
        $contarvotomuybuenapregunta1 = Respuesta::where("texto", "MUY BUENA")
        ->where("pregunta_id", 1)->count();
        $contarvotobuenapregunta1 = Respuesta::where("texto", "BUENA")
        ->where("pregunta_id", 1)->count();
        $contarvotomalapregunta1 = Respuesta::where("texto", "MALA")
        ->where("pregunta_id", 1)->count();
        $contarvotomuymalapregunta1 = Respuesta::where("texto", "MUY MALA")
        ->where("pregunta_id", 1)->count();
        $contarvotonsncpregunta1 = Respuesta::where("texto", "NS/NC")
        ->where("pregunta_id", 1)->count();
        //SUMA MUY BUENA Y BUENA PREGUNTA 1
        $sumamuybuenaybuenarespuestaspregunta1 = $contarvotomuybuenapregunta1 + $contarvotobuenapregunta1;
        //SUMA MUY MALA Y MALA PREGUNTA 1
        $sumamalaymymalaurespuestaspregunta1 = $contarvotomalapregunta1 + $contarvotomuymalapregunta1;

        //PREGUNTA 2
        $contarvotomuybuenapregunta2 = Respuesta::where("texto", "MUY BUENA")
        ->where("pregunta_id", 2)->count();
        $contarvotobuenapregunta2 = Respuesta::where("texto", "BUENA")
        ->where("pregunta_id", 2)->count();
        $contarvotomalapregunta2 = Respuesta::where("texto", "MALA")
        ->where("pregunta_id", 2)->count();
        $contarvotomuymalapregunta2 = Respuesta::where("texto", "MUY MALA")
        ->where("pregunta_id", 2)->count();
        $contarvotonsncpregunta2 = Respuesta::where("texto", "NS/NC")
        ->where("pregunta_id", 2)->count();
        //SUMA MUY BUENA Y BUENA PREGUNTA 2
        $sumamuybuenaybuenarespuestaspregunta2 = $contarvotomuybuenapregunta2 + $contarvotobuenapregunta2;
         //SUMA MUY MALA Y MALA PREGUNTA 2
        $sumamalaymymalaurespuestaspregunta2 = $contarvotomalapregunta2 + $contarvotomuymalapregunta2;

        //PREGUNTA 3
        $contarvotomuybuenapregunta3 = Respuesta::where("texto", "MUY BUENA")
        ->where("pregunta_id", 3)->count();
        $contarvotobuenapregunta3 = Respuesta::where("texto", "BUENA")
        ->where("pregunta_id", 3)->count();
        $contarvotomalapregunta3 = Respuesta::where("texto", "MALA")
        ->where("pregunta_id", 3)->count();
        $contarvotomuymalapregunta3 = Respuesta::where("texto", "MUY MALA")
        ->where("pregunta_id", 3)->count();
        $contarvotonsncpregunta3 = Respuesta::where("texto", "NS/NC")
        ->where("pregunta_id", 3)->count();

        //SUMA MUY BUENA Y BUENA PREGUNTA 3
        $sumamuybuenaybuenarespuestaspregunta3 = $contarvotomuybuenapregunta3 + $contarvotobuenapregunta3;
         //SUMA MUY MALA Y MALA PREGUNTA 3
        $sumamalaymymalaurespuestaspregunta3 = $contarvotomalapregunta3 + $contarvotomuymalapregunta3;

        //---------------------------------------------------------------------------

        //CONTAR VOTACION DE CANDIDATOS POR IMAGEN
        //1 = MUY BUENA - 2 BUENA - 3 = MALA - 4 = MUY MALA - 5 = NS/NC

        //CANDIDATO 1 ---------------------------------------------------------------
        //cuenta las opciones de 1-2 muy buena y buena
        $contarvotomuybuena2imagencandidato1 = EncuestaImagen::where("candidato_id", 1)
        ->where("opcion", 1)->count();
        $contarvotomuybuena3imagencandidato1 = EncuestaImagen::where("candidato_id", 1)
        ->where("opcion", 2)->count();
        $candidatounocuentaunaydos = $contarvotomuybuena2imagencandidato1 + $contarvotomuybuena3imagencandidato1;

        //cuenta las opciones de 3-4 mala y muy mala
        $contarvotomala3imagencandidato1 = EncuestaImagen::where("candidato_id", 1)
        ->where("opcion", 3)->count();
        $contarvotomala4imagencandidato1 = EncuestaImagen::where("candidato_id", 1)
        ->where("opcion", 4)->count();
        $candidatounocuentatresycuatro = $contarvotomala3imagencandidato1 + $contarvotomala4imagencandidato1;

        //CANDIDATO 2 ---------------------------------------------------------------
        //cuenta las opciones de 1-2 muy buena y buena
        $contarvotomuybuena2imagencandidato2 = EncuestaImagen::where("candidato_id", 2)
        ->where("opcion", 1)->count();
        $contarvotomuybuena3imagencandidato2 = EncuestaImagen::where("candidato_id", 2)
        ->where("opcion", 2)->count();
        $candidatodoscuentaunaydos = $contarvotomuybuena2imagencandidato2 + $contarvotomuybuena3imagencandidato2;

        //cuenta las opciones de 3-4 mala y muy mala
        $contarvotomala3imagencandidato2 = EncuestaImagen::where("candidato_id", 2)
        ->where("opcion", 3)->count();
        $contarvotomala4imagencandidato2 = EncuestaImagen::where("candidato_id", 2)
        ->where("opcion", 4)->count();
        $candidatodoscuentatresycuatro = $contarvotomala3imagencandidato2 + $contarvotomala4imagencandidato2;


        //-------------------------------------------------------------------
        //CONTAR VOTOS DIPUTADO
        $contarvotodiputado1 = VotoDiputado::where("diputado_id", 1)->count();
        $contarvotodiputado2 = VotoDiputado::where("diputado_id", 2)->count();

        //CONTAR VOTOS SENADOR
        $contarvotosenador1 = VotoSenador::where("senador_id", 1)->count();
        $contarvotosenador2 = VotoSenador::where("senador_id", 2)->count();
        //-------------------------------------------------------------------

        //CONTAR LAS RESPUESTAS DE LA PREGUNTA EN GENERAL
        $contarvotopreguntatresSI = Respuestatres::where("texto", "SI")
        ->where("preguntatres_id", 1)->count();
        $contarvotopreguntatresNO = Respuestatres::where("texto", "NO")
        ->where("preguntatres_id", 1)->count();
        $contarvotopreguntatreselpueblo = Respuestatres::where("texto", "EL PUEBLO")
        ->where("preguntatres_id", 1)->count();
        $contarvotopreguntatreslospoliticos = Respuestatres::where("texto", "LOS POLITICOS")
        ->where("preguntatres_id", 1)->count();
        $contarvotopreguntatresempresarios = Respuestatres::where("texto", "EMPRESARIOS")
        ->where("preguntatres_id", 1)->count();
        $contarvotopreguntatresotros = Respuestatres::where("texto", "OTROS")
        ->where("preguntatres_id", 1)->count();


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
        'preguntados',
        'respuestados',
        'date',
        'candidatounocuentaunaydos',
        'candidatounocuentatresycuatro',
        'candidatodoscuentaunaydos',
        'candidatodoscuentatresycuatro',
        'sumamuybuenaybuenarespuestaspregunta1',
        'sumamalaymymalaurespuestaspregunta1',
        'sumamuybuenaybuenarespuestaspregunta2',
        'sumamalaymymalaurespuestaspregunta2',
        'sumamuybuenaybuenarespuestaspregunta3',
        'sumamalaymymalaurespuestaspregunta3',
        'contarvotoSIpreguntasino',
        'contarvotoNOpreguntasino',
        // 'contarvotomuybuenapregunta1',
        // 'contarvotobuenapregunta1',
        // 'contarvotomalapregunta1',
        // 'contarvotomuymalapregunta1',
         'contarvotonsncpregunta1',
        // 'contarvotomuybuenapregunta2',
        // 'contarvotobuenapregunta2',
        // 'contarvotomalapregunta2',
        // 'contarvotomuymalapregunta2',
         'contarvotonsncpregunta2',
         'contarvotonsncpregunta3',
         'encuestaporimagenes',
         'contarvotoOTROpreguntasino',
         'preguntatres',
         'contarvotopreguntatreselpueblo',
         'contarvotopreguntatreslospoliticos',
         'contarvotopreguntatresempresarios',
         'contarvotopreguntatresotros',
         'contarpreguntaunoSI',
         'contarpreguntaunoNO',
         'contarvotopreguntatresSI',
         'contarvotopreguntatresNO'




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

    public function cookies(Request $request)
    {

        return view('cookies');

    }

    public function existeiprespuesta(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = Respuesta::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function existeiprespuestasino(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = Respuestados::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }

    public function existerespuestageneral(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = Respuestatres::where('ip', '=', $ip)->get();
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
    public function buscarrespuestassino(Request $request)
    {

        //dd($ip);
        //buscamos por eloquent el id que traemos
        if($request->ajax()){
            $id_respuesta = $request->id_respuesta;
            $respuesta = Respuestados::where('preguntados_id', '=', $id_respuesta)->get();

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
                'pregunta' => $request->pregunta,
                'fecha' => $request->fecha,
                'created_at' => $request->created_at

              ]);

              DB::table('respuestastodas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->pregunta_id,
                'pregunta' => $request->pregunta,
                'fecha' => $request->fecha,
                'origen' => $request->origen,
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

    public function registrar_respuestatres(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('respuestatres')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'preguntatres_id' => $request->pregunta_id,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
                'created_at' => $request->created_at

              ]);

              DB::table('respuestastodas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->pregunta_id,
                'pregunta' => $request->pregunta,
                'fecha' => $request->fecha,
                'origen' => $request->origen,
                'created_at' => $request->created_at

              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Respuesta General registrado.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }

    public function registrar_respuesta_si_no(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('respuestados')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'preguntados_id' => $request->preguntados_id,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
                'created_at' => $request->created_at

              ]);

              DB::table('respuestastodas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->preguntados_id,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
                'origen' => $request->origen,
                'created_at' => $request->created_at

              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Respuesta SI/NO registrado.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }

    //REGISTRAR RESPUESTAS DE PREGUNTA GENERAL
    public function registrar_respuestatresgeneral(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('respuestatres')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'preguntatres_id' => $request->preguntatres_id,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
                'created_at' => $request->created_at

              ]);

              DB::table('respuestastodas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->preguntatres_id,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
                'origen' => $request->origen,
                'created_at' => $request->created_at

              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Respuesta SI/NO registrado.!'
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