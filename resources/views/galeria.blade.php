<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Galeria</title>
    <link rel="shortcut icon" href="img/iconSierra.png">

    <script>
      $(document).ready(function() {
        $('#primavera').hide();
        $('#verano').hide();
        $('#otono').hide();
        $('#invierno-option').addClass(["border-orange"]);
        $("#primavera-option").click(function() {
          $('#invierno').hide();
          $('#verano').hide();
          $('#otono').hide();
          $('#primavera').show();
          $('#invierno-option').removeClass(["border-orange"]);
          $("#primavera-option").addClass(["border-orange"]);
          $("#verano-option").removeClass(["border-orange"]);
          $("#otono-option").removeClass(["border-orange"]);
        });
        $("#verano-option").click(function() {
          $('#verano').show();
          $('#otono').hide();
          $('#invierno').hide();
          $('#primavera').hide();
          $('#verano-option').addClass(["border-orange"]);
          $("#otono-option").removeClass(["border-orange"]);
          $("#invierno-option").removeClass(["border-orange"]);
          $("#primavera-option").removeClass(["border-orange"]);
        });
        $("#otono-option").click(function() {
          $('#otono').show();
          $('#invierno').hide();
          $('#primavera').hide();
          $('#verano').hide();
          $('#invierno-option').removeClass(["border-orange"]);
          $("#primavera-option").removeClass(["border-orange"]);
          $("#otono-option").addClass(["border-orange"]);
          $("#verano-option").removeClass(["border-orange"]);
        });
        $("#invierno-option").click(function() {
          $('#primavera').hide();
          $('#verano').hide();
          $('#otono').hide();
          $('#invierno').show();
          $('#primavera-option').removeClass(["border-orange"]);
          $("#verano-option").removeClass(["border-orange"]);
          $("#otono-option").removeClass(["border-orange"]);
          $("#invierno-option").addClass(["border-orange"]);
        });
      });
    </script>
</head>
@extends('layouts.app')

@section('content')
    <section id="galeria">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="titulo_banner fw-bold text-light">GALERÍA</h1>
        </div>
    </section>
    <section class="mt-4">
      <div class="container">
        <div class="d-flex justify-content-around text-orange opciones-menu mb-5">
          <div>
            <button type="button" id="invierno-option" class="bg-transparent fw-bolder border-0 text-orange">INVIERNO</button>
          </div>
          <div>
            <button type="button" id="primavera-option" class="bg-transparent fw-bolder border-0 text-orange">PRIMAVERA</button>
          </div>
          <div>
            <button type="button" id="verano-option" class="bg-transparent fw-bolder border-0 text-orange">VERANO</button>
          </div>
          <div>
            <button type="button" id="otono-option" class="bg-transparent fw-bolder border-0 text-orange">OTOÑO</button>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 " id="invierno">
          @foreach($imagenes as $i)
            @if($i->estacion == "invierno")
              <div class="col">
                <img src="{{asset($i->imagen)}}" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
              </div>
            @endif
          @endforeach
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="primavera">
          @foreach($imagenes as $i)
            @if($i->estacion == "primavera")
              <div class="col">
                <img src="{{asset($i->imagen)}}" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
              </div>
            @endif
          @endforeach
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="verano">
          @foreach($imagenes as $i)
            @if($i->estacion == "verano")
              <div class="col">
                <img src="{{asset($i->imagen)}}" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
              </div>
            @endif
          @endforeach
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="otono">
          @foreach($imagenes as $i)
            @if($i->estacion == "otono")
              <div class="col">
                <img src="{{asset($i->imagen)}}" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="w-100 bg-brown pt-5 pb-5">
        <div class="row row-cols-md-3 d-flex justify-content-center">
          <div class="col-sm-3 m-auto d-flex flex-column align-items-center">
            <img src="img/logo.png" alt="" class="w-25 h-50">
          </div>
          <div class="col-sm-3 d-flex flex-column align-items-center">
            <h3 class="mb-3">Contacto</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2">ecoturismodenaturaleza@gmail.com</li>
              <li class="list-group mb-2">4443196619</li>
              <li class="list-group mb-2"><a href="FAQ.php" class="text-white text-decoration-none">FAQ</a></li>
            </ul>
          </div>
          <div class="col-sm-3 d-flex flex-column align-items-center">
            <h3 class="mb-3">Redes Sociales</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2"><a href="https://www.facebook.com/Ecoturismo-Las-Cruces-113553307075098/?modal=admin_todo_tour" class="text-white text-decoration-none"> <i class="fab fa-facebook-square"></i> Ecoturismo Las Cruces</a> </li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-instagram-square"></i> ecoturismolascruces</a></li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-twitter-square"></i> Las Cruces</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
@endsection