<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\horarioController;
use App\Http\Controllers\gimnasioController;
use App\Http\Controllers\entrenamientoController;
use App\Http\Controllers\perfilesController;
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
Route::get('salir','App\Http\Controllers\entrenamientoController@salir')->middleware(['auth'])->name('salir');

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth'])->name('inicio');

//Ruta que lleva a la controladora y separa el usaro sgún el rol a una u otra pagina
Route::get('horarios','App\Http\Controllers\horarioController@listadoClases')->middleware(['auth'])->name('horarios');
//Ruta que lleva a la controladora y separa el usaro sgún el rol a una u otra pagina
Route::get('entrenamientos','App\Http\Controllers\entrenamientoController@listadoMonitoresOEntrenamientos')->middleware(['auth'])->name('entrenamientos');

Route::post('listadoEntreLowEditar', [entrenamientoController::class,'listadoEntreLowEditar'])->middleware(['auth']);
Route::post('listadoEntreUpperEditar', [entrenamientoController::class,'listadoEntreUpperEditar'])->middleware(['auth']);
Route::post('listadoEntreCardioEditar', [entrenamientoController::class,'listadoEntreCardioEditar'])->middleware(['auth']);

Route::get('perfil','App\Http\Controllers\perfilesController@perfilPorRol')->middleware(['auth'])->name('perfil');
Route::post('detalleClase/{id}', [perfilesController::class,'detalleClase'])->middleware(['auth']);

Route::post('pagarUser',[perfilesController::class,'pagarUser'])->middleware(['auth']);

Route::get('confirmarPago/{id}',[perfilesController::class,'confirmarPago'])->middleware(['auth']);
Route::get('cancelarPago/{id}',[perfilesController::class,'cancelarPago'])->middleware(['auth']);

Route::post('codeaguardar',[perfilesController::class , 'codeaguardar' ] );


Route::post('listadoEntreLow', [entrenamientoController::class,'listadoEntreLow'])->middleware(['auth']);
Route::post('listadoEntreUpper', [entrenamientoController::class,'listadoEntreUpper'])->middleware(['auth']);
Route::post('listadoEntreCardio', [entrenamientoController::class,'listadoEntreCardio'])->middleware(['auth']);
Route::get('verDetallesEntrenamiento/{id}', [entrenamientoController::class,'verDetallesEntrenamiento'])->middleware(['auth']);

Route::get('linkBorrarEntrenamiento', [entrenamientoController::class,'listaEntrenos'])->middleware(['auth']);
Route::get('listadoEntreUpper', [entrenamientoController::class,'listadoEntreUpper'])->middleware(['auth']);

Route::get('crearEntrenamiento', [entrenamientoController::class,'crearEntrenamiento'])->middleware(['auth']);

//Ruta modificar horario
Route::post('modificarHorario', [horarioController::class,'modificarHorario'])->middleware(['auth']);
Route::get('update/{id}', [horarioController::class,'Modificar'])->middleware(['auth']);
Route::get('MenosClase', 'App\Http\Controllers\horarioController@MenosClase')->middleware(['auth']);
Route::get('Desapuntar', 'App\Http\Controllers\horarioController@Desapuntar')->middleware(['auth']);
Route::get('MasClase',  'App\Http\Controllers\horarioController@MasClase')->middleware(['auth']);
Route::get('VaciarClase',  'App\Http\Controllers\horarioController@VaciarClase')->middleware(['auth']);


Route::get('borrarEntrenos/{id}', [entrenamientoController::class,'borrarEntrenos'])->middleware(['auth']);

//Ruta para modificar un entrenamiento
Route::post('verEditarEntreno/{id}', [entrenamientoController::class,'verEditarEntreno'])->middleware(['auth']);
Route::post('verEditarEntreno/modificarEntreno/{id}', [entrenamientoController::class,'modificarEntreno'])->middleware(['auth']);
//Ruta asignar monitor a una clase
Route::post('asignarMonitor', [horarioController::class,'asignarMonitor'])->middleware(['auth']);
Route::get('monitorAsignado/{id}', [horarioController::class,'monitorAsignado'])->middleware(['auth']);
//Ruta para modificar un monitor
Route::post('modificarMonitor', [entrenamientoController::class,'modificarMonitor'])->middleware(['auth']);
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


Route::get('entrenamientosanadir', [entrenamientoController::class,'entrenamientosanadir'])->middleware(['auth'])->name('entrenamientosanadir');

Route::get('entrenamientoeditar', function(){
  return view('entrenamientoeditar');
})->middleware(['auth'])->name('entrenamientoeditar');

Route::get('modificarentrenamiento', function(){
  return view('modificarentrenamiento');
})->middleware(['auth'])->name('modificarentrenamiento');

Route::get('soporte', function(){
  return view('soporte');
})->middleware(['auth'])->name('soporte');


Route::get('contacto', function(){
  return view('contacto');
})->middleware(['auth'])->name('contacto');

require __DIR__.'/auth.php';
