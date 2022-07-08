<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Nombre</title>
</head>
<body>
    <div class="container mt-5 mb-5">
            <div class="card p-5 d-flex justify-content-center aling-items-center">
                <div>
                    <h1>Información de la reservación</h1>
                    <p>Id de la reservación: {{$id}}</p>
                    <p>Nombre: {{$nombre}}</p>
                    <p>Número de personas: {{$personas}}</p>
                    <p>Día de la visita: {{$dia}}</p>
                    <p>Hora de la visita: {{$hora}}</p>
                    <p>Total a pagar: {{$total}}</p>
                    <p>Comida seleccionada:</p>
                    @foreach ($productos as $p)
                        <p>{{ $p->food->nombre }}: {{ $p->cantidad }}</p>
                    @endforeach
                    <p>Servicios seleccionado(s):</p>
                    @foreach ($servicios as $s)
                        <p>{{ $s->services->nombre }} : @if($s->horario != null) {{$s->horario}} @else {{ $s->cantidad }} @endif</p>
                    @endforeach
                </div>
                <img src="img/logo.png" alt="" class="w-25 mx-auto"> 
            </div>
        </div>
</body>
</html>