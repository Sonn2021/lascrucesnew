<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Recomendaciones y Compromisos</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
</head>
@extends('layouts.app')

@section('content')
  <section id="hero">
        <div class="recompromisos">
            <h1 class="text-center fw-bolder">RECOMENDACIONES Y COMPROMISOS</h1>
        </div>
        <div class="row justify-content-evenly w-100">
            <div class="col-md-5 mt-5 d-flex flex-column justify-content-center align-items-center">
                <div class="title mb-3 mt-3">
                    <h1 class="text-orange fw-bold">Recomendaciones</h1>
                </div>
                <p>
                <ul>
                    <li> Llevar vestimenta y calzado propio para Sierra y senderismo.</li>
                     <li>En época de lluvias se recomienda, solo vehículos 4x4, cuatrimotos, motocicleta, bicicleta de montaña, rzr y camionetas grandes.</li>
                    <li>Casa para acampar si desean vivir la experiencia de una o varias noches en la Sierra.</li>
                     <li>En caso de llevar mascotas,con collar, recoger y depositar heces en espacios destinados.</li>
                </ul>
                </p>
            </div> 
            <div class="col-md-5 mt-2 px-5">
                <img src="img/vista.jpeg" class="img-fluid mt-5" alt="test">
            </div> 
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-5 order-md-2  mb-1 d-flex flex-column justify-content-center align-items-center">
                <div class="title mb-1 mt-3">
                    <h1 class="text-orange fw-bold">Compromisos</h1>
                </div>
                <p>
                   <ul>
                        <li>Uso de baños secos (en los mismos se encuentran folletos sobre este concepto). Para conocer más sobre los baños secos dar click en el botón de abajo.</li>
                       <li>No dejar ningún tipo de producto contaminante (plásticos, basura, etc).</li> 
                       <li>No entrar con ningún tipo de alimentos y líquidos.</li> 
                    </ul>
                </p>
                <!--<div class="d-grid gap-2 mb-5">
                     <button class="btn btn-primary" type="button">Más Sobre los Baños Secos</button>
                </div>-->
            </div>
            <div class="col-md-5 order-md-1 px-5"> 
                <img src="img/senderismo.jpeg" class="img-fluid mb-5" alt="test">
            </div> 
        </div>
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