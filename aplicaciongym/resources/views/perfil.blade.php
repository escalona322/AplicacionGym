<!DOCTYPE html>
<html lang="en">
    <head>
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
        <link rel="stylesheet" href="/css/web.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation-->
        <div class="container">

          <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                <div class="container">

                      <img src="{{asset('imgs/logo.png')}}" alt="foto" width="130" height="55"></img>

                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto my-2 my-lg-0">
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('inicio') }}">Inicio</a></li>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('horarios') }}">Horarios</a></li>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('entrenamientos') }}">Entrenamientos</a></li>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('soporte') }}">Soporte</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('perfil') }}">Perfil</a></li>
                        </ul>
                    </div>
                </div>

            </nav>
          </div>

          <div class="row">
            <div class="">
              prueba
            </div>
          </div>

            <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>
        <footer class="footer bg-dark rounded-top text-center">
          <div class="container py-2">
            <p class="text-white my-2 "> Gimansio Sportakus &copy;</p>


          </div>
        </footer>
      </div>
    </body>
</html>
