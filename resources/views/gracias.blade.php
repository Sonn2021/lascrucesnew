<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Acerca de</title>
    <link rel="shortcut icon" href="img/iconSierra.png">
</head>
@extends('layouts.app')

@section('content')
    <section id="introduccion">
        <div class="container mt-5 mb-5">
            <div class="card p-5 d-flex justify-content-center aling-items-center text-center">
                <h1 class="fw-bolder mx-auto mb-5 text-orange">¡Reservación exitosa!</h1>
                <p class="mx-auto">Tu reservación se ha realizado con éxito. Recibirás un correo de confirmación en las próximas horas. </p>
                <p class="mx-auto mb-3"><i> <b class="text-orange"> NOTA: </b> Se requiere realizar el pago para que la reservación sea tomada en cuenta. Puedes descargar la ficha de pago dando clic en el botón "Pagar en oxxo"</i></p>
                <img src="img/logo.png" alt="" class="w-25 mx-auto"> 
            </div>
            <div class="boton w-100 mt-5">
                <button type="submit" class="btn btn-primary bg-primary mx-auto" name="send" value="Submit"><a href="{{action('ReservationController@oxxoPDF')}}" class="text-light text-decoration-none" id="oxxo">PAGAR EN OXXO</a></button>
                <button type="submit" class="btn btn-primary bg-brown mx-auto" name="send" value="Submit" id="inicio" disabled><a href="{{action('GeneralController@index')}}" class="text-light text-decoration-none">IR A INICIO</a></button>
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
            <h3 class="mb-3">Redes sociales</h3>
            <ul class="list-group d-flex align-items-center">
              <li class="list-group mb-2"><a href="https://www.facebook.com/Ecoturismo-Las-Cruces-113553307075098/?modal=admin_todo_tour" class="text-white text-decoration-none"> <i class="fab fa-facebook-square"></i> Ecoturismo Las Cruces</a> </li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-instagram-square"></i> ecoturismolascruces</a></li>
              <li class="list-group mb-2"><a href="https://www.instagram.com/ecoturismolascruces/?hl=en" class="text-white text-decoration-none"> <i class="fab fa-twitter-square"></i> Las Cruces</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function(){
          $("#oxxo").click(function(){
            $("#inicio").prop( "disabled", false );
          });
      });
    </script>
@endsection