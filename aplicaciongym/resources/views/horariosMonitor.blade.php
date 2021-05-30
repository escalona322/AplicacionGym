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
              <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-dark">
                        <thead>
                            <tr class="bg-light-gray">
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
                                <td class="align-middle">09:00 (TURNO 1)</td>

                              @foreach($clases as $clase)

                                @switch($clase)
                                @case($clase->turno==1 && $clase->dia=="Lunes")
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                    <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                    <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                </td>
                               @break

                                @case($clase->turno==1 && $clase->dia=="Martes")
                                <td>
                                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                    <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                    <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Miercoles")
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                    <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                    <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Jueves")
                                <td>
                                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                    <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                    <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Viernes")
                                <td>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                    <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                    <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                </td>
                                @break
                                @case($clase->turno==1 && $clase->dia=="Sabado")
                                <td>
                                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                    <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                    <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                </td>
                                @break
                                @endswitch

                                @if($loop->last && $loop->iteration < 6)
                                  @for($i = 0; $i < (6-($loop->iteration)); $i++)
                                <td>
                                    <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Sin clase</span>
                                    <div class="margin-10px-top font-size14">--:--</div>
                                    <div class="font-size13 text-light-gray">Sin Monitor</div>
                                </td>
                                  @endfor
                                @endif
                              @endforeach
                            </tr>





                            <tr>
                                <td class="align-middle">10:00</td>
                                @foreach($clases as $clase)

                                  @switch($clase)
                                  @case($clase->turno==2 && $clase->dia=="Lunes")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                 @break

                                  @case($clase->turno==2 && $clase->dia=="Martes")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Miercoles")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Jueves")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Viernes")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==2 && $clase->dia=="Sabado")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @default


                                  @endswitch
                                  @if($loop->last && $loop->iteration < 6)
                                    @for($i = 0; $i < (6-($loop->iteration)); $i++)
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Sin clase</span>
                                      <div class="margin-10px-top font-size14">--:--</div>
                                      <div class="font-size13 text-light-gray">Sin Monitor</div>
                                  </td>
                                    @endfor
                                  @endif


                                @endforeach
                            </tr>



                            <tr>
                                <td class="align-middle">17:00</td>
                                @foreach($clases as $clase)

                                  @switch($clase)
                                  @case($clase->turno==3 && $clase->dia=="Lunes")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                 @break

                                  @case($clase->turno==3 && $clase->dia=="Martes")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Miercoles")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Jueves")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Viernes")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==3 && $clase->dia=="Sabado")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @default


                                  @endswitch
                                  @if($loop->last && $loop->iteration < 6)
                                    @for($i = 0; $i < (6-($loop->iteration)); $i++)
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Sin clase</span>
                                      <div class="margin-10px-top font-size14">--:--</div>
                                      <div class="font-size13 text-light-gray">Sin Monitor</div>
                                  </td>
                                    @endfor
                                  @endif


                                @endforeach
                            </tr>

                            <tr>
                                <td class="align-middle">20:00</td>
                                @foreach($clases as $clase)

                                  @switch($clase)
                                  @case($clase->turno==4 && $clase->dia=="Lunes")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                 @break

                                  @case($clase->turno==4 && $clase->dia=="Martes")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}} min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Miercoles")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Jueves")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Viernes")
                                  <td>
                                      <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @case($clase->turno==4 && $clase->dia=="Sabado")
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{$clase->nombre}}</span>
                                      <div class="margin-10px-top font-size14">{{$clase->duracion}}  min.</div>
                                      <div class="font-size13 text-light-gray">{{$clase->User["nombre"]}}</div>
                                      <div class="font-size13 text-light-gray">0/{{$clase->aforo}}</div>
                                  </td>
                                  @break
                                  @default


                                  @endswitch
                                  @if($loop->last && $loop->iteration < 6)
                                    @for($i = 0; $i < (6-($loop->iteration)); $i++)
                                  <td>
                                      <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Sin clase</span>
                                      <div class="margin-10px-top font-size14">--:--</div>
                                      <div class="font-size13 text-light-gray">Sin Monitor</div>
                                  </td>
                                    @endfor
                                  @endif


                                @endforeach

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
        </div>
      </div>




    </body>
</html>
