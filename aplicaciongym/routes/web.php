<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\horarioController;
use App\Http\Controllers\gimnasioController;
use App\Models\clase;
use App\Models\User;
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
    return view('/inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth'])->name('inicio');

Route::get('horarios','App\Http\Controllers\horarioController@listadoClases')->middleware(['auth'])->name('horarios');

Route::get('modificarHorario', [horarioController::class,'modificarHorario'])->middleware(['auth']);
Route::get('update/{id}', [horarioController::class,'Modificar'])->middleware(['auth']);

Route::get('asignarMonitor', [horarioController::class,'asignarMonitor'])->middleware(['auth']);
Route::get('monitorAsignado/{id}', [horarioController::class,'monitorAsignado'])->middleware(['auth']);


Route::get('entrenamientos', function(){
  return view('entrenamientos');
})->middleware(['auth'])->name('entrenamientos');

Route::get('entrenamientosupper', function(){
  return view('entrenamientosupper');
})->middleware(['auth'])->name('entrenamientosupper');

Route::get('entrenamientoslow', function(){
  return view('entrenamientoslow');
})->middleware(['auth'])->name('entrenamientoslow');

Route::get('entrenamientoscardio', function(){
  return view('entrenamientoscardio');
})->middleware(['auth'])->name('entrenamientoscardio');

Route::get('entrenamientosanadir', function(){
  return view('entrenamientosanadir');
})->middleware(['auth'])->name('entrenamientosanadir');

Route::get('soporte', function(){
  return view('soporte');
})->middleware(['auth'])->name('soporte');

Route::get('perfil', function(){
  return view('perfil');
})->middleware(['auth'])->name('perfil');

Route::get('contacto', function(){
  return view('contacto');
})->middleware(['auth'])->name('contacto');

require __DIR__.'/auth.php';
