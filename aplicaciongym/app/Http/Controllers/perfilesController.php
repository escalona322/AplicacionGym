<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\clase;
use App\Models\entrenamiento;
use Illuminate\Support\Facades\Auth;

class perfilesController extends Controller
{
  public function perfilPorRol(Request $request){
    $clases=clase::All();
    $users = User::All();
    $user=Auth::user();
    $entrenamientos = Entrenamiento::All();
     //Ver diferentes blades conforme a tu Auth
     $usr = User::where('rol','monitor')->get();
       switch(Auth::user()->rol){
             case 'admin':
               return view('perfil/perfilAdmin', ['users'=>$users],['clases' => $clases]  );
             break;

             case 'monitor':
                 return view('perfil/perfilMonitor', ['users'=>$usr],['clases' => $clases]);
             break;

             case 'usuario':
               return view('perfil/perfilUser', ['users'=>$usr],['clases' => $clases]);
             break;

             default:
               salir();
             break;
           }
         }
    public function pagarUser(Request $datos){
    $userpagar = User::find($datos->id);
      $user=Auth::user();
      if($userpagar->pagado==='si'){
          return redirect('perfil');
      }else{
        return view ('perfil/confirmarPago', ['user'=>$userpagar]);
      }
    }

    public function confirmarPago(Request $request, $id){
      $userpagar = User::find($id);
      $userpagar->pagado = $request->comprobar;
      $userpagar->save();
      return redirect('perfil');
    }

    public function cancelarPago(Request $request){
      return redirect('perfil');
    }
}
