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
                  <table class="table table-bordered table-striped text-center table-dark" style="margin-bottom: 3em;">
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
                      <tbody class="font-size13">





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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase1 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase2 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase3 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase4 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase5 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase6 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase7 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase8 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase9 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase10 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase11 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase12 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase13 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase14 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase15 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase16 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase17 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase18 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase19 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase20 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase21 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase22 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase23 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
                                  <div class="font-size13" >
                                    <form class="" action="MasClase" method="get" style="display:inline-block">
                                      <input type="text" name="id" value="{{$clase->id}}" hidden>
                                      <button type="submit" class="btn-sm btn-outline-danger" alt="MasClase"><i class="fas fa-user-plus"></i></i></button>
                                    </form>
                                            @forelse($clase24 as $ocu)
                                                {{$loop->count}}/{{$clase->aforo}}
                                                @break
                                            @empty
                                                0/{{$clase->aforo}}
                                            @endforelse
                                      <form class="" action="MenosClase" method="get" style="display:inline-block">
                                        <input type="text" name="id" value="{{$clase->id}}" hidden>
                                        <button type="submit" class="btn-sm btn-outline-danger" alt="MenosClase"><i class="fas fa-user-times"></i></i></button>
                                      </form>
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
