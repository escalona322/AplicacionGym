<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  </head>
  <body>
      @section('navvar')
    <!--  background: rgb(121,225,219);
      background: linear-gradient(0deg, rgba(121,225,219,1) 0%, rgba(34,124,195,1) 100%); -->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background: rgb(236,99,116);
background: linear-gradient(0deg, rgba(236,99,116,1) 0%, rgba(51,40,40,1) 100%);">
            <div class="container">

                  <img src="{{asset('imgs/logo.png')}}" alt="foto" width="130" height="55"></img>

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                      <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="{{ route('inicio') }}" style="font-size: 1.5em; font-family: 'Bungee', cursive;">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="{{ route('horarios') }}" style="font-size: 1.5em;font-family: 'Bungee', cursive;">Horarios</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="{{ route('entrenamientos') }}" style="font-size: 1.5em;font-family: 'Bungee', cursive;">Entrenamientos</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="{{ route('perfil') }}" style="font-size: 1.5em; font-family: 'Bungee', cursive;">Perfil</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="{{ route('contacto') }}" style="font-size: 1.5em; font-family: 'Bungee', cursive;">Contacto</a></li>
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
      <p class="text-white my-2 "> Gimnasio Sportakus &copy;</p>


    </div>
  </footer>

      @show
    </body>
</html>
