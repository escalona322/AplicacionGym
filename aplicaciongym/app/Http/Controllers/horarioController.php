<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class horarioController extends Controller
{
    //
     public function listadoClases(Request $request){
       $clases=clase::All();
       $users = User::All();
       $user=Auth::user();
        //Ver diferentes blades conforme a tu Auth

          switch(Auth::user()->rol){

                case 'admin':
                  return view('horariosAdmin',['clases' => $clases]);
                break;

                case 'monitor':
                    return view('horariosMonitor',['clases' => $clases]);
                break;

                case 'usuario':
                  return view('horarios',['clases' => $clases]);
                break;

                default:
                  salir();
                break;

              }


            }
}





       //Si eres root ves todos los users
