<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Selección de comida</title>
</head>

@extends('layouts.app')
    
@section('content')
    <div class="container">
        <div class="paso mt-4 justify-content-start">
            <span class="badge bg-brown rounded-circle me-2">2</span>
            <p><b>Selección de comida </b></p>
        </div>
        <form action="{{route('listacomida.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="tipo" value="2">
            <div class="row row-cols-1 row-cols-md-2 mt-3">
                @foreach($servicios as $s)
                <div class="col">
                    <div class="card mb-3 ">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset($s->imagen)}}" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body overflow-auto">
                                    <p class="id" hidden>{{$s->id}}</p>
                                    <h5 class="nombre card-title">{{$s->nombre}}</h5>
                                    <p class="card-text"><small>$</small><small class="costo text-muted">{{$s->costo}}</small></p>  
                                    @if($s->id > 3)
                                    <div class="px-3">
                                        <input class="form-check-input" type="checkbox" value="{{$s->id}}" name="checked[]" id="flexCheckDefault">
                                        <label class="form-check-label " for="flexCheckDefault">
                                            Agregar
                                        </label>
                                    </div>
                                    @else
                                    <div class="row overflow-auto px-3 " style="height: 80px">
                                        @foreach($horas as $h)
                                            @if($h->service_id == $s->id)
                                            <div class="col-sm-12 mb-2">
                                                @if (count($horas) > 0)
                                                    @if($h->seleccionado == 0)
                                                    <p class="h-id" hidden>{{$h->id}}</p>
                                                    <input class="form-check-input" type="checkbox" value="{{$h->id}}" name="checkedh[]" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{$h->hora}}
                                                    </label>
                                                    @else

                                                    @endif
                                                @elseif(count($horas) === 0)
                                                    No hay disponible
                                                @endif
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="w-100 d-flex justify-content-around align-items-center mb-5">
                <button class="btn btn-primary bg-primary"><a href="{{action('ReservationController@eliminaComida')}}" class="text-light text-decoration-none">ATRÁS</a></button>
                <button type="submit" class="btn btn-primary bg-brown" name="send" value="Submit">CONTINUAR</button>      
            </div>
        </form>
    </div>
@endsection