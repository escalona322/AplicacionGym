<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\clase;
use App\Models\entrenamiento;
use App\Models\Seapuntan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class perfilesController extends Controller
{
  public function perfilPorRol(Request $request){
    $clases=clase::All();
    $users = User::All();
    $user = Auth::user();
    $entrenamientos = Entrenamiento::All();
    $apuntados = Seapuntan::where('user_id',$user->id)->get();
    $misclases = clase::where('user_id',$user->id)->get();


     //Ver diferentes blades conforme a tu Auth
     $usr = User::where('rol','monitor')->get();
       switch(Auth::user()->rol){
             case 'admin':
               return view('perfil/perfilAdmin', ['users'=>$users],['clases' => $clases]);
             break;

             case 'monitor':
                 return view('perfil/perfilMonitor', ['users'=>$users],['clases' => $misclases]);
             break;

             case 'usuario':
               return view('perfil/perfilUser',['user'=>$user,'clases' => $clases,'fullclases'=>$apuntados]);
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


    public function detalleClase(Request $datos, $id){
      $apuntados = Seapuntan::where('clase_id',$id)->get();
      $clase = clase::find($id);

      return view ('perfil/detalleClase', ['apuntado'=>$apuntados,'clase'=>$clase]);

    }


    public function codeaguardar(Request $request){
        $user=Auth::user();
        // script para subir la imagen
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($user->id).".".$imagen->guessExtension();
            $ruta = public_path("img/post/");

            //$imagen->move($ruta,$nombreimagen);
            $imagen->move($ruta,$nombreimagen);
            $user->imagen = $nombreimagen;
            $user->save();
            return redirect('perfil')->with('modificado', 'Foto de perfil actualizada, es posible que tarde unos segundos...');
        }else{
            return redirect('perfil')->with('sinFoto', 'No has elegido ningún archivo.');
        }


    }
}
