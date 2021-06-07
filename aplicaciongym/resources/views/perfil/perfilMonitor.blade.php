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
          <link rel="stylesheet" href="{{ URL::asset('css/app2.css') }}">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
      <div style="margin-top: 6em;">
              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-3"></div>
                  <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-6">

                    <p class="text-center textogymxl">Usuarios</p>
                      <div class="overflow-auto contenedorentrenos">
                        <table class="table table-bordered table-striped text-center">
                       <thead>
                           <tr class="textogymmd">
                               <th>Nombre</th>
                               <th>Apellidos</th>
                               <th>DNI</th>
                               <th>Email</th>
                               <th>Pagado</th>
                               <th>Acciones</th>
                           </tr>
                       </thead>
                       <tbody>


                         @foreach($users as $user)
                         @if($user -> rol != 'admin' && $user -> rol != 'monitor')
                           <tr class="textogymmd">
                               <td>
                                 <div class="font-size14 ">{{$user->nombre}}</div>
                               </td>
                               <td>
                                 <div class="font-size14 ">{{$user->apellidos}}</div>
                               </td>
                               <td>
                                 <div class="font-size14 ">{{$user->DNI}}</div>
                               </td>
                               <td>
                                 <div class="font-size14 ">{{$user->email}}</div>
                               </td>
                               <td>
                                  @if($user -> rol == 'monitor')
                                 <div class="font-size14 ">---</div>
                                 @else
                                 <div class="font-size14 ">{{$user->pagado}}</div>
                                 @endif
                               </td>

                               <td>
                                 <form class="" action="modificarMonitor" method="get"  style="display:inline-block">
                                   <input type="text" name="id" value="{{$user->id}}" hidden>
                                     <button type="submit" id="editar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-edit"></i></button>

                                 </form>
                                 <form class="" action="eliminarMonitor" method="get"  style="display:inline-block">
                                   <input type="text" name="id" value="{{$user->id}}" hidden>
                                     <button type="submit" id="borrar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-trash-alt"></i></button>
                                 </form>
                                   @if($user -> rol == 'usuario')
                                 <form class="" action="pagarUser" method="get"  style="display:inline-block">
                                   <input type="text" name="id" value="{{$user->id}}" hidden>
                                     <button type="submit" id="pagar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="fas fa-hand-holding-usd"></i></button>
                                 </form>
                                 @endif
                               </td>
                           </tr>
                           @endif
                       @endforeach


                  </tbody>
                </table>
                <form class="" action="crearMonitor" method="get">
                    <button type="submit" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="crear"><i class="fas fa-user-plus"></i></button>
                </form>
                    </div>


                    <p class="text-center textogymxl">Mis Clases</p>
                      <div class="overflow-auto contenedorentrenos">
                        <table class="table table-bordered table-striped text-center">
                       <thead>
                           <tr class="textogymmd">
                             <th class="text-uppercase">Nombre</th>
                             <th class="text-uppercase">Dia</th>
                             <th class="text-uppercase">Hora</th>
                             <th class="text-uppercase">Detalle</th>
                           </tr>
                       </thead>
                       <tbody>


                         @foreach($clases as $clase)
                           <tr class="align-middle textogym">
                             <td>
                               {{$clase->nombre}}
                             </td>
                             <td>
                               {{$clase->dia}}
                             </td>
                             <td>
                               @if($clase->turno=='1')
                               <p>09:00</p>
                               @elseif($clase->turno=='2')
                               <p>10:00</p>
                               @elseif($clase->turno=='3')
                               <p>17:00</p>
                               @else
                               <p>20:00</p>
                               @endif

                             </td>
                             <td>
                               <form class="" action="detalleClase/{{$clase->id}}" method="get"  style="display:inline-block">
                              
                                  <button type="submit" id="detalle" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-eye"></i></button>
                               </form>
                             </td>
                           </tr>
                           @endforeach







                  </tbody>
                </table>

                    </div>








                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-3"></div>
  </div>
    </body>
</html>
