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
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
      </head>
      <body>


        <div style="margin: 6em;">

              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-1 col-xxl-1"></div>
                  <div class="col-sm-12 col-md-12 col-lg-8 col-xl-10 col-xxl-10">
                    <div class="row mb-5">
                      @if (session('modificado'))
                          <div class="alert alert-success text-center">
                              {{ session('modificado') }}
                          </div>
                      @endif
                      @if (session('sinFoto'))
                          <div class="alert alert-danger text-center">
                              {{ session('sinFoto') }}
                          </div>
                      @endif

                    </div>

                    <div class="row">

                      <div class="col-4">
                        @php
                        $imagen = $user->imagen;
                        @endphp
                        <img class="fotoperfil" src="{{ asset("img/post/$imagen")}} " alt="Foto de Perfil">
                        <form action="codeaguardar" enctype="multipart/form-data" method="POST">
                           @csrf
                           <input type="file" name="imagen">
                           <button type="submit" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Guardar"><i class="fas fa-file-import"></i></button>
                        </form>
                      </div>
                      <div class="col-1">

                      </div>
                      <div class="col-7">
                        <table class="table text-justify">
                          <tr>
                            <th class="textoperfil">Nombre: </th>
                            <td class="textogymmd">{{$user->nombre}}</td>
                          </tr>
                          <tr>
                            <th class="textoperfil">Apellidos: </th>
                            <td class="textogymmd">{{$user->apellidos}}</td>
                          </tr>
                          <tr>
                            <th class="textoperfil">Email: </th>
                            <td class="textogymmd">{{$user->email}}</td>
                          </tr>
                          <tr>
                            <th class="textoperfil">Pagado: </th>
                            <td class="textogymmd">{{$user->pagado}}</td>
                          </tr>

                        </table>

                      </div>




                    </div>
                    <div class="row">
                      <div class="col">



                        <p class="textogymxl text-center">Mis clases</p>
                        <div class="contenedorTablaClasePerfilUsers overflow-auto">
                          <table class="table table-bordered table-striped text-center table-active" style="margin-bottom: 10%;">
                              <thead>
                                  <tr class="bg-light-gray textogymmd">
                                      <th class="text-uppercase">Nombre</th>
                                      <th class="text-uppercase">Dia</th>
                                      <th class="text-uppercase">Hora</th>
                                      <th class="text-uppercase">Borrarse</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($fullclases as $apuntados)
                                  <tr class="align-middle textogym">
                                    <td>
                                      {{$apuntados->Clase["nombre"]}}
                                    </td>
                                    <td>
                                      {{$apuntados->Clase["dia"]}}
                                    </td>
                                    <td>
                                      @if($apuntados->Clase["turno"]=='1')
                                      <p>09:00</p>
                                      @elseif($apuntados->Clase["turno"]=='2')
                                      <p>10:00</p>
                                      @elseif($apuntados->Clase["turno"]=='3')
                                      <p>17:00</p>
                                      @else
                                      <p>20:00</p>
                                      @endif

                                    </td>
                                    <td>
                                      <form class="" action="Desapuntar" method="get" style="display:inline-block; transform: scale(0.7);">
                                        <input type="text" name="id" value="{{$apuntados->clase_id}}" hidden>
                                          <button type="submit" id="borrar" name="button" class="btn-lg btn-danger" style="bottom: 100%"><i class="far fa-trash-alt"></i></button>
                                      </form>
                                    </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                        </div>

                      </div>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-2 col-xl-1 col-xxl-1"></div>
                </div>
              </div>
    </body>
</html>
