<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/eval', 'Inicio.index')->name('prueba');
Route::view('/inicio', 'Inicio.pregguntas')->name('preguntas');
Route::view('/md', 'misDT')->name('misDatos');
Route::view('/calendario', 'calendario')->name('calendario');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/usuario', 'HomeController@getUser')->name('usuario');

Route::get('/consulta', 'UserController@index')->name('vusuario.index');
Route::get('/crear', 'UserController@create')->name('vusuario.create');
// Route::post('/home', 'UserController@store')->name('vusuario.store');
Route::put('/{usuario}/update', 'UserController@update')->name('vusuario.update');

Route::get('/userPrograma', 'Users_ProgramaController@index')->name('vuserProgran.index');
Route::post('/UP', 'Users_ProgramaController@store')->name('UserPrograma.store');

Route::get('/UserPrograma/{id}', 'Users_ProgramaController@show')->name('UserPrograma.obtener');

Route::get('/ProgramaAsignatura', 'Programa_AsignaturaController@index')->name('ProgramaAsignatura.index');
Route::get('/ProgramaAsignatura/program/{id}', 'Programa_AsignaturaController@carga')->name('ProgramaAsignatura.carga');
Route::get('/ProgramaAsignatura/{id}', 'Programa_AsignaturaController@show')->name('ProgramaAsignatura.obtener');

Route::get('/evaluacionA', 'EvaluacionController@index')->name('vevaluacion.index');
Route::get('/consultaPruebas ', 'EvaluacionController@consultaCompleta')->name('vprueva.consultaCompleta');
Route::get('/pruebas/{id} ', 'EvaluacionController@consultaIndividualCompleta')->name('vprueva.consulta');
Route::post('/evaluacion', 'EvaluacionController@store')->name('vevaluacion.store');
Route::get('/evaluacionE/{id}', 'EvaluacionController@show')->name('vevaluacion.show');

Route::get('/informe', 'InformeController@index')->name('vinforme.index');
Route::get('/evaluacionA/{id}', 'InformeController@show')->name('vinforme.show');
Route::get('/{id}/MD', 'InformeController@showIndividual')->name('vinforme.showIndividual');

Route::get('/pru', 'UserController@papu');



route::resource('competencia', CompetenciaController::class)
        ->parameters(['competencia' => 'competencia'])
        ->names('competencia');

route::resource('asignatura', AsignaturaController::class)
        ->parameters(['asignatura' => 'asignatura'])
        ->names('asignatura');

route::resource('facultad', FacultadController::class)
        ->parameters(['facultad' => 'facultad'])
        ->names('facultad');

route::resource('programa', ProgramaController::class)
        ->parameters(['programa' => 'programa'])
        ->names('programa');

route::resource('pregunta', PreguntaController::class)
       ->parameters(['pregunta' => 'pregunta'])
       ->names('pregunta');
Route::get('pregunta/upload', [App\Http\Controllers\PreguntaController::class, 'upload'])->name('pregunta.upload');
Route::post('/pregunta/import-file', [App\Http\Controllers\PreguntaController::class, 'importFile'])->name('pregunta.importFile');

// route::resource('tema', TemaController::class)
//        ->parameters(['tema' => 'tema'])
//        ->names('tema');
