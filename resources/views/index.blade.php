<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Las Cruces</title>
    <link rel="shortcut icon" href="img/iconSierra.png">

</head>

@extends('layouts.app')

@section('content')
    <section id="index">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <!--<h1 class="inicio fw-bolder">LAS CRUCES</h1>
            <p class="p-inicio fw-light">Ecoturismo de naturaleza</p>
            <a href="datos-reservarcion" class="text-light fw-bold"><button type="button" class="btn btn-outline-light w-100 fw-bold">RESERVAR</button></a>-->
        </div>
    </section>
    <section id="intro">
        <div class="container pt-5 d-flex flex-column align-items-center justify-content-center">
            <h1 class="mb-3 text-center text-orange ">¡Una experiencia diferente!</h1>
            <p class="mb-5 text-center">Aventura, Recreación, Gastronomía, Descanso y Entretenimiento Sustentable.</p>
            <!--<video class="w-100 h-100 pb-5" controls>
                <source src="Clase.mp4" type="video/mp4">
            </video>-->
            <img src="img/cuatrimoto.jpeg" class="pb-5 w-75 h-75 rounded" alt="...">
        </div>
    </section>
    <section id="mini-banner">
        <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="fw-bold">¿Quiénes somos?</h1>
            <p>Del huerto y la granja a tu mesa</p>
            <a href="acerca_de" class="text-light"><button type="button" class="btn btn-primary w-100 bg-brown btn-sm fw-bold">VER MÁS</button></a>
        </div>
    </section>
    <section>
        <div class="container pt-5 d-flex flex-column align-items-center pb-5">
            <h1 class="text-center">¡Conoce nuestros servicios!</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
                <div class="col">
                    <div class="card h-100">
                      <img src="img/atoleArroz.jpg" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Menú</h5>
                        <p class="card-text">Variedad de platillos artesanales.</p>
                        <a class="btn btn-primary bg-brown btn-sm fw-bold" href="comida" role="button">MÁS INFORMACIÓN</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="img/zona_acampar.jpeg" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Servicios</h5>
                        <p class="card-text">Para que disfrute su estancia.</p>
                        <a class="btn btn-primary bg-brown btn-sm fw-bold" href="servicios" role="button">MÁS INFORMACIÓN</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <img src="img/vista.jpeg" class="card-img-top" alt="...">
                      <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Recomendaciones y Compromisos</h5>
                        <p class="card-text">El cuidado de este paraíso natural es una prioridad.</p>
                        <a class="btn btn-primary bg-brown btn-sm fw-bold" href="recomendaciones_y_compromisos" role="button">MÁS INFORMACIÓN</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section id="footer">
      <div class="w-100 bg-cdark pt-5 pb-5">
        <div class="row row-cols-md-3 d-flex justify-content-center">
          <div class="col-sm-3 m-auto d-flex flex-column align-items-center">
            <img src="img/LAS CRUCES.png" alt="" class="w-25 h-50">
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
