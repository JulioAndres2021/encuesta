<?php

use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\DiputadoController;
use App\Http\Controllers\SenadorController;
use App\Http\Controllers\TapaController;
use App\Http\Controllers\VotoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('tapa');
// });

//TAPA CONTROLADOR
 Route::controller(TapaController::class)->group(function(){
     Route::get('/','index')->name('tapa');
     Route::get('/encuesta-existeip', 'existeipencuesta' )->name('encuesta.existeip');
     Route::get('/respuesta-existeip', 'existeiprespuesta' )->name('respuesta.existeip');
     Route::get('/pregunta-existe', 'buscarrespuestas' )->name('pregunta.buscarrespuestas');
     Route::post('registro-encuesta','registrar_encuesta')->name('encuesta.registrar');
     Route::post('lista-comentarios','listar_comentarios')->name('comentarios.lista');
     Route::post('lista-preguntas','listar_preguntas')->name('preguntas.lista');
     Route::post('registro-pregunta','registrar_respuesta')->name('pregunta.registrar');
     Route::post('registro-comentarios','registrar_comentarios')->name('comentarios.registrar');
     Route::post('obtener-preguntas-por-id','obtener_preguntas_por_id')->name('preguntas.obtener_pregunta');
 });

//CANDIDATOS CONTROLADOR
Route::controller(CandidatosController::class)->group(function(){
    Route::get('candidatos-index','index')->name('candidatos.index');
    Route::post('lista-candidatos','listar_candidatos')->name('candidatos.lista');
    Route::post('registro-candidatos','registrar_candidatos')->name('candidatos.registrar');
    Route::post('obtener-candidatos-por-id','obtener_candidatos_por_id')->name('candidatos.obtener_candidatos');
    Route::delete('eliminar-candidatos-por-id','eliminar_candidatos_por_id')->name('candidatos.eliminar_candidatos');
});
//VOTO CONTROLADOR
Route::controller(VotoController::class)->group(function(){
    Route::get('votos-index','index')->name('votos.index');
    Route::post('lista-votos','listar_votos')->name('voto.lista');
    Route::post('registro-votos','registrar_votos')->name('votos.registrar');
    Route::get('/voto-existeip', 'existeip' )->name('votos.existeip');
    //Route::post('obtener-candidatos-por-id','obtener_candidatos_por_id')->name('candidatos.obtener_candidatos');
    //Route::delete('eliminar-candidatos-por-id','eliminar_candidatos_por_id')->name('candidatos.eliminar_candidatos');
});

//DIPUTADOS CONTROLADOR
Route::controller(DiputadoController::class)->group(function(){
    Route::get('diputado-index','index')->name('diputado.index');
    Route::post('lista-diputado','listar_diputado')->name('diputado.lista');
    Route::post('registro-diputado','registrar_diputado')->name('diputado.registrar');
    Route::get('diputado-existeip', 'existeip' )->name('diputado.existeip');
    //Route::post('obtener-candidatos-por-id','obtener_candidatos_por_id')->name('candidatos.obtener_candidatos');
    //Route::delete('eliminar-candidatos-por-id','eliminar_candidatos_por_id')->name('candidatos.eliminar_candidatos');
});

//SENADORES CONTROLADOR
Route::controller(SenadorController::class)->group(function(){
    Route::get('senador-index','index')->name('senador.index');
    Route::post('lista-senador','listar_senador')->name('senador.lista');
    Route::post('registro-senador','registrar_senador')->name('senador.registrar');
    Route::get('senador-existeip', 'existeip' )->name('senador.existeip');
    //Route::post('obtener-candidatos-por-id','obtener_candidatos_por_id')->name('candidatos.obtener_candidatos');
    //Route::delete('eliminar-candidatos-por-id','eliminar_candidatos_por_id')->name('candidatos.eliminar_candidatos');
});




