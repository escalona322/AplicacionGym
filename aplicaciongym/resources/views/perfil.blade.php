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
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
          <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
      <style media="screen">
        .textogym{
          font-size: 1em; font-family: 'Bungee', cursive;
        }
        .textogymxl{
          font-size: 2em; font-family: 'Bungee', cursive;
        }
      </style>
      <div style="margin-top: 6em;">
<div class="container">


  <div class="row">



      <div class="col-12  ">

                  <div class="row">

                    <div class="col mx-5 my-5"><img src="{{asset('imgs/default.png')}}" alt="foto" width="65%" height="85%" class="border border-danger rounded mx-3"></img></div>
                                <div class="col my-5">
                                  <div class="row">
                                      <p class="textogym">Nombre: </p>
                                  </div>
                                    <div class="row">
                                        <p class="textogym">DNI: </p>
                                    </div>
                                    <div class="row">
                                        <p class="textogym">email: </p>
                                    </div>
                                    <div class="row">
                                        <p class="textogym">Apellidos: </p>
                                    </div>
                                    <div class="row">
                                      <form style="margin-top: 2em;">
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1">Selecciona un archivo</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" ><br>
                                            <input type="submit" name="Enviar" value="Enviar" class="btn btn-danger my-2">
                                          </div>
                                        </form>
                                    </div>
                                </div>
                </div>

              <div class="row my-5">
                  <div class="col">

                  </div>
              </div>
      </div>

  </div>

</div>
      </div>




    </body>
</html>
