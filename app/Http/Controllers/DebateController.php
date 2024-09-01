<?php

namespace App\Http\Controllers;

use App\Models\Debate;
use App\Models\Respuestadebate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $now = Carbon::now()->format('Y-m-d h:iA');
        $debates = Debate::all();
        $respuestadebates = Respuestadebate::paginate(15);
        return view('debate.index', compact('now','debates','respuestadebates' ));
    }

    //busca ip
    public function existeip(Request $request)
    {
        $ip = $request->ip;
        //dd($ip);
        //buscamos por eloquent el id que traemos
        $respuesta = Respuestadebate::where('ip', '=', $ip)->get();
        return response()->json(['data' => $respuesta]);

    }
    //REGISTRAR RESPUESTAS DE DEBATE
    public function registrar_debate(Request $request)
    {

        if ($request->ajax())
        {

            //tiene que venir los datos del formulario
            //dd($request->all());
            DB::table('respuestadebates')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'debate_id' => $request->debate_id,
                'navegador' => $request->navegador,
                'ciudad' => $request->ciudad,
                'region' => $request->region,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
              ]);

              DB::table('respuestastodas')->insert([
                'texto' => $request->texto,
                'ip' => $request->ip,
                'pregunta_id' => $request->debate_id,
                'fecha' => $request->fecha,
                'pregunta' => $request->pregunta,
                'origen' => $request->origen


              ]);

            //dd($votos);

            return response()->json([
                'code' => 200,
                'msg' => 'success',
                'messsage' => 'Respuesta DEBATE registrada.!'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'msg' => 'error',
                'messsage' => 'Error, No se pudo registrar.!'
            ], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}