<?php
use App\Http\Requests;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('contenido/contenido');
// });

Route::get('/', 'ProyectoController@index')->name('proyectos');
// Route::get('/contenido/contenido', 'ProyectoController@index');
// Route::get('/proyectos', 'ProyectoController@index');

Route::get('/contenido/create-step1', 'ProyectoController@createStep1');
Route::post('/contenido/create-step1', 'ProyectoController@postCreateStep1');

Route::get('/contenido/create-step2', 'ProyectoController@createStep2');
Route::post('/contenido/create-step2', 'ProyectoController@postCreateStep2');
Route::post('/contenido/remove-image', 'ProyectoController@removeImage');

Route::get('/contenido/create-step3', 'ProyectoController@createStep3');
Route::post('/contenido/store', 'ProyectoController@store');


Route::post('voyllorar','ProfesorController@add_Profesor')->name('addProfesor');
Route::post('registraRelacion','ProfesorController@add_Relacion')->name('RegistrarRelacion');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contenido/create-step1', ['uses' => 'ProyectoController@createStep1', 'as' => 'step1']);
Route::resource('proyecto', 'ProyectoController');
Route::get('/createProfesores', 'ProfesorController@registro');
Route::get('/Relacion', 'ProfesorController@relacion');
Route::get('/autores', 'autorController@index');
Route::resource('autor','autorController');



