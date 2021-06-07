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
              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1"></div>
                  <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-10">
<div class="overflow-auto contenedorentrenos">
  <table class="table table-bordered table-striped text-center">
  <thead>
      <tr class="textogymmd">
          <th>Nombre</th>
          <th>Tipo</th>
          <th>Repeticiones</th>
          <th>Series</th>
          <th>Kcalorias</th>
          <th>Monitor</th>
          <th>Acciones</th>
      </tr>
  </thead>
  <tbody>


    @foreach($entres as $entre)
<tr class="textogymmd">
          <td>
            <div class="font-size14 ">{{$entre->nombre}}</div>
          </td>
          <td>
            <div class="font-size14 ">{{$entre->tipo}}</div>
          </td>
          <td>
            <div class="font-size14 ">{{$entre->repeticiones}}</div>
          </td>
          <td>
            <div class="font-size14 ">{{$entre->series}}</div>
          </td>
          <td>
            <div class="font-size14 ">{{$entre->Kcalorias}}</div>
          </td>
          <td>

            @if($entre->user_id==null)
               <div class="font-size14">Sin asignar</div>
             @else
             <div class="font-size14">{{$entre->User['nombre']}}</div>
           @endif
          </td>

        <td>
            <form class="" action="verEditarEntreno/{{$entre->id}}" method="get" style="display:inline-block; transform: scale(0.7);">
              <input type="text" name="id" value="" hidden>
                <button type="submit" id="editar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-edit"></i></button>

            </form>
            <form class="" action="borrarEntrenos/{{$entre->id}}" method="get" style="display:inline-block; transform: scale(0.7);">
              <input type="text" name="id" value="" hidden>
                <button type="submit" id="borrar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>
    @endforeach



      </tbody>
    </table>

    </div>

      </div>
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1">

                      <a class="msx-3" href="{{ route('entrenamientosanadir') }}">  <img src="{{asset('imgs/iconomasentre.png')}}" style="transform:scale(0.5); margin-left: -2em;"></img></a>

                    <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%;" value="Volver" onclick="location.href='entrenamientos'"><i class="fas fa-undo"></i></button>
                </div>








    </body>
</html>
