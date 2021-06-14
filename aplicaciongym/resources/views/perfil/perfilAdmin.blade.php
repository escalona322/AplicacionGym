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
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1"></div>
                  <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-10">
                    @if (session('createUser'))
                        <div class="alert alert-success text-center">
                            {{ session('createUser') }}
                        </div>
                    @endif
                    @if (session('updateUser'))
                        <div class="alert alert-success text-center">
                            {{ session('updateUser') }}
                        </div>
                    @endif
                    @if (session('deleteUser'))
                        <div class="alert alert-danger text-center">
                            {{ session('deleteUser') }}
                        </div>
                    @endif
                    @if (session('pagado'))
                        <div class="alert alert-success">
                            {{ session('pagado') }}
                        </div>
                    @endif
                    @if (session('Nopagado'))
                        <div class="alert alert-danger">
                            {{ session('Nopagado') }}
                        </div>
                    @endif
                    @if (session('Yapagado'))
                        <div class="alert alert-danger">
                            {{ session('Yapagado') }}
                        </div>
                    @endif
                    <div class="row">
                      <div class="col">   </div>
                      <div class="col">

                        <p class="textogymxl">Perfil Admin</p>
                      </div>
                      <div class="col">  </div>
                  </div>


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
                         @if($user -> rol != 'admin')
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
                                 <form class="" action="modificarMonitor" method="post"  style="display:inline-block">
                                   @csrf
                                   <input type="text" name="id" value="{{$user->id}}" hidden>
                                     <button type="submit" id="editar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-edit"></i></button>

                                 </form>
                                 <form class="" action="eliminarMonitor" method="get"  style="display:inline-block">
                                   <input type="text" name="id" value="{{$user->id}}" hidden>
                                     <button type="submit" id="borrar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-trash-alt"></i></button>
                                 </form>
                                   @if($user -> rol == 'usuario')
                                 <form class="" action="pagarUser" method="post"  style="display:inline-block">
                                   @csrf
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
                    </div>
                    <form class="" action="crearMonitor" method="get">
                        <button type="submit" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="crear"><i class="fas fa-user-plus"></i></button>
                    </form>
                    <div class="row">
                      <div class="col">  </div>
                      <div class="col">  </div>
                      <div class="col">  </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-1"></div>
  </div>
    </body>
</html>
