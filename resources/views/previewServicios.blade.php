<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Preview servicios</title>
</head>
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="/agregar-servicio" class="text-light"><button type="button" class="btn btn-primary w-100 mb-5 bg-brown">AGREGAR SERVICIO</button></a>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($servicios as $s)
                <div class="col">
                    <div class="card h-100 shadow rounded">
                        <img src="{{ asset($s->imagen)}}" class="card-img-top " alt="...">
                        <div class="card-body text-center justify-content-center">
                            <p class="id d-none">{{$s->id}}</p>
                            <p class="reservacion d-none">{{$s->reservacion}}</p>
                            <div class="d-flex justify-content-around align-items-baseline">
                                <h5 class="nombre card-title text-orange fw-bold mb-2">{{$s->nombre}}</h5>       
                            </div>
                            <div class="opciones d-flex justify-content-around w-50 mb-2 mx-auto">
                                    <button type="button" class="editar btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" class="clase">
                                        <i class="fas fa-pen"></i></a>
                                    </button>
                                    <button type="button" class="hora btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="clase">
                                        <i class="fas fa-clock"></i>
                                    </button>
                                    <div class="borrar">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><a href="/eliminar-servicio/{{$s->id}}" class="text-light"><i class="fas fa-trash"></i></a></button>
                                    </div>
                                </div>
                            <p class="descripcion card-text">{{$s->descripcion}}</p>
                            <p class="costo fw-bold">{{$s->costo}}</p>
                            <hr>
                            <h6><b>Horarios</b></h6>
                            <div class="d-flex flex-column justify-content-center align-items-center overflow-auto pt-5" style="height: 100px">
                                @foreach($hours as $h)
                                    @if($h->service_id == $s->id && $h->seleccionado == 0 )
                                        <p class="horario"><strong>{{ \Carbon\Carbon::parse($h->dia)->format('d/m/Y')}}</strong> : {{$h->hora}}</p>
                                    @endif
                                @endforeach
                            </div>
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
                    <form action="{{route('servicio.submit')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                        @csrf
                                <input type="hidden" name="identificador" value="">
                                <label for="name" class="form-label">Nombre del servicio</label>
                                <input type="text" class="form-control mb-2"  name="nombre" value="" required>
                                <label for="costo" class="form-label">Costo</label>
                                <input type="number" class="form-control mb-2" name="costo" min="0" max="10000" value="" required>
                                <label for="descripcion" class="form-label">Descripción del servicio</label>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar horario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('hora.submit')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                        @csrf
                                <input type="hidden" name="identificador" value="">
                                <label for="name" class="form-label">ID servicio</label>
                                <input type="text" class="form-control mb-2"  name="id_servicio" value="" required readonly>
                                <label for="costo" class="form-label">Día</label>
                                <input id="date_picker" type="date" class="form-control" name="dia" required>
                                <label for="costo" class="form-label">Hora</label>
                                <!--<input type="time" id="inputMDEx1" class="form-control" name="hora" required>-->
                                <input type="text" class="form-control mb-2"  name="hora" value="" required>
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
                //alert(costo);

                //Colocar la informacion obtenida dentro de cada input del modal
                $("input[name=identificador]").val(id);
                $("input[name=nombre]").val(nombre);
                $("input[name=costo]").val(costo);
                $("textarea[name=descripcion]").val(descripcion);
                $("#reservacion").val(reservacion);
            });  

            $("button.hora").click(function(){
                //Obtener la informacion dentro de cada row
                var id = $(this).closest(".card-body").find(".id").text();
                //alert(costo);

                //Colocar la informacion obtenida dentro de cada input del modal
                $("input[name=id_servicio]").val(id);
            });        
        });
    </script> 
@endsection
