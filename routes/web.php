<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Numeros;
use App\Http\Livewire\Letras;
use App\Http\Livewire\Formulario;
use App\Http\Livewire\Temas;
use App\Http\Livewire\Estudiante;
use App\Http\Livewire\Usuario;

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

Route::get('/numeros', Numeros::class);
Route::get('/letras', Letras::class);
Route::get('/formulario', Formulario::class);
Route::get('/temas', Temas::class);
Route::get('/estudiantes', Estudiante::class);
Route::get('/usuarios', Usuario::class);
