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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <div style="margin-top: 6em;">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
              <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-active" style="margin-bottom: 10%;">
                        <thead>
                            <tr class="bg-light-gray textogymmd">
                                <th class="text-uppercase">Hora</th>
                                <th class="text-uppercase">Lunes</th>
                                <th class="text-uppercase">Martes</th>
                                <th class="text-uppercase">Miércoles</th>
                                <th class="text-uppercase">Jueves</th>
                                <th class="text-uppercase">Viernes</th>
                                <th class="text-uppercase">Sábado</th>
                            </tr>
                        </thead>
                        <tbody>





                            <tr>
                                <td class="align-middle textogymmd">09:00</td>

                              @foreach($clases as $clase)

                                @switch($clase)
                                @case($clase->turno==1 && $clase->dia=="Lunes")
                                <td>
                                  <form class="" action="modificarHorario" method="get">
                                    <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                    <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                    <input type="text" name="id" value="{{$clase->id}}" hidden>
                                    <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                    </form>

                                    <form class="" action="asignarMonitor" method="get">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      @if($clase->user_id==null)
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                      @else
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                      @endif
                                      <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                    </form>
                                </td>
                               @break

                                @case($clase->turno==1 && $clase->dia=="Martes")
                                <td>
                                  <form class="" action="modificarHorario" method="get">
                                    <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                    <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                    <input type="text" name="id" value="{{$clase->id}}" hidden>
                                    <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                    </form>

                                    <form class="" action="asignarMonitor" method="get">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      @if($clase->user_id==null)
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                      @else
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                      @endif
                                      <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                    </form>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Miercoles")
                                <td>
                                  <form class="" action="modificarHorario" method="get">
                                    <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                    <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                    <input type="text" name="id" value="{{$clase->id}}" hidden>
                                    <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                    </form>

                                    <form class="" action="asignarMonitor" method="get">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      @if($clase->user_id==null)
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                      @else
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                      @endif
                                      <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                    </form>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Jueves")
                                <td>
                                  <form class="" action="modificarHorario" method="get">
                                    <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                    <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                    <input type="text" name="id" value="{{$clase->id}}" hidden>
                                    <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                    </form>

                                    <form class="" action="asignarMonitor" method="get">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      @if($clase->user_id==null)
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                      @else
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                      @endif
                                      <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                    </form>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Viernes")
                                <td>
                                  <form class="" action="modificarHorario" method="get">
                                    <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                    <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                    <input type="text" name="id" value="{{$clase->id}}" hidden>
                                    <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                    </form>

                                    <form class="" action="asignarMonitor" method="get">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      @if($clase->user_id==null)
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                      @else
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                      @endif
                                      <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                    </form>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Sabado")
                                <td>
                                  <form class="" action="modificarHorario" method="get">
                                    <span class="bg-secondary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                    <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                    <input type="text" name="id" value="{{$clase->id}}" hidden>
                                    <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                    </form>

                                    <form class="" action="asignarMonitor" method="get">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      @if($clase->user_id==null)
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                      @else
                                      <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                      @endif
                                      <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                    </form>
                                </td>
                                @break
                                @endswitch
                              @endforeach
                            </tr>





                            <tr>
                                <td class="align-middle textogymmd">10:00</td>
                                @foreach($clases as $clase)

                                  @switch($clase)
                                  @case($clase->turno==2 && $clase->dia=="Lunes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                 @break

                                  @case($clase->turno==2 && $clase->dia=="Martes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Miercoles")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Jueves")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Viernes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Sabado")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-secondary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @endswitch
                                @endforeach
                            </tr>



                            <tr>
                                <td class="align-middle textogymmd">17:00</td>
                                @foreach($clases as $clase)

                                  @switch($clase)
                                  @case($clase->turno==3 && $clase->dia=="Lunes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                 @break

                                  @case($clase->turno==3 && $clase->dia=="Martes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Miercoles")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Jueves")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Viernes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Sabado")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-secondary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @endswitch
                                @endforeach
                            </tr>

                            <tr>
                                <td class="align-middle textogymmd">20:00</td>
                                @foreach($clases as $clase)

                                  @switch($clase)
                                  @case($clase->turno==4 && $clase->dia=="Lunes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                 @break

                                  @case($clase->turno==4 && $clase->dia=="Martes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-info padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Miercoles")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Jueves")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Viernes")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Sabado")
                                  <td>
                                    <form class="" action="modificarHorario" method="get">
                                      <span class="bg-secondary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14"><i class="far fa-clock"></i> {{$clase->duracion}} min</div>
                                      <div class="margin-10px-bottom font-size14"><i class="fas fa-users"></i></i> {{$clase->aforo}} personas</div>
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" id="editar" name="button" class="btn-sm btn-outline-dark" alt="Editar clase"><i class="fas fa-edit"></i></button>
                                      </form>

                                      <form class="" action="asignarMonitor" method="get">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        @if($clase->user_id==null)
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> Sin asignar</div>
                                        @else
                                        <div class="margin-10px-bottom margin-10px-top font-size14"><i class="fas fa-chalkboard-teacher"></i> {{$clase->User["nombre"]}}</div>
                                        @endif
                                        <button type="submit" id="asignar" name="button" class="btn-sm btn-outline-dark" value="Asignar monitor"><i class="fas fa-user-tag"></i></button>
                                      </form>
                                  </td>
                                  @break
                                  @endswitch
                                @endforeach

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">



            </div>

        </div>

      </div>




    </body>
</html>
