<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Preview comida</title>
</head>

@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <a href="/agregar-comida" class="text-light"><button type="button" class="btn btn-primary w-100 mb-5 bg-brown">AGREGAR COMIDA</button></a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($productos as $p)
                <div class="col">
                    <div class="card h-100 shadow rounded">
                        <img src="{{ asset($p->imagen)}}" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                            <p class="id d-none">{{$p->id}}</p>
                            <p class="reservacion d-none">{{$p->reservacion}}</p>
                            <div class="d-flex justify-content-around align-items-baseline">
                                <h5 class="nombre card-title text-orange fw-bold mb-4">{{$p->nombre}}</h5>
                                <div class="opciones d-flex justify-content-evenly w-25">
                                    <button type="button" class="editar btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" class="clase">
                                        <i class="fas fa-pen"></i></a>
                                    </button>
                                    <div class="borrar">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><a href="/eliminar-comida/{{$p->id}}" class="text-light"><i class="fas fa-trash"></i></a></button>
                                    </div>
                                </div>
                            </div>
                            <p class="descripcion card-text">{{$p->descripcion}}</p>
                            <p class="costo fw-bold">{{$p->costo}}</p>
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
                        <h5 class="modal-title" id="exampleModalLabel">Editar comida</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('comida.submit')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                        @csrf
                                <input type="hidden" name="identificador" value="">
                                <label for="name" class="form-label">Nombre del platillo</label>
                                <input type="text" class="form-control mb-2"  name="nombre" value="" required>
                                <label for="costo" class="form-label">Costo</label>
                                <input type="number" class="form-control mb-2" name="costo" min="0" max="10000" value="" required>
                                <label for="descripcion" class="form-label">Descripción del platillo</label>
                                <textarea class="form-control" class="form-control mb-5" id="exampleFormControlTextarea1" rows="3" name="descripcion" required></textarea>
                                <label for="reservacion mt-4">Reservación</label>
                                <select class="form-select mt-2 mb-2" aria-label="Default select example" name="reservacion" id="reservacion" required>
                                    <option selected>Seleccionar opción</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select> 
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Imagen</label>
                                    <input class="form-control" type="file" id="formFile" name="imagen" required>
                                </div> 
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

    <script>
        $(document).ready(function(){
            $("button.editar").click(function(){
                //Obtener la informacion dentro de cada row
                var id = $(this).closest(".card-body").find(".id").text();
                var nombre = $(this).closest(".card-body").find(".nombre").text();
                var costo = $(this).closest(".card-body").find(".costo").text();
                var descripcion = $(this).closest(".card-body").find(".descripcion").text();
                var reservacion = $(this).closest(".card-body").find(".reservacion").text();

                //Colocar la informacion obtenida dentro de cada input del modal
                $("input[name=identificador]").val(id);
                $("input[name=nombre]").val(nombre);
                $("input[name=costo]").val(costo);
                $("textarea[name=descripcion]").val(descripcion);
                $("#reservacion").val(reservacion);
            });          
        });
    </script>  
@endsection
