<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="css/estilos.css">		
    <title>Detalle de cabana</title>
</head>

@extends('layouts.app')

@section('content')
    <div class="container mt-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-5">Detalle de cabana</h1>
        <div class="w-100">
            @foreach($cabana as $c)
                <div class="card mb-3">
                    <h5 class="card-header bg-light">{{$c->nombre}}</h5>
                    <div class="card-body">
                        <h5 class="card-title">${{$c->costo}}.00</h5>
                        <p class="card-text">{{$c->descripcion}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection