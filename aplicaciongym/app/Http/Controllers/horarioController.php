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

     return view('horarios',['clases' => $clases]);
     }
}
