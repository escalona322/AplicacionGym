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
        @foreach($entre as $entrenamiento)

        <div class="row my-2">
            <p class="textoejercicio text-center">Ejercicio:<span class="text-center mx-2 txblack">{{$entrenamiento->nombre}}</span>
        </div>
        <div class="row my-2">
          <p class="textoejercicio text-center">Intensidad: <span class="text-center mx-2 txblack">{{$entrenamiento->intensidad}}</span>
        </div>
        <div class="row my-2">
            <p class="textoejercicio text-center">Tipo: <span class="text-center mx-2 txblack"> {{$entrenamiento->tipo}}</span>
        </div>
        <div class="row my-2">
          <p class="textoejercicio text-center ">Repeticiones: <span class="text-center mx-2 txblack">{{$entrenamiento->repeticiones}}</span>
        </div>
        <div class="row my-2">
            <p class="textoejercicio text-center">Series: <span class="text-center mx-2 txblack">{{$entrenamiento->series}}</span></p>
        </div>
        <div class="row my-2">
            <p class="textoejercicio text-center">Kcalorias medias:<span class="text-center mx-2 txblack">{{$entrenamiento->Kcalorias}}</span>
        </div>
        <div class="row my-2">
          <p class="textoejercicio text-center">Descripción</p>
        </div>
        <div class="row my-2">
          <div class="col">                    </div>
          <div class="col"> <p class="textogym text-center">{{$entrenamiento->descripcion}}</p>                   </div>
          <div class="col">                    </div>

        </div>
        <div class="row my-5">
          <div class="col">
          </div>
          <div class="col">
            <iframe class="videoyt" src="{{$entrenamiento->videoyt}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col">
          </div>
          </div>
      </div>
      @endforeach
    </div>

  </body>
</html>
