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
       //Ver diferentes blades conforme a tu Auth
       $usr = User::where('rol','monitor')->get();
         switch(Auth::user()->rol){

               case 'admin':
                 return view('entrenamientosAdmin',['users'=>$usr],['clases' => $clases]);
               break;

               case 'monitor':
                   return view('entrenamientosanadir',['clases' => $clases]);
               break;

               case 'usuario':
                 return view('entrenamientos',['clases' => $clases]);
               break;

               default:
                 salir();
               break;
             }
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
