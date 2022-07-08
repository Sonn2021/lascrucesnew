<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Menú</title>
  <link rel="shortcut icon" href="img/iconSierra.png">

  <script>
    $(document).ready(function() {
      $('#prev-reservacion').hide();
      $('#dia').hide();
      $('#especiales').hide();
      $('#comida-option').addClass(["border-orange"]);
      $("#reservacion-option").click(function() {
        $('#dia').hide();
        $('#comida').hide();
        $('#prev-reservacion').show();
        $('#especiales').hide();
        $('#comida-option').removeClass(["border-orange"]);
        $("#reservacion-option").addClass(["border-orange"]);
        $("#dia-option").removeClass(["border-orange"]);
        $("#especiales-option").removeClass(["border-orange"]);
      });
      $("#comida-option").click(function() {
        $('#comida').show();
        $('#prev-reservacion').hide();
        $('#dia').hide();
        $('#especiales').hide();
        $('#comida-option').addClass(["border-orange"]);
        $("#reservacion-option").removeClass(["border-orange"]);
        $("#dia-option").removeClass(["border-orange"]);
        $("#especiales-option").removeClass(["border-orange"]);
      });
      $("#dia-option").click(function() {
        $('#dia').show();
        $('#comida').hide();
        $('#prev-reservacion').hide();
        $('#especiales').hide();
        $('#comida-option').removeClass(["border-orange"]);
        $("#reservacion-option").removeClass(["border-orange"]);
        $("#dia-option").addClass(["border-orange"]);
        $("#especiales-option").removeClass(["border-orange"]);
      });
      $("#especiales-option").click(function() {
        $('#dia').hide();
        $('#comida').hide();
        $('#prev-reservacion').hide();
        $('#especiales').show();
        $('#comida-option').removeClass(["border-orange"]);
        $("#reservacion-option").removeClass(["border-orange"]);
        $("#dia-option").removeClass(["border-orange"]);
        $("#especiales-option").addClass(["border-orange"]);
      });
    });
  </script>
</head>

@extends('layouts.app')

@section('content')
<section id="hero">
  <div class="banner">
    <h1 class="titulo_banner fw-bold">MENÚ</h1>
  </div>
</section>
<div class="container h-100 pt-5">
  <div class="d-flex justify-content-around mt-2 text-orange opciones-menu">
    <div>
      <button type="button" id="comida-option" class="bg-transparent fw-bolder border-0 text-orange">TODOS</button>
    </div>
    <div>
      <button type="button" id="dia-option" class="bg-transparent fw-bolder border-0 text-orange">MENÚ DEL DÍA</button>
    </div>
    <div>
      <button type="button" id="reservacion-option" class="bg-transparent fw-bolder border-0 text-orange">CON RESERVACIÓN</button>
    </div>
  </div>
  <div class="comida container mt-5" id="comida">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($productos as $p)
      <div class="col">
        <div class="card h-100 shadow rounded">
          <img src="{{ asset($p->imagen)}}" class="card-img-top " alt="...">
          <div class="card-body text-center">
            <div class="d-flex justify-content-around align-items-baseline">
              <h5 class="card-title text-orange fw-bold mb-4">{{$p->nombre}}</h5>
            </div>
            <p class="card-text">{{$p->descripcion}}</p>
            <p class="fw-bold">${{$p->costo}}.00</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="container mt-5" id="prev-reservacion">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($productos as $p)
        @if($p->reservacion == 1)
          <div class="col">
            <div class="card h-100 shadow rounded">
              <img src="{{ asset($p->imagen)}}" class="card-img-top " alt="...">
              <div class="card-body text-center">
                <div class="d-flex justify-content-around align-items-baseline">
                  <h5 class="card-title text-orange fw-bold mb-4">{{$p->nombre}}</h5>
                </div>
                <p class="card-text">{{$p->descripcion}}</p>
                <p class="fw-bold">${{$p->costo}}.00</p>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>

  <div class="container mt-5" id="dia">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($productos as $p)
        @if($p->reservacion == 0)
          <div class="col">
            <div class="card h-100 shadow rounded">
              <img src="{{ asset($p->imagen)}}" class="card-img-top " alt="...">
              <div class="card-body text-center">
                <div class="d-flex justify-content-around align-items-baseline">
                  <h5 class="card-title text-orange fw-bold mb-4">{{$p->nombre}}</h5>
                </div>
                <p class="card-text">{{$p->descripcion}}</p>
                <p class="fw-bold">${{$p->costo}}.00</p>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</div>

<div class="precios container mt-3 mb-5">
  <p class="text-orange">* Precios actualizados al 20 de Enero de 2022.</p>
</div>

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