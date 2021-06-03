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
        $clase1 = Seapuntan::where('clase_id','1')->get();
        $clase2 = Seapuntan::where('clase_id','2')->get();
        $clase3 = Seapuntan::where('clase_id','3')->get();
        $clase4 = Seapuntan::where('clase_id','4')->get();
        $clase5 = Seapuntan::where('clase_id','5')->get();
        $clase6 = Seapuntan::where('clase_id','6')->get();
        $clase7 = Seapuntan::where('clase_id','7')->get();
        $clase8 = Seapuntan::where('clase_id','8')->get();
        $clase9 = Seapuntan::where('clase_id','9')->get();
        $clase10 = Seapuntan::where('clase_id','10')->get();
        $clase11 = Seapuntan::where('clase_id','11')->get();
        $clase12 = Seapuntan::where('clase_id','12')->get();
        $clase13 = Seapuntan::where('clase_id','13')->get();
        $clase14 = Seapuntan::where('clase_id','14')->get();
        $clase15 = Seapuntan::where('clase_id','15')->get();
        $clase16 = Seapuntan::where('clase_id','16')->get();
        $clase17 = Seapuntan::where('clase_id','17')->get();
        $clase18 = Seapuntan::where('clase_id','18')->get();
        $clase19 = Seapuntan::where('clase_id','19')->get();
        $clase20 = Seapuntan::where('clase_id','20')->get();
        $clase21 = Seapuntan::where('clase_id','21')->get();
        $clase22 = Seapuntan::where('clase_id','22')->get();
        $clase23 = Seapuntan::where('clase_id','23')->get();
        $clase24 = Seapuntan::where('clase_id','24')->get();


          switch(Auth::user()->rol){

                case 'admin':
                  return view('horariosAdmin',['clases' => $clases,
                  'clase1' => $clase1,
                  'clase2' => $clase2,
                  'clase3' => $clase3,
                  'clase4' => $clase4,
                  'clase5' => $clase5,
                  'clase6' => $clase6,
                  'clase7' => $clase7,
                  'clase8' => $clase8,
                  'clase9' => $clase9,
                  'clase10' => $clase10,
                  'clase11' => $clase11,
                  'clase12' => $clase12,
                  'clase13' => $clase13,
                  'clase14' => $clase14,
                  'clase15' => $clase15,
                  'clase16' => $clase16,
                  'clase17' => $clase17,
                  'clase18' => $clase18,
                  'clase19' => $clase19,
                  'clase20' => $clase20,
                  'clase21' => $clase21,
                  'clase22' => $clase22,
                  'clase23' => $clase23,
                  'clase24' => $clase24]
                );
                break;

                case 'monitor':
                return view('horariosMonitor',['clases' => $clases,
                'clase1' => $clase1,
                'clase2' => $clase2,
                'clase3' => $clase3,
                'clase4' => $clase4,
                'clase5' => $clase5,
                'clase6' => $clase6,
                'clase7' => $clase7,
                'clase8' => $clase8,
                'clase9' => $clase9,
                'clase10' => $clase10,
                'clase11' => $clase11,
                'clase12' => $clase12,
                'clase13' => $clase13,
                'clase14' => $clase14,
                'clase15' => $clase15,
                'clase16' => $clase16,
                'clase17' => $clase17,
                'clase18' => $clase18,
                'clase19' => $clase19,
                'clase20' => $clase20,
                'clase21' => $clase21,
                'clase22' => $clase22,
                'clase23' => $clase23,
                'clase24' => $clase24]
              );
                break;

                case 'usuario':
                return view('horarios',['clases' => $clases,
                'clase1' => $clase1,
                'clase2' => $clase2,
                'clase3' => $clase3,
                'clase4' => $clase4,
                'clase5' => $clase5,
                'clase6' => $clase6,
                'clase7' => $clase7,
                'clase8' => $clase8,
                'clase9' => $clase9,
                'clase10' => $clase10,
                'clase11' => $clase11,
                'clase12' => $clase12,
                'clase13' => $clase13,
                'clase14' => $clase14,
                'clase15' => $clase15,
                'clase16' => $clase16,
                'clase17' => $clase17,
                'clase18' => $clase18,
                'clase19' => $clase19,
                'clase20' => $clase20,
                'clase21' => $clase21,
                'clase22' => $clase22,
                'clase23' => $clase23,
                'clase24' => $clase24]
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

              $idclase = clase::find($datos->id);

              $iduser = Auth::user()->id;

              $apuntados = Seapuntan::All();
              $esta=0;

              foreach ($apuntados as $key) {
                if($key->clase_id===$idclase->id && $key->user_id===$iduser)
                $esta=1;
              }

                if ($esta==1) {
                  return redirect('/horarios');

                }else{
                  $seapuntan = new Seapuntan;
                  $seapuntan->user_id=$iduser;
                  $seapuntan->clase_id=$idclase->id;
                  $seapuntan->save();
                  return redirect('/horarios');
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
                    return redirect('/horarios');
                }else{
                  return redirect('/horarios');
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
