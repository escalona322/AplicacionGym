<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\clase;
use App\Models\entrenamiento;
use Illuminate\Support\Facades\Auth;

class gimansioController extends Controller
{
  public function entrada(Request $request){


      switch(Auth::user()->rol){

            case 'admin':
              return view('inicio');
            break;

            case 'monitor':
              return view('inicio');
            break;

            case 'usuario':
              return view('inicio');
            break;

            default:
              salir();
            break;

          }

  }





  public function salir(Request $request){
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
