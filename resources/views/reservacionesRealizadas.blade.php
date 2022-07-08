<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Reservaciones realizadas</title>
</head>

@extends('layouts.app')
    
@section('content')
    <div class="container mb-5" id="general">
        <div class="paso mt-4 justify-content-start mb-3">
            <h4 class="fw-bolder">Reservaciones</h4>
        </div>
        <div class="row row-cols-1 row-cols-md-1 g-4">
            @foreach($reservaciones as $s)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-overlay d-flex justify-content-end align-items-start">
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><a href="/eliminar-reservacion/{{$s->id}}" class="text-light"><i class="fas fa-trash"></i></a></button>
                            </div>
                            <p class="card-title"><strong>Nombre: </strong>{{$s->nombre}}</p>
                            <p><strong>Telefono:</strong> {{$s->correo}}</p>
                            <p class="card-text"><strong>No. personas:</strong> {{$s->personas}}</p>
                            <p><strong>Dia:</strong> {{$s->dia}}</p>
                            <p><strong>Hora:</strong> {{$s->hora}}</p>
                            <p><strong>Total:</strong> {{$s->total}}</p>
                            <p><strong>Adelanto:</strong> {{$s->pago}}</p>
                            <p><strong>Productos</strong></p>
                            @foreach($productos as $p)
                                @if($p->id_reservation == $s->id)
                                    <div class="row wh-100">
                                        <div class="col-10">
                                            <p>{{$p->food->nombre}}</p>
                                        </div>
                                        <div class="col-2">
                                            <p>{{$p->cantidad}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <p><strong>Servicios</strong></p>
                            @foreach($servicios as $se)
                                @if($se->id_reservation == $s->id)
                                    <div class="row wh-100">
                                        <div class="col-10">
                                            <p>{{$se->services->nombre}} @if($se->horario != "N/A")<strong>{{$se->horario}}</strong>@endif</p>
                                        </div>
                                        <div class="col-2">
                                            <p>{{$se->cantidad}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection