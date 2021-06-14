<!DOCTYPE html>
<html lang="en">
    <head>
      @extends('layouts.layout')
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable-no, initial-scale-1=0">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sportakus</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
          <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
          <link rel="stylesheet" href="{{ URL::asset('css/app2.css') }}">
    </head>
    <body>
      <div style="margin-top: 6em;">

        <div class="row" >

            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1 contenedorentrenos">

            </div>
            <!-- PARTE DEL MEDIO -->
            <div   class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-10">
                <div class="row">

                    <p class="textogymxl text-center"> -Editar entrenamientos- </p>
                </div>
                <div class="container contenedorentrenos">
                    @foreach($entre as $entrenamiento)

                  <form class="" action="modificarEntreno/{{$entrenamiento->id}}" method="post">
                    @csrf
                               <div class="form-group my-3"> <label for="nombreentreno">
                                       <h6 class="textogym">Nombre</h6>
                                   </label> <input type="text" name="nombre" value="{{$entrenamiento->nombre}}" required class="form-control "> </div>
                               <div class="form-group my-3">
                                 <label for="cardNumber">
                                       <h6 class="textogym">Link video YouTube</h6>
                                   </label>
                               <input type="text" name="videoyt" value="{{$entrenamiento->videoyt}}" class="form-control " required>


                               </div>
                               <div class="row">
                                   <div class="col-sm-8">
                                    <span class="hidden-xs">
                                                   <h6 class="textogym my-3">Datos Varios</h6>
                                               </span></label>

                                                 <div class="row">
                                                    <div class="col-2"> <span class="textogym">Series: </span> </div>
                                                    <div class="col-2"> <input class="inputnumber" value="{{$entrenamiento->series}}" type="number" name="series" size="5" min="1" max="9999">  </div>
                                                    <div class="col-2"> <span class="textogym">Intensidad: </span> </div>
                                                    <div class="col-2"> <select class="" name="intensidad">
                                                      <option value="Alta" selected>Alta</option>
                                                      <option value="Media">Media</option>
                                                      <option value="Baja">Baja</option>
                                                    </select>  </div>

                                                    <div class="col-2"> <span class="textogym">Kcalorias:  </div>
                                                    <div class="col-2"> <input class="inputnumber"  type="number" name="Kcalorias" value="{{$entrenamiento->Kcalorias}}"  size="5" min="1" max="9999">  </div>
                                                  </div>
                                                 <div class="row my-1">
                                                    <div class="col-2"> <span class="textogym">Reps.: </span> </div>
                                                    <div class="col-2"> <input class="inputnumber" value="{{$entrenamiento->repeticiones}}"type="number" name="repeticiones" size="5" min="1" max="9999"></div>
                                                    <div class="col-2"> <span class="textogym">Tipo: </span> </div>
                                                    <div class="col-2"> <select class="" name="tipo">
                                                      <option value="Low" selected>Low body</option>
                                                      <option value="Upper">Upper body</option>
                                                      <option value="Cardio">Cardio</option>
                                                    </select>
                                                  </div>

                                                    @php
                                                    $usA= Auth::user();
                                                    @endphp
                                                    @if($usA->rol == "admin")

                                                      <div class="col-2"><span class="textogym">Monitor:</span> </div>
                                                      <div class="col-2">
                                                        <select class="" name="">
                                                          @foreach($users as $user)
                                                          @if($user->rol=="monitor")
                                                            @if($entrenamiento->user_id==$user->id)
                                                              <option value="{{$user->nombre}}" selected>{{$user->nombre}}</option>
                                                            @else
                                                            <option value="{{$user->nombre}}" selected>{{$user->nombre}}</option>
                                                            @endif
                                                          @endif
                                                          @endforeach

                                                              <option value="{{$user->id==null}}" selected>{{$user->nombre}}</option>

                                                      </div>
                                                      @endif
                                                        </select>

                                               </div>


                                </div>

                                  <div class="row">
                                    <span class="textogym">Descripción</span>

                                    </div>

                                    <div class="row">
                                    <textarea class="inputtextarea"name="descripcion" rows="4" cols="30">{{$entrenamiento->descripcion}}</textarea>
                                    </div>
                                    <div class="row">
                                      <div class="col-2">
                                        <button type="submit" name="button" class="btn-lg btn-danger mt-1 " style="bottom: 100%" value="Guardar"><i class="far fa-save"></i></button>
                                        <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Volver" onclick="location.href='/entrenamientos'"><i class="fas fa-undo"></i></button>
                                      </div>
                                    



                                    </div>


                           </form>
                           @endforeach
                </div>

            </div>

        </div>
      </div>

    </body>
</html>
