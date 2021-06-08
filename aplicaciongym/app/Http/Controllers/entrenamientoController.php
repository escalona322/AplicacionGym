<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\clase;
use App\Models\entrenamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
                 return view('entrenamiento/entrenamientosAdmin',['users'=>$usr],['clases' => $clases]);
               break;

               case 'monitor':
                   return view('entrenamiento/entrenamientosmoni');
               break;

               case 'usuario':
                 return view('entrenamiento/entrenamientos');
               break;

               default:
                 salir();
               break;
             }
           }

          public function listadoEntreLow(Request $request){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Low')->get();
            return view('entrenamiento/entrenamientoslow',['entre' => $entr]);
          }
          public function listadoEntreUpper(Request $request){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Upper')->get();
            return view('entrenamiento/entrenamientosupper',['entre' => $entr]);
          }

          public function listadoEntreCardio(Request $request){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Cardio')->get();
            return view('entrenamiento/entrenamientoscardio',['entre' => $entr]);
          }
          public function listadoEntreLowEditar(Request $request){
            $users = User::All();
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Low')->get();
            return view('entrenamiento/entrenamientosEditar',['entres' => $entr],['users'=>$users]);
          }
          public function listadoEntreUpperEditar(Request $request){
            $users = User::All();
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Upper')->get();
            return view('entrenamiento/entrenamientosEditar',['entres' => $entr],['users'=>$users]);
          }
          public function listadoEntreCardioEditar(Request $request){
            $users = User::All();
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('tipo', 'Cardio')->get();
            return view('entrenamiento/entrenamientosEditar',['entres' => $entr],['users'=>$users]);
          }

          public function borrarEntrenos(Request $datos, $id){
            $entrenamiento = Entrenamiento::find($id);
            $entrenamiento->delete();
            switch($entrenamiento->tipo){
              case 'Low':
              return redirect('listadoEntreLowEditar');
              break;
            case 'Upper':
                return redirect('listadoEntreUpperEditar');
                  break;
            case 'Cardio':
                  return redirect('listadoEntreCardioEditar');
                    break;
            }
          }

          public function verEditarEntreno(Request $datos, $id){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('id', $id)->get();
            return view('entrenamiento/modificarentrenamiento',['entre' => $entr]);
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

            switch($entrenamiento->tipo){
              case 'Low':
              return redirect('listadoEntreLowEditar');
              break;
            case 'Upper':
                return redirect('listadoEntreUpperEditar');
                  break;
            case 'Cardio':
                  return redirect('listadoEntreCardioEditar');
                    break;
            }
              }

          public function verDetallesEntrenamiento(Request $request, $id){
            $entrenamientos = Entrenamiento::All();
            $entr = Entrenamiento::where('id', $id)->get();
            return view('entrenamiento/verentrenamiento',['entre' => $entr]);
          }

          //Crear monitor
           public function crearMonitor(Request $datos){
                return view('user/crearMonitor',['user' => Auth::user()]);
           }

           public function Crear(Request $datos){
                $user = new User;
                $user->nombre=$datos->nombre;
                $user->apellidos=$datos->apellidos;
                $user->pagado="no";
                $user->rol=$datos->rol;
                $user->password=Hash::make($datos->password);
                $user->DNI=$datos->dni;
                $user->email=$datos->email;
                $user->save();

              return redirect('perfil');
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

                $entr = Entrenamiento::where('tipo', $entrenamiento->tipo)->get();
                  return view('entrenamiento/entrenamientosEditar',['entres' => $entr]);
           }




           public function eliminarMonitor(Request $datos){
             $user = user::find($datos->id);
             $user->delete();
               return redirect('perfil');
           }

           //ModificaMonitor
         public function modificarMonitor(Request $datos){
              $monMod=user::find($datos->id);

              return view('user/modificarMonitor',['monis' => $monMod]);
             }


             public function Modificar(Request $datos,$id){

               $user=user::find($datos->id);

               $user->nombre=$datos->nombre;
               $user->apellidos=$datos->apellidos;
               $user->DNI=$datos->dni;
               $user->email=$datos->email;
               $user->save();
                return redirect('perfil');

             }
             public function salir(Request $request){
               Auth::logout();

               $request->session()->invalidate();
               $request->session()->regenerateToken();

               return redirect('login');
             }


}
