<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Imágenes</title>
</head>
@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <button type="button" class="btn btn-primary  bg-brown w-100 mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            AGREGAR IMAGEN
        </button>
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            @foreach($imagenes as $i)
                <div class="col">
                    <div class="card shadow rounded">
                        <img src="{{asset($i->imagen)}}" class="card-img-top" alt="...">
                        <div class="card-img-overlay d-flex justify-content-end align-items-start">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><a href="/eliminar-imagen/{{$i->id}}" class="text-light"><i class="fas fa-trash"></i></a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar imagen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('imagen.submit')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                        @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Imagen</label>
                                <input class="form-control" type="file" id="formFile" name="imagen" required>
                            </div> 
                            <label for="reservacion mt-4">Estación</label>
                            <select class="form-select mt-2 mb-2" aria-label="Default select example" name="estacion" required>
                                <option value="invierno" selected>Invierno</option>
                                <option value="primavera">Primavera</option>
                                <option value="verano">Verano</option>
                                <option value="otono">Otoño</option>
                            </select> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection