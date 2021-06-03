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
                    <table class="table table-bordered table-striped text-center table-dark" style="margin-bottom: 1em;">
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
                                <td class="align-middle">09:00</td>

                              @foreach($clases as $clase)

                                @switch($clase)
                                @case($clase->id==1)
                                <td>
                                    <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                    <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase1 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                               @break

                                @case($clase->id==2)
                                <td>
                                  <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase3 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==3)
                                <td>
                                  <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase3 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==4)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase4 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==5)
                                <td>
                                  <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase5 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==6)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase6 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @endswitch
                              @endforeach
                            </tr>





                            <tr>
                                <td class="align-middle">10:00</td>

                              @foreach($clases as $clase)

                                @switch($clase)
                                @case($clase->id==7)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase7 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                               @break

                                @case($clase->id==8)
                                <td>
                                  <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase8 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==9)
                                <td>
                                  <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase9 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==10)
                                <td>
                                  <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase10 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==11)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase11 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==12)
                                <td>
                                  <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase12 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @endswitch
                              @endforeach
                            </tr>



                            <tr>
                                <td class="align-middle">17:00</td>

                              @foreach($clases as $clase)

                                @switch($clase)
                                @case($clase->id==13)
                                <td>
                                  <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase13 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                               @break

                                @case($clase->id==14)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase14 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==15)
                                <td>
                                  <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase15 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==16)
                                <td>
                                  <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase16 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==17)
                                <td>
                                  <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase17 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==18)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase18 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @endswitch
                              @endforeach
                            </tr>

                            <tr>
                                <td class="align-middle">20:00</td>

                              @foreach($clases as $clase)

                                @switch($clase)
                                @case($clase->id==19)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase19 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                               @break

                                @case($clase->id==20)
                                <td>
                                  <span class="bg-danger padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase20 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==21)
                                <td>
                                  <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase21 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==22)
                                <td>
                                  <span class="bg-primary padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase22 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==23)
                                <td>
                                  <span class="bg-success padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase23 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @case($clase->id==24)
                                <td>
                                  <span class="bg-warning padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13 xs-font-size12">{{$clase->nombre}}</span>
                                  <div class="margin-10px-top font-size13"><i class="far fa-clock" style="margin-right: 0.5em;"></i>{{$clase->duracion}} min</div>
                                    @if($clase->user_id==null)
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>Sin asignar</div>
                                    @else
                                    <div class="margin-5px-top font-size13" style="display:inline-block"><i class="fas fa-chalkboard-teacher" style="margin-right: 0.5em;"></i>{{$clase->User["nombre"]}}</div>
                                    @endif
                                    <div class="margin-5px-top font-size13">
                                              @forelse($clase24 as $ocu)
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>{{$loop->count}}/{{$clase->aforo}}
                                                  @break
                                              @empty
                                                <i class="fas fa-users" style="margin-right: 1em;"></i>0/{{$clase->aforo}}
                                              @endforelse
                                    </div>
                                </td>
                                @break
                                @endswitch
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
