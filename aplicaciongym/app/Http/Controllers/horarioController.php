<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\clase;
use App\Models\Seapuntan;
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

        $apuntados = Seapuntan::All();

          switch(Auth::user()->rol){

                case 'admin':
                  return view('horariosAdmin',['clases' => $clases],['clase1' => $apuntados]);
                break;

                case 'monitor':
                    return view('horariosMonitor',['clases' => $clases],['apuntados' => $apuntados]);
                break;

                case 'usuario':
                  return view('horarios',['clases' => $clases],['apuntados' => $apuntados]);
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

            public function MasClase(Request $datos){
              //datos ==  seapuntan

              $idclase = Seapuntan::find($datos->id);

              $iduser = Auth::user()->id;

              $apuntados = Seapuntan::All();
              $esta=0;

              foreach ($apuntados as $key) {
                if($key->clase_id===$idclase->clase_id && $key->user_id===$iduser)
                $esta=1;
              }

                if ($esta==1) {
                  return redirect('/horarios');

                }else{
                  $seapuntan = new Seapuntan;
                  $seapuntan->user_id=$iduser;
                  $seapuntan->clase_id=$idclase->clase_id;
                  $seapuntan->save();
                  return redirect('/horarios');
                }







            }

            public function MenosClase(Request $datos){
              $idclase = Seapuntan::find($datos->id);

              $iduser = Auth::user()->id;

              $apuntados = Seapuntan::All();
              $esta=0;

              foreach ($apuntados as $key) {
                if($key->clase_id===$idclase->clase_id && $key->user_id===$iduser)
                $esta=1;
              }

                if ($esta==1) {
                  $seapuntan = Seapuntan::where('user_id',$iduser)->where('clase_id',$idclase->clase_id);
                 $seapuntan->delete();
                  return redirect('/horarios');

                }else{


                  return redirect('/horarios');
                }





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
