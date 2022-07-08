<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Contacto</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
</head>

@extends('layouts.app')

@section('content')
    <section>
        <div id="banner-contacto">
            <h1 class="titulo_banner fw-bolder">CONTACTO</h1>
        </div>
    </section>
    <section id="formulario" class="w-100 v-100">
        <div class="textos w-75 m-auto pt-5 text-center mb-5">
            <h2 class="mb-5 text-orange fw-bold">¡Contáctanos!</h2>
            <p>Para una mejor atención ponte en contacto con nosotros a través de nuestras diferentes redes sociales.</p>
        </div>
        <div class="contact mw-100 min-h-100 bg-white">
                <div class="w-100">
                        @if ($message = Session::get('success'))
                            <div id="successMessage" class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    </div>
                <div class="row">
                <div class="col d-flex justify-content-center align-items-center pb-5">
                    <iframe class="px-4 pt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7391.199133271874!2d-100.65720363026963!3d22.141238223321153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842aad5577d20d15%3A0x743be76d83a67d75!2sLas%20Cruces!5e0!3m2!1ses-419!2smx!4v1629763251036!5m2!1ses-419!2smx" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col d-flex justify-content-center align-items-center border-start pb-5">
                    <form action="{{route('contacto.submit')}}" class="w-75 d-flex flex-column pt-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Juan Perez">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="correo" placeholder="ejemplo@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="telefono" placeholder="4441112233">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mensaje</label> 
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje"></textarea>
                        </div>
                        <input type="submit" name="send" class="btn-submit bg-brown" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
        <div class="social w-100 m-auto min-h-25 d-flex flex-lg-row justify-content-around pt-3 mt-5 mb-5 bg-light p-5">
            <div class="red d-flex flex-row mb-2">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-whatsapp m-auto"></i>
                </div>
                <p class="ms-2">4443196619</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="far fa-envelope m-auto"></i>
                </div>
                <p class="ms-2">ecoturismodenaturaleza@gmail.com</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-facebook-f m-auto"></i>
                </div>
                <p class="ms-2">Ecoturismo Las Cruces</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-twitter m-auto"></i>
                </div>
                <p class="ms-2">Ecoturismo Las Cruces</p>
            </div>
            <div class="red d-flex align-items-baseline">
                <div class="icon bg-brown rounded-circle d-flex justify-content-center">
                    <i class="fab fa-instagram m-auto"></i>
                </div>
                <p class="ms-2">ecoturismolascruces</p>
            </div>
        </div>
        <!--<div class="container video w-100 pb-5">
            <h4 class="pt-5 mb-4 text-orange">¿Cómo llegar?</h4>
            <video class="w-100 h-100 tex" controls>
                <source src="Clase.mp4" type="video/mp4">
            </video>
        </div>-->
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

    <script src="https://kit.fontawesome.com/b6a0ace850.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function() {$('#successMessage').fadeOut('fast');}, 3000);
        });
    </script>  
@endsection