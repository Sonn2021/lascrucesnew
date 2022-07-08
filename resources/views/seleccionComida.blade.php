<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <input type="hidden" name="tipo" value="1">
            <div class="row row-cols-1 row-cols-md-2 mt-3">
            @foreach($productos as $p)
                <div class="col">
                    <div class="card mb-3 ">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{asset($p->imagen)}}" class="w-100 h-100" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <p class="id" hidden>{{$p->id}}</p>
                                    <h5 class="nombre card-title">{{$p->nombre}}</h5>
                                    <!--<p class="descripcion card-text">{{$p->descripcion}}</p>-->
                                    <p class="card-text"><small>$</small><small class="costo text-muted">{{$p->costo}}</small></p>
                                    <input class="form-check-input" type="checkbox" value="{{$p->id}}" name="checked[]" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Agregar
                                    </label>
                                    <!--<button type="button" class="agregar {{$p->id}} btn btn-primary btn-sm">AGREGAR</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center mb-5">
                <button type="submit" class="btn btn-primary bg-brown" name="send" value="Submit">CONTINUAR</button>      
            </div>
        </form>
    </div>
@endsection