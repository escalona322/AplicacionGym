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
          <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="{{ URL::asset('/css/app2.css') }}">
    </head>
    <body>
      <div style="margin-top: 6em;">
        <div class="text-center">
            <h1 class=" textogym " >Ven a conocernos!</h1>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-0 col-lg-4 col-xl-2 col-xxl-2  "> </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-8 col-xxl-8 ">
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.11135406578!2d-3.6915725846104652!3d40.20658587939014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd421ee3b86e375d%3A0x8139803780dd1991!2sColegio%20Biling%C3%BCe%20Valle%20del%20Miro!5e0!3m2!1ses!2ses!4v1620577763777!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6  text-center">
                  <p class="font-size13">
                    Estamos en Valdemoro en el colegio valle del miro ,
                    nuestro horario es de 8 de la mañana hasta las 8 de la tarde .
                    Si tiene alguna pregunta no dude en contactarnos por telefono (658985785) ,por correo electronico
                    (Sportakus@gmail.com) o hablanos en nuestras redes sociales.
                  </p>


                  <a class="my-5" href="https://www.facebook.com/ColegioValleDelMiro/"><img src="{{asset('imgs/facebook.png')}}"width="15%" height="17%"></a>
                  <a  class="my-5"href="https://twitter.com/ValledelMiro"><img src="{{asset('imgs/twitter.png')}}"width="15%" height="17%"></a>
                  <a  class="my-5"href="https://www.instagram.com/valledelmiro/"><img src="{{asset('imgs/insta.png')}}"width="19%" height="21%"></a>


                  <h2 class="textogym my-4" >Siguenos!</h2>
                </div>
              </div>


            </div>
            <div class="col-sm-12 col-md-0 col-lg-4 col-xl-2 col-xxl-2  "></div>
        </div>
      </div>

    </body>
</html>
