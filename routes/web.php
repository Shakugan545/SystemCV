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

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');





Route::get('/Docentes', function () {
    return view('profesores.index');
})->name('profesores');

Route::get('/profesores', function () {
    return view('profesores.index');
});
Route::get('/tablas', function () {
    return view('tablas');
})->name('tablas');

Route::resource('profesores','ProfesoresController');
Route::resource('academica','AcademicaController');

