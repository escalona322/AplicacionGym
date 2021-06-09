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
                                   <div class="input-group"> <input type="text" name="videoyt" value="{{$entrenamiento->videoyt}}" class="form-control " required>

                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-8">
                                       <div class="form-group my-3"> <label><span class="hidden-xs">
                                                   <h6 class="textogym my-3">Datos Varios</h6>
                                               </span></label>
                                               <div class="container">
                                                 <div class="row">
                                                    <div class="col"> <span class="textogym">Series: </span> </div>
                                                    <div class="col"> <input class="inputnumber" value="{{$entrenamiento->series}}" type="number" name="series">  </div>
                                                    <div class="col"> <span class="textogym">Intensidad: </span> </div>
                                                    <div class="col"> <select class="" name="intensidad">
                                                      <option value="Alta" selected>Alta</option>
                                                      <option value="Media">Media</option>
                                                      <option value="Baja">Baja</option>
                                                    </select>  </div></div>
                                                 <div class="row">
                                                    <div class="col"> <span class="textogym">Repeticiones: </span> </div>
                                                    <div class="col"><input class="inputnumber" value="{{$entrenamiento->repeticiones}}"type="number" name="repeticiones" value=""></div>
                                                    <div class="col"> <span class="textogym">Tipo: </span> </div>
                                                    <div class="col"> <select class="" name="tipo">
                                                      <option value="Low" selected>Low body</option>
                                                      <option value="Upper">Upper body</option>
                                                      <option value="Cardio">Cardio</option>
                                                    </select>
                                                  </div>
                                                  @php
                                                  $usA= Auth::user();
                                                  @endphp
                                                  @if($usA->rol == "admin")
                                                  <div class="row">
                                                    <div class="col">
                                                     <span class="textogym">Monitor:</span>
                                                    </div>

                                                      @foreach($users as $user)
                                                      @if($user->rol=="monitor")
                                                        @if($entrenamiento->user_id==$user->id)
                                                        <div class="col">
                                                        <label>{{$user->nombre}}</label>
                                                          <input type="radio" name="mon" value="{{$user->id}}" checked><br/>
                                                        </div>
                                                        @else
                                                        <div class="col">
                                                          <label>{{$user->nombre}}</label>
                                                          <input type="radio" name="mon" value="{{$user->id}}"><br/>
                                                        </div>

                                                        @endif
                                                      @endif
                                                      @endforeach
                                                      <div class="col">
                                                        <label>Sin monitor</label>
                                                          <input type="radio" name="mon" value="{{$user->id==null}}"><br/>
                                                      </div>
                                                  </div>
                                                  @endif

                                                 </div>

                                               </div>
                                       </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col mx-3"> <span class="textogym">Kcalorias:  </div>
                                    <div class="col"> <input class="inputcalorias"  type="number" name="Kcalorias" value="{{$entrenamiento->Kcalorias}}">  </div>

                                    </div>

                                  <div class="row">
                                    <span class="textogym">Descripción</span>

                                    </div>

                                    <div class="row">
                                    <textarea class="inputtextarea"name="descripcion" rows="4" cols="30">{{$entrenamiento->descripcion}}</textarea>
                                      </div>
                                      <button type="submit" name="button" class="mt-1 btn-lg btn-danger" style="bottom: 100%" value="Guardar"><i class="far fa-save"></i></button>
                                        <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Volver" onclick="location.href='/entrenamientos'"><i class="fas fa-undo"></i></button>
                           </form>
                           @endforeach
                </div>

            </div>

        </div>
      </div>

    </body>
</html>
