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
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 contenedorentrenos">
                  <a href="{{ route('entrenamientosanadir') }}" class="btn btn-primary"> Link añadir entrenamiento </a>
            </div>
            <!-- PARTE DEL MEDIO -->
            <div   class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                <div class="row">
                    <p class="textogymxl text-center"> Página Principal </p>
                </div>
                <div class="container contenedorcards ">
                    <div class="row">
                      <div class="col my-3">
                        <div class="card text-center textogym cardsentreno">
                            <div class="card-body">
                              <form class="" action="listadoEntreUpper" method="get">
                                <button class="botonentrenos" type="submit" name="button">Entrenamiento Upper</button>
                              </form>
                            </div>
                        </div>
                      </div>
                      <div class="col my-3">
                        <div class="card text-center textogym cardsentreno">

                            <div class="card-body">
                        <form class="" action="listadoEntreLow" method="get">
                          <button class="botonentrenos" type="submit" name="button">Entrenamiento low</button>
                        </form>
                            </div>
                        </div>
                      </div>
                      <div class="col my-3">
                        <div class="card text-center textogym cardsentreno" >

                            <div class="card-body">

                          <form class="" action="listadoEntreCardio" method="get">
                            <button class="botonentrenos" type="submit" name="button">Entrenamiento Cardio</button>
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
