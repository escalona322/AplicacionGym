<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Sportakus') }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/app2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  </head>
  <body>
      @section('navbar')
    <!--  background: rgb(121,225,219);
      background: linear-gradient(0deg, rgba(121,225,219,1) 0%, rgba(34,124,195,1) 100%); -->


  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top" style="background: rgb(236,99,116);
    background: linear-gradient(0deg, rgba(236,99,116,1) 0%, rgba(51,40,40,1) 100%);">
      <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img src="{{asset('imgs/logo.png')}}" height="55" width="130"alt="">
  </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" >
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav">
  <li class="nav-item mx-4">
    <a class="textonavbar" href="{{ route('inicio') }}">Inicio</a>
  </li>
  <li class="nav-item mx-4">
    <a class="textonavbar" href="{{ route('horarios') }}">Horarios</a>
  </li>
  <li class="nav-item mx-4">
    <a class="textonavbar" href="{{ route('entrenamientos') }}">Entrenamientos</a>
  </li>
  <li class="nav-item mx-4">
    <a class="textonavbar" href="{{ route('perfil') }}">Perfil</a>
  </li>
  <li class="nav-item mx-4">
    <a class="textonavbar" href="{{ route('contacto') }}">Contacto</a>
  </li>
</ul>
</div>
</div>
</nav>

    @show


@section('footer')
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
      <h4 class="text-white my-3 "> Gimnasio Sportakus &copy;</h4>


    </div>
  </footer>
@show

    </body>
</html>
