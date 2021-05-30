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
          <link rel="script/javascript" href="{{ URL::asset('js/app2.js') }}">
    </head>
    <body>
      <div style="margin-top: 6em;">
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 contenedorentrenos">
            <a class="textogym" href="{{ route('prueba') }}">prueba</a>
            </div>
            <!-- PARTE DEL MEDIO -->
            <div   class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                <div class="row">
                    <p class="textogymxl text-center"> Cardio </p>
                </div>
                <div class="container contenedorentrenos">
                    <div class="row fondoentrenos">
                      <div class="col"><p class="textogymxl">Sentadillas</p></div>
                      <div class="col">

                            <div class="row"><p class="textogym my-3">Series: 3</p></div>
                            <div class="row"><p class="textogym">Repeticiones: 15</p></div>
                        </div>                           <!--   el numero de enseñarentreno() corresponde al identrenos -->
                      <div class="col">
                        <!-- Button trigger modal -->
            <!-- El id del boton tiene que ser el id deL entrenamiento -->
  <button id="Modal1" type="button" class="btn btn-primary textogym botonentrenos" data-toggle="modal" data-target="#ModalCenter">
    Más informacion
  </button>

  <!-- Modal -->
  <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

                       </div>
                    </div>
                    <div class="row fondoentrenos">
                      <div class="col"><p class="textogymxl">Sentadillas</p></div>
                      <div class="col">

                            <div class="row"><p class="textogym my-3">Series: 3</p></div>
                            <div class="row"><p class="textogym">Repeticiones: 15</p></div>
                        </div>                           <!--   el numero de enseñarentreno() corresponde al identrenos -->
                      <div class="col"> <button class="botonentrenos" onclick="enseñarentreno(1)"> Más Información </button></div>
                    </div>
                    <div class="row fondoentrenos">
                      <div class="col"><p class="textogymxl">Sentadillas</p></div>
                      <div class="col">

                            <div class="row"><p class="textogym my-3">Series: 3</p></div>
                            <div class="row"><p class="textogym">Repeticiones: 15</p></div>
                        </div>                           <!--   el numero de enseñarentreno() corresponde al identrenos -->
                      <div class="col"> <button class="botonentrenos" onclick="enseñarentreno(1)"> Más Información </button></div>
                    </div>
                    <div class="row fondoentrenos">
                      <div class="col"><p class="textogymxl">Sentadillas</p></div>
                      <div class="col">

                            <div class="row"><p class="textogym my-3">Series: 3</p></div>
                            <div class="row"><p class="textogym">Repeticiones: 15</p></div>
                        </div>                           <!--   el numero de enseñarentreno() corresponde al identrenos -->
                      <div class="col"> <button class="botonentrenos" onclick="enseñarentreno(1)"> Más Información </button></div>
                    </div>
                    <div class="row fondoentrenos">
                      <div class="col"><p class="textogymxl">Sentadillas</p></div>
                      <div class="col">

                            <div class="row"><p class="textogym my-3">Series: 3</p></div>
                            <div class="row"><p class="textogym">Repeticiones: 15</p></div>
                        </div>                           <!--   el numero de enseñarentreno() corresponde al identrenos -->
                      <div class="col"> <button class="botonentrenos" onclick="enseñarentreno(1)"> Más Información </button></div>
                    </div>

                </div>
                <div class="container contenedorcards ">
                    <div class="row">
                      <div class="col my-3">
                        <div class="card text-center textogym cardsentreno">
                            <div class="card-body">
                              <h5 class="card-title">Entrenamiento Upper Body</h5>
                              <a href="{{ route('entrenamientosupper') }}" class="btn btn-primary"> Upper Body </a>
                            </div>
                        </div>
                      </div>
                      <div class="col my-3">
                        <div class="card text-center textogym cardsentreno">

                            <div class="card-body">
                          <h5 class="card-title">Entrenamiento Low body</h5>

                        <a href="{{ route('entrenamientoslow') }}" class="btn btn-primary"> Low Body </a>
                            </div>
                        </div>
                      </div>
                      <div class="col my-3">
                        <div class="card text-center textogym cardsentreno" >

                            <div class="card-body">
                          <h5 class="card-title">Entrenamiento Cardio</h5>

                        <a href="{{ route('entrenamientoscardio') }}" class="btn btn-primary"> Cardio </a>
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
