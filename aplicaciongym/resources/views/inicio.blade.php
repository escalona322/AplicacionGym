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

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>

      <div style="margin-top: 6em;">
        <div class="row">
          <!-- IZQUIERDA -->
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 col-xxl-2  ">



             </div>
              <!-- CENTRO -->
            <div class="col-12 col-md-12 col-lg-4 col-xl-8 col-xxl-8 text-center">
            <div class="contenedorInicio">
              <div class="row my-5">
                <div class="col"></div>
                <div class="col"><img src="{{asset('imgs/logo.png')}}"style="width:100%; margin-top: 10px;" alt=""></div>
                <div class="col"></div>
              </div>
              <div class="row my-5">
                <div class=" text-justify px-5">
                  <p class="textogym">Bienvenido a Sportakus,<br><br> durante más de 20 años hemos estado ayudando a nuestros clientes para encontrar su estado físico óptimo.
                  Redescubre nuestro nuevo aspecto, clases, horarios , y todo tipo de dudas sobre nosotros y nuestras instalaciones.
                  </p>
                  <p class="textogymmd text-center">Te esperamos!</p>
                </div>

              </div>


  <div class="container mt-3">
            <div id="imagenes" class="carousel slide">
            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
            <div class="carousel-item active">
            <a href="{{ route('entrenamientos') }}"><img class="card-img-top" src="{{asset('imgs/gym5.jpg')}}" alt="Entrenamientos" title="Entrenamientos"></a>
            </div>
            <div class="carousel-item">
            <a href="{{ route('horarios') }}"><img class="card-img-top" src="{{asset('imgs/gym4.jpg')}}" alt="Entrenamientos" title="Horarios"></a>
            </div>
            <div class="carousel-item">
            <a href="{{ route('contacto') }}"><img class="card-img-top" src="{{asset('imgs/gym3.jpg')}}" alt="Entrenamientos" title="Cntacto"></a>
            </div>
            </div>

            <!-- Left and right controls -->

          </div>

<script>
  $(document).ready(function(){
    // Activate Carousel with a specified interval
    $("#imagenes").carousel({interval: 4000});

    // Enable Carousel Indicators
    $(".item1").click(function(){
      $("#imagenes").carousel(0);
    });
    $(".item2").click(function(){
      $("#imagenes").carousel(1);
    });
    $(".item3").click(function(){
      $("#imagenes").carousel(2);
    });

    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
      $("#imagenes").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
      $("#imagenes").carousel("next");
    });
  });
</script>

            <div class="container-fluid text-center" style="margin-top:5%;margin-bottom:10%;" >

              <div class="row "  >
                <div class="col-xl-4 col-xs-12 d-flex justify-content-center">
                  <div class="card">
                    <a href="{{ route('entrenamientos') }}" class="btn"><img class="card-img-top" src="{{asset('imgs/gym5.jpg')}}" alt="Card image cap"></a>
                      <div class="card-body">
                    <h5 class="card-title textogym">Entrenamientos</h5>
                  <p class="card-text texto">Disfruta de nuestros entrenamientos personalizados de la mano de nuestros monitores.</p>

                      </div>
                  </div>
                </div>

                <div class="col-xl-4 col-xs-12 d-flex justify-content-center">

                  <div class="card">
                  <a href="{{ route('horarios') }}" class="btn"><img class="card-img-top" src="{{asset('imgs/gym4.jpg')}}" alt="Card image cap"></a>
                      <div class="card-body">
                    <h5 class="card-title textogym">Horarios</h5>
                  <p class="card-text texto">Disfruta de nuestros horarios actualizados al dia y ven a la clase que mas se amolde a tu tiempo.</p>

                      </div>
                  </div>

                </div>
                <div class="col-xl-4  col-xs-12 d-flex justify-content-center">

                  <div class="card">
                    <a  href="{{ route('contacto') }}" class="btn"><img class="card-img-top" src="{{asset('imgs/perfil.jpg')}}" alt="Card image cap"></a>
                      <div class="card-body">
                    <h5 class="card-title textogym">Contacto</h5>
                  <p class="card-text texto">Revisa si estas al corriente de pago y tu informacion personal, podras editarla y revisar todo lo referente a tu estancia en Sportakus.</p>

                      </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- DERECHA -->
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-2 col-xxl-2  " >

            </div>
        </div>
      </div>
</div>
    </body>
</html>
