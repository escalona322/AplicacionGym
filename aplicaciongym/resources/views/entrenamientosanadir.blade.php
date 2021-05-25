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
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2 contenedorentrenos">

            </div>
            <!-- PARTE DEL MEDIO -->
            <div   class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                <div class="row">
                    <p class="textogymxl text-center"> -Añadir entrenamientos- </p>
                </div>
                <div class="container contenedorentrenos">
                  <form role="form">
                               <div class="form-group"> <label for="nombreentreno">
                                       <h6>Nombre del nuevo entreno</h6>
                                   </label> <input type="text" name="nombreentreno" placeholder="EJ: Sentiadillas" required class="form-control "> </div>
                               <div class="form-group">
                                 <label for="cardNumber">
                                       <h6>Link video YouTube</h6>
                                   </label>
                                   <div class="input-group"> <input type="text" name="linkyt" placeholder="EJ: youtube.com/watch?ejemplo" class="form-control " required>

                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-8">
                                       <div class="form-group"> <label><span class="hidden-xs">
                                                   <h6>Datos Varios</h6>
                                               </span></label>
                                           <div class="input-group"> <label for="Repeticiones" class="labelinputs">Repeticiones</label> <input type="number" placeholder="0" name="Repeticiones" class="form-control" required></div>
                                             <div class="input-group"> <label for="Series" class="labelinputs">Series</label> <input type="number" placeholder="0" name="Series" class="form-control" required></div>

                                       </div>
                                   </div>

                               <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm">Guardar entrenamiento </button>
                           </form>
                </div>
                <div class="container contenedorcards ">

                </div>
            </div>

        </div>
      </div>

    </body>
</html>
