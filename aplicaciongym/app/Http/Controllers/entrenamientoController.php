<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\clase;
use App\Models\entrenamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class entrenamientoController extends Controller
{
    //
    public function listadoMonitoresOEntrenamientos(Request $request){
      $clases=clase::All();
      $users = User::All();
      $user=Auth::user();
      $entrenamientos = Entrenamiento::All();
       //Ver diferentes blades conforme a tu Auth
       $usr = User::where('rol','monitor')->get();
         switch(Auth::user()->rol){

               case 'admin':
                 return view('entrenamientosAdmin',['users'=>$usr],['clases' => $clases]);
               break;

               case 'monitor':
                   return view('entrenamientosmoni');
               break;

               case 'usuario':
                 return view('entrenamientos');
               break;

               default:
                 salir();
               break;
             }
           }

          public function listadoEntreLow(Request $request){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Low')->get();
            return view('entrenamientoslow',['entre' => $entr]);
          }

          public function listadoEntreLowEditar(Request $request){
            $users = User::All();
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Low')->get();
            return view('entrenamientosEditar',['entres' => $entr],['users'=>$users]);
          }
          public function listadoEntreUpperEditar(Request $request){
            $users = User::All();
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Upper')->get();
            return view('entrenamientosEditar',['entres' => $entr],['users'=>$users]);
          }
          public function listadoEntreCardioEditar(Request $request){
            $users = User::All();
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Cardio')->get();
            return view('entrenamientosEditar',['entres' => $entr],['users'=>$users]);
          }

          public function listaEntrenos(Request $request){
            $entrenamientos = Entrenamiento::All();
            return view('entrenamientosborrar',['entre' => $entrenamientos]);
          }
          public function listaEntrenosEditar(Request $request){
            $entrenamientos = Entrenamiento::All();
            return view('entrenamientoeditar',['entre' => $entrenamientos]);
          }

          public function borrarEntrenos(Request $datos){
            $entrenamiento = Entrenamiento::find($datos->id);
            $entrenamiento->delete();
            return redirect('/entrenamientos');
          }

          public function linkEditarEntreno(Request $request){
            $entrenamientos = Entrenamiento::All();
            return view('verentrenamiento',['entre' => $entrenamientos]);
          }

          public function verEditarEntreno(Request $datos){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('id', $datos->id)->get();
            return view('/modificarentrenamiento',['entre' => $entr]);
          }

              public function modificarEntreno(Request $datos,$id){

                $entrenamiento= Entrenamiento::find($datos->id);


                  $entrenamiento->intensidad=$datos->intensidad;
                  $entrenamiento->tipo=$datos->tipo;
                  $entrenamiento->nombre=$datos->nombre;
                  $entrenamiento->repeticiones=$datos->repeticiones;
                  $entrenamiento->series=$datos->series;
                  $entrenamiento->videoyt=$datos->videoyt;
                  $entrenamiento->descripcion=$datos->descripcion;

                  $entrenamiento->Kcalorias=$datos->Kcalorias;
                  $entrenamiento->save();

                  $entrenamientos = Entrenamiento::All();
                  return view('entrenamientoeditar',['entre' => $entrenamientos]);
              }

          public function listadoEntreUpper(Request $request){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Upper')->get();
            return view('entrenamientosupper',['entre' => $entr]);
          }

          public function listadoEntreCardio(Request $request){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Cardio')->get();
            return view('entrenamientoscardio',['entre' => $entr]);
          }

          public function verDetallesEntrenamiento(Request $request, $id){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('id', $id)->get();
            return view('verentrenamiento',['entre' => $entr]);
          }

          //Crear monitor
           public function crearMonitor(Request $datos){
                return view('crearMonitor');
           }

           public function Crear(Request $datos){
                $user = new User;
                $user->nombre=$datos->nombre;
                $user->apellidos=$datos->apellidos;
                $user->pagado="si";
                $user->rol="monitor";
                $user->password=$datos->password;
                $user->DNI=$datos->dni;
                $user->email=$datos->email;
                $user->save();

              return redirect('/entrenamientos');
           }

           public function crearEntrenamiento(Request $datos){
             $entrenamiento = new Entrenamiento;

                $entrenamiento->intensidad=$datos->intensidad;
                $entrenamiento->tipo=$datos->tipo;
                $entrenamiento->nombre=$datos->nombre;
                $entrenamiento->repeticiones=$datos->repeticiones;
                $entrenamiento->series=$datos->series;
                $entrenamiento->videoyt=$datos->videoyt;
                $entrenamiento->descripcion=$datos->descripcion;
                $entrenamiento->Kcalorias=$datos->Kcalorias;
                $entrenamiento->user_id=$datos->user_id;
                $entrenamiento->save();

              return redirect('/entrenamientos');
           }




           public function eliminarMonitor(Request $datos){
             $user = user::find($datos->id);
             $user->delete();
               return redirect('/entrenamientos');
           }

           //ModificaMonitor
         public function modificarMonitor(Request $datos){
              $monMod=user::find($datos->id);

              return view('modificarMonitor',['monis' => $monMod]);
             }


             public function Modificar(Request $datos,$id){

               $user=user::find($datos->id);

               $user->nombre=$datos->nombre;
               $user->apellidos=$datos->apellidos;
               $user->DNI=$datos->dni;
               $user->email=$datos->email;

               $user->save();



                return redirect('/entrenamientos');

             }


}
