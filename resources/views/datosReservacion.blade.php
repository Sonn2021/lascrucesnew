<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">		
    <title>Selección de servicios</title>
    <script>
			$( function() {
				$( "#datepicker" ).datepicker();
			} );
	</script>
</head>

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="d-flex align-items-center justify-content-center w-100">
            <h1>Reservación</h1>
        </div>
        <div class="mt-2">
            <div class="formulario mt-3">
                <form action="{{route('datos.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="identificador" value="1">
                    <div class="campos">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="nombre" placeholder="Juan Perez" required>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="correo" placeholder="Correo electrónico" required>
                            <label for="floatingInput">Correo electrónico</label>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. personas</label>
                                <input class="quantity form-control" min="0" max="100"  value="1" name="personas" type="number" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Día</label>
                                <input id="date_picker" type="date" class="form-control" name="dia" onchange="showDate(this.value)" required>
                                <div id="time" class="text-danger"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Hora</label>
                                <input type="time" id="inputMDEx1" class="form-control" name="hora" required>
                            </div>
                        </div>
                        <!--<input class='flatpickr' data-enable-time='true' data-time_24hr='true' >-->
                        <!--<button type="button" class="btn bg-brown boton mt-5 m-auto">CONTINUAR</button>-->
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="recibir">
                            <label class="form-check-label" for="flexCheckDefault">
                                Acepto recibir la información de mi pedido por correo electrónico
                            </label>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center align-items-center mt-5">
                        <button type="submit" class="btn btn-primary bg-brown" name="send" value="Submit" id="continuar" disabled>CONTINUAR</button>      
                    </div>          
                </form>
            </div>
        </div>
    </div>


    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate() + 2).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today); 

        function showDate(getdate) {
            var selectedDate = new Date(getdate);
            var displaydate = document.getElementById('time');

            if(selectedDate.getDay() < 5 ){
                $('#date_picker').val(""); 
                displaydate.textContent = "Solo disponible sábado y domingo";
                setTimeout(function(){
                    displaydate.textContent = "";
                }, 5000);
            }
        }
    </script>

    <script>
        $(document).ready(function(){
            $("#recibir").click(function(){
                $("#continuar").prop( "disabled",!this.checked);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection