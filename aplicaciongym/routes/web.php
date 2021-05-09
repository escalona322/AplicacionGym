<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\camarerosController;
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

Route::get('horarios', function(){
  return view('horarios');
})->middleware(['auth'])->name('horarios');

Route::get('entrenamientos', function(){
  return view('entrenamientos');
})->middleware(['auth'])->name('entrenamientos');

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
