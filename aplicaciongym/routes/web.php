<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\horarioController;
use App\Http\Controllers\gimnasioController;
use App\Http\Controllers\entrenamientoController;
use App\Models\clase;
use App\Models\User;
use App\Models\entrenamiento;
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

//Ruta que lleva a la controladora y separa el usaro sgún el rol a una u otra pagina
Route::get('horarios','App\Http\Controllers\horarioController@listadoClases')->middleware(['auth'])->name('horarios');
//Ruta que lleva a la controladora y separa el usaro sgún el rol a una u otra pagina
Route::get('entrenamientos','App\Http\Controllers\entrenamientoController@listadoMonitoresOEntrenamientos')->middleware(['auth'])->name('entrenamientos');

Route::get('listadoEntreLow', [entrenamientoController::class,'listadoEntreLow'])->middleware(['auth']);
Route::get('listadoEntreUpper', [entrenamientoController::class,'listadoEntreUpper'])->middleware(['auth']);
Route::get('listadoEntreCardio', [entrenamientoController::class,'listadoEntreCardio'])->middleware(['auth']);
Route::get('verDetallesEntrenamiento/{id}', [entrenamientoController::class,'verDetallesEntrenamiento'])->middleware(['auth']);

Route::get('linkBorrarEntrenamiento', [entrenamientoController::class,'listaEntrenos'])->middleware(['auth']);
Route::get('listadoEntreUpper', [entrenamientoController::class,'listadoEntreUpper'])->middleware(['auth']);


//Ruta modificar horario
Route::get('modificarHorario', [horarioController::class,'modificarHorario'])->middleware(['auth']);
Route::get('update/{id}', [horarioController::class,'Modificar'])->middleware(['auth']);
Route::get('MenosClase', 'App\Http\Controllers\horarioController@MenosClase')->middleware(['auth']);
Route::get('MasClase',  'App\Http\Controllers\horarioController@MasClase')->middleware(['auth']);
Route::get('VaciarClase',  'App\Http\Controllers\horarioController@VaciarClase')->middleware(['auth']);


Route::get('borrarEntrenos/{id}', [entrenamientoController::class,'borrarEntrenos'])->middleware(['auth']);

//Ruta para modificar un entrenamiento
Route::get('linkEditarEntreno', [entrenamientoController::class,'listaEntrenosEditar'])->middleware(['auth']);
Route::get('editarEntreno/{id}', [entrenamientoController::class,''])->middleware(['auth']);
//Ruta asignar monitor a una clase
Route::get('asignarMonitor', [horarioController::class,'asignarMonitor'])->middleware(['auth']);
Route::get('monitorAsignado/{id}', [horarioController::class,'monitorAsignado'])->middleware(['auth']);
//Ruta para modificar un monitor
Route::get('modificarMonitor', [entrenamientoController::class,'modificarMonitor'])->middleware(['auth']);
Route::get('updateMoni/{id}', [entrenamientoController::class,'Modificar'])->middleware(['auth']);
//Ruta para crear un monitor
Route::get('crearMonitor', [entrenamientoController::class,'crearMonitor'])->middleware(['auth']);
Route::get('createMoni', [entrenamientoController::class,'Crear'])->middleware(['auth']);
//Ruta para eliminar un monitor
Route::get('eliminarMonitor', [entrenamientoController::class,'eliminarMonitor'])->middleware(['auth']);

Route::get('entrenamientosupper', function(){
  return view('entrenamientosupper');
})->middleware(['auth'])->name('entrenamientosupper');

Route::get('entrenamientoslow', function(){
  return view('entrenamientoslow');
})->middleware(['auth'])->name('entrenamientoslow');

Route::get('entrenamientosborrar', function(){
  return view('entrenamientosborrar');
})->middleware(['auth'])->name('entrenamientosborrar');

Route::get('entrenamientoscardio', function(){
  return view('entrenamientoscardio');
})->middleware(['auth'])->name('entrenamientoscardio');

Route::get('verentrenamiento', function(){
  return view('verentrenamiento');
})->middleware(['auth'])->name('verentrenamiento');

Route::get('entrenamientosanadir', function(){
  return view('entrenamientosanadir');
})->middleware(['auth'])->name('entrenamientosanadir');

Route::get('entrenamientoeditar', function(){
  return view('entrenamientoeditar');
})->middleware(['auth'])->name('entrenamientoeditar');

Route::get('modificarentrenamiento', function(){
  return view('modificarentrenamiento');
})->middleware(['auth'])->name('modificarentrenamiento');

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
