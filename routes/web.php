<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
})->name('inicio');




Route::get('/Docentes', function () {
    return view('profesores.index');
})->name('profesores');

Route::get('/tablas', function () {
    return view('profesores.index');
})->name('academicas.index');




//calis
 

Route::resource('profesores','ProfesoresController');
Route::resource('academica','AcademicaController');
Route::resource('capacitaciones', 'CapacitacionesController');
Route::resource('disciplinas', 'DisciplinasController');
Route::resource('gestion','GestionController');
Route::resource('productos', 'ProductosController');
Route::resource('noacademica', 'NoacademicaController'); //duda sobre el nombre de la ruta
Route::resource('ingenieriles', 'IngenierilesController');
Route::resource('participaciones', 'ParticipacionesController');
Route::resource('logrosnoacademicos', 'LogrosnoacademicosController');
Route::resource('aportaciones', 'AportacionesController');
Route::resource('premios', 'PremiosController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
