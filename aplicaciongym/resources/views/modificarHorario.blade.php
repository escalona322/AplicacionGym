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
        <link rel="stylesheet" href="{{ URL::asset('css/app2.css') }}">
    </head>
    <body>
      <div style="margin-top: 6em;">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">

      <form class="" action="update/{{$clase->id }}" method="get">

                    <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr class="textogymmd">
                            <th>Nombre</th>
                            <th>Dia</th>
                            <th>Turno</th>
                            <th>Aforo</th>
                            <th>Duracion</th>
                            <th>Monitor</th>
                        </tr>
                    </thead>
                    <tbody>



                    <tr class="textogymmd">
                        <td>
                          <div class="font-size14"><input type="text" name="nombre" value="{{$clase->nombre}}" size="10"></div>
                        </td>
                        <td>
                          <div class="font-size14 ">{{$clase->dia}}</div>
                        </td>
                        <td>
                          @if($clase->turno==1)
                          <div class="font-size14 ">9:00</div>
                          @elseif($clase->turno==2)
                          <div class="font-size14 ">10:00</div>
                          @elseif($clase->turno==3)
                          <div class="font-size14 ">17:00</div>
                          @else
                          <div class="font-size14 ">20:00</div>
                          @endif

                        </td>
                        <td>
                          <div class="font-size14"><input type="number" min="10" max="50" name="aforo" value="{{$clase->aforo}}" size="10"> personas</div>
                        </td>
                        <td>
                          <div class="font-size14"><input type="number" min="10" max="50" name="duracion" value="{{$clase->duracion}}" size="10"> minutos</div>
                        </td>

                        <td>




                           @if($clase->user_id==null)
                              <div class="font-size13">Sin asignar</div>
                            @else

                            <div class="font-size13 ">{{$clase->User['nombre']}}</div>
                          @endif

                        </td>

                    </tr>

                    </tbody>
                  </table>


    <button type="submit" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Guardar"><i class="far fa-save"></i></button>
    <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Volver" onclick="location.href='horarios'"><i class="fas fa-undo"></i></button>

</form>


</div>


    </body>
</html>
