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
       $apuntados = Seapuntan::All();

         switch(Auth::user()->rol){

               case 'admin':
                 return view('horario/horariosAdmin',['fullclases'=>$apuntados,'clases' => $clases]
               );
               break;

               case 'monitor':
               return view('horario/horariosMonitor',['fullclases'=>$apuntados,'clases' => $clases]
             );
               break;

               case 'usuario':
               return view('horario/horarios',['fullclases'=>$apuntados,'clases' => $clases]
             );
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

                return view('horario/modificarHorario',['clase' => $claseMod],['users'=>$usr]);
            }


            public function Modificar(Request $datos,$id){
              $clase=clase::find($datos->id);
              $clase->nombre=$datos->nombre;
              $clase->aforo=$datos->aforo;
              $clase->duracion=$datos->duracion;
              $clase->save();

               return redirect('horario/horarios');
            }

            public function MasClase(Request $datos){
              $idclase = clase::find($datos->id);
              $iduser = Auth::user()->id;
              $apuntados = Seapuntan::All();
              $esta=0;

              foreach ($apuntados as $key) {
                if($key->clase_id===$idclase->id && $key->user_id===$iduser)
                $esta=1;
              }

              if ($esta==1) {
                  return redirect('horario/horarios');
              }else{
                  $seapuntan = new Seapuntan;
                  $seapuntan->user_id=$iduser;
                  $seapuntan->clase_id=$idclase->id;
                  $seapuntan->save();
                    return redirect('horario/horarios');
                }
            }


            public function MenosClase(Request $datos){
              $idclase = clase::find($datos->id);
              $iduser = Auth::user()->id;
              $apuntados = Seapuntan::All();
              $esta=0;

              foreach ($apuntados as $key) {
                if($key->clase_id===$idclase->id && $key->user_id===$iduser)
                  $esta=1;
                }

                if ($esta==1) {
                  $seapuntan = Seapuntan::where('user_id',$iduser)->where('clase_id',$idclase->id);
                  $seapuntan->delete();
                    return redirect('horario//horarios');
                }else{
                    return redirect('horario//horarios');
                }
              }


              public function VaciarClase(Request $datos){
                $idclase = clase::find($datos->id);
                $iduser = Auth::user()->id;
                $apuntados = Seapuntan::All();
                $esta=0;

                foreach ($apuntados as $key) {
                  if($key->clase_id===$idclase->id)
                    $esta=1;
                  }

                  if ($esta==1) {
                    $seapuntan = Seapuntan::where('clase_id',$idclase->id);
                    $seapuntan->delete();
                      return redirect('horario//horarios');
                  }else{
                      return redirect('horario//horarios');
                  }
                }


            public function asignarMonitor(Request $datos){
                 $claseMod=clase::find($datos->id);
                 $usr = User::where('rol','monitor')->get();

                  return view('user/asignarMonitor',['clase' => $claseMod],['users'=>$usr]);
              }


              public function monitorAsignado(Request $datos, $id){

                $cla=clase::where('id',$id)->first();
                $cla->user_id=$datos->mon;
                $cla->save();
                  return redirect('horario/horarios');
              }
}
