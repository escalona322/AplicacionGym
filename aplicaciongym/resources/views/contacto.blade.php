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
          <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="{{ URL::asset('/css/app2.css') }}">
    </head>
    <body>
      <div style="margin-top: 6em;">
        <div class="text-center">
            <h1 class=" textogymxl mb-5" >¡Ven a conocernos!</h1>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-0 col-lg-4 col-xl-2 col-xxl-2  "> </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-8 col-xxl-8 ">
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 textogym" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.11135406578!2d-3.6915725846104652!3d40.20658587939014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd421ee3b86e375d%3A0x8139803780dd1991!2sColegio%20Biling%C3%BCe%20Valle%20del%20Miro!5e0!3m2!1ses!2ses!4v1620577763777!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <p class="textogym">De Lunes a Viernes de 7:00h a 22:00h</p>
                    <p class="textogym">Sábados de 9:00h a 14:00h</p>
                    <p class="textogym">Domingos: CERRADO</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <p class="font-size22"><b>En Sportakus buscamos los mejores porfesionales para incorporarlos a nuestro equipo y que juntos trabajemos por mejorar día a día para nuestros socios.<br><br>
                    Si eres uno de esos grandes profesionales, por favor, envíanos tu currículum por cualquier red social o email.</b>

                  </p>
                  <h2 class="textogymmd mt-20" >¡Siguenos!</h2>
                </div>

                <div class="col text-center mt-10">

                  <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Facebook" onclick="location.href='https://www.facebook.com/ColegioValleDelMiro/'"><i class="fab fa-facebook-square" style="transform:scale(2)"></i></button>
                  <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="instagram" onclick="location.href='https://www.instagram.com/valledelmiro/'"><i class="fab fa-instagram" style="transform:scale(2)"></i></button>
                  <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Twitter" onclick="location.href='https://twitter.com/ValledelMiro'"><i class="fab fa-twitter" style="transform:scale(2)"></i></button>
                  <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Phone" onclick="ocultarPhone()"><i class="fas fa-phone-alt" style="transform:scale(2)"></i></button>
                  <button type="button" name="button" class="btn-lg btn-danger" style="bottom: 100%" value="Email" onclick="ocultarEmail()"><i class="fas fa-envelope-open-text" style="transform:scale(2)"></i></button>
<script type="text/javascript">
      function ocultarPhone(id) {
        if (document.getElementById('phone').style.display=='block') {
          document.getElementById('phone').style.display='none';
        }else{
          document.getElementById('phone').style.display='block';
        }

      }

      function ocultarEmail(id) {
        if (document.getElementById('email').style.display=='block') {
          document.getElementById('email').style.display='none';
        }else{
          document.getElementById('email').style.display='block';
        }

      }
</script>

                  <p id="phone" class="textogym my-4" style="display: none">658985785</p>
                  <p id="email" class="textogym my-4"style="display: none">Sportakus@gmail.com</p>
                </div>
              </div>


            </div>
            <div class="col-sm-12 col-md-0 col-lg-4 col-xl-2 col-xxl-2  "></div>
        </div>
      </div>

    </body>
</html>
