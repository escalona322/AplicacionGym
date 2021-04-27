<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      @section('navvar')
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background: rgb(121,225,219);
      background: linear-gradient(0deg, rgba(121,225,219,1) 0%, rgba(34,124,195,1) 100%);">
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

      @show
    </body>
</html>
