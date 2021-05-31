<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <div style="margin: 6em;">
      <div class="container-fluid">

        <div class="row my-2">
            <p class="textoejercicio text-center">Ejercicio: Sentadillas</p>
        </div>
        <div class="row my-2">
          <p class="textoejercicio text-center">Intensidad: Baja</p>
        </div>
        <div class="row my-2">
            <p class="textoejercicio text-center">Tipo: Low Body</p>
        </div>
        <div class="row my-2">
          <p class="textoejercicio text-center">Repeticiones: 15</p>
        </div>
        <div class="row my-2">
            <p class="textoejercicio text-center">Series: 3</p>
        </div>
        <div class="row my-2">
          <p class="textoejercicio text-center">Descripción</p>
        </div>
        <div class="row my-2">
          <p class="textogym text-center">El ejercicio consiste en flexionar las rodillas y bajar el cuerpo manteniendo la verticalidad, <br>
            para luego regresar a una posición erguida.<br>
             Por lo general, mientras realiza sentadillas,<br>
             la persona sostiene algún peso con sus brazos o el cuello.</p>
        </div>
        <div class="row my-5">
          <div class="col">
          </div>
          <div class="col">
            <iframe class="videoyt" src="https://www.youtube.com/embed/Yw86UcprH1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col">
          </div>
          </div>
      </div>
    </div>

  </body>
</html>
