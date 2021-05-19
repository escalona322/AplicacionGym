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
    </head>
    <body>
      <div style="margin-top: 6em;">
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
              <div class="row">
                <!-- parte arriba -->

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-12 col-xl-12 col-xxl-12">
                  <div class="card" style="width: 14rem;margin-bottom:10%;">

                      <div class="card-body">
                    <h5 class="card-title">Entrenamiento Upper Body</h5>

                  <a href="{{ route('entrenamientos') }}" class="btn btn-primary"> Upper Body </a>
                      </div>
                  </div>
                </div>

                <!-- parte abajo -->
                <div class=" col-xs-4 col-sm-4 col-md-4 col-lg-12 col-xl-12 col-xxl-12">
                  <div class="card" style="width: 14rem;margin-bottom:10%;">

                      <div class="card-body">
                    <h5 class="card-title">Entrenamiento Low body</h5>

                  <a href="{{ route('entrenamientos') }}" class="btn btn-primary"> Low Body </a>
                      </div>
                  </div>
                </div>

                <!-- cardio -->
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-12 col-xl-12 col-xxl-12">
                  <div class="card" style="width: 14rem">

                      <div class="card-body">
                    <h5 class="card-title">Entrenamiento Cardio</h5>

                  <a href="{{ route('entrenamientos') }}" class="btn btn-primary"> Cardio </a>
                      </div>
                  </div>
                </div>

              </div>

            </div>
            <!-- PARTE DEL MEDIO -->
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8 text-center">
              <h1 class="textogym">Entrenamiento escogido</h1>
              <h5 class="textogym">Upper Body</h2>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/2momU89TgYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
          
        </div>
      </div>

    </body>
</html>
