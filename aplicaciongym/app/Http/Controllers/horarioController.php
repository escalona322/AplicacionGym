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

          public function modificarHorario(Request $datos){
               $claseMod=clase::find($datos->id);
               $users = User::All();
               $usr = User::where('rol','monitor')->get();

                return view('modificarHorario',['clase' => $claseMod],['users'=>$usr]);
            }

            public function Modificar(Request $datos,$id){
              $clase=clase::find($datos->id);
              $clase->nombre=$datos->nombre;
              $clase->aforo=$datos->aforo;
              $clase->duracion=$datos->duracion;
              $clase->save();


              $clases=clase::All();
               return redirect('/horarios');

            }

            public function asignarMonitor(Request $datos){
                 $claseMod=clase::find($datos->id);
                 $users = User::All();
                 $usr = User::where('rol','monitor')->get();

                  return view('asignarMonitor',['clase' => $claseMod],['users'=>$usr]);
              }

              public function monitorAsignado(Request $datos, $id){

                $cla=clase::where('id',$id)->first();
                $cla->user_id=$datos->mon;
                $cla->save();
                return redirect('/horarios');

              }


}





       //Si eres root ves todos los users
