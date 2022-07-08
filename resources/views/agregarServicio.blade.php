<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Agregar servicio</title>
</head>
@extends('layouts.app')

@section('content')
    <div class="container  d-flex flex-column align-items-center justify-content-center mt-5">
        <div class="w-100">
            @if ($message = Session::get('success'))
                <div id="successMessage" class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        <div class="card w-100 shadow">
            <div class="card-header bg-brown">
                <b>Agregar servicio</b> 
            </div>
            <div class="card-body p-4">
                <form action="{{route('servicio.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="form-label">Nombre del servicio</label>
                    <input type="text" class="form-control mb-2"  name="nombre" required>
                    <label for="costo" class="form-label">Costo</label>
                    <input type="number" class="form-control mb-2" name="costo" min="0" max="10000" required>
                    <label for="descripcion" class="form-label">Descripción del servicio <i>(opcional)</i></label>
                    <textarea class="form-control" class="form-control mb-5" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                    <label for="reservacion mt-4">Reservación</label>
                    <select class="form-select  mb-2" aria-label="Default select example" name="reservacion" required>
                        <option selected>Seleccionar opción</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Imagen</label>
                        <input class="form-control" type="file" id="formFile" name="imagen" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-100 bg-brown mb-2" name="send" value="Submit">SUBMIT</button>
                    <a href="/preview-servicios" class="text-light"><button type="button" class="btn btn-primary w-100">ATRÁS</button></a>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            setTimeout(function() {$('#successMessage').fadeOut('fast');}, 3000);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b6a0ace850.js"></script>
@endsection