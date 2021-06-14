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
      <div style="margin-top: 6em; margin-bottom: 3em;">
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 contenedorentrenos">

            </div>
            <!-- PARTE DEL MEDIO -->
            <div   class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                <div class="row">
                    <p class="textogymxl text-center"> Upper Body </p>
                </div>
                <div class="container contenedorentrenos overflow-auto">
                  @foreach($entre as $entrenamiento)


                       <div class="row fondoentrenos">
                         <div class="col"><p class="textogyml">{{$entrenamiento->nombre}}</p></div>
                         <div class="col">

                               <div class="row"><p class="textogym my-3">Series:  {{$entrenamiento->series}}</p></div>
                               <div class="row"><p class="textogym">Repeticiones: {{$entrenamiento->repeticiones}}</p></div>
                           </div>
                         <div class="col">
                           <form class="" action="verDetallesEntrenamiento/{{$entrenamiento->id}}" method="post">
                             @csrf
                           <button class="botonentrenos" type="submit" name="button">Más informacion</button>
                         </form></div>
                       </div>

                     @endforeach
                   </div>
                   <div class="container contenedorcards my-4">
                       <div class="row">
                         <div class="col my-3">
                           <div class="card text-center textogym cardsentreno">
                               <div class="card-body">
                                 <form class="" action="listadoEntreUpper" method="post">
                                   @csrf
                                   <button class="btn " type="submit" name="button">Entrenamiento Upper</button>
                                 </form>
                               </div>
                           </div>
                         </div>
                         <div class="col my-3">
                           <div class="card text-center textogym cardsentreno">
                             <div class="card-body">
                                 <form class="" action="listadoEntreLow" method="post">
                                   @csrf
                                   <button class="btn " type="submit" name="button">Entrenamiento low</button>
                                 </form>
                             </div>
                           </div>
                         </div>
                         <div class="col my-3">
                           <div class="card text-center textogym cardsentreno" >
                               <div class="card-body">
                                 <form class="" action="listadoEntreCardio" method="post">
                                   @csrf
                                   <button class="btn " type="submit" name="button">Entrenamiento cardio</button>
                                 </form>
                               </div>
                           </div>
                         </div>
                       </div>
                   </div>
            </div>

        </div>
      </div>

    </body>
</html>
