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
    <div class="container" id="general">
        <div class="paso mt-4 justify-content-start mb-4">
            <span class="badge bg-brown rounded-circle me-2">4</span>
            <p><b> Orden  </b></p>
        </div>
        <div class="w-100">
            @if ($message = Session::get('error'))
                <div id="successMessage" class="alert alert-danger alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>

        <form action="{{route('actualizar.cantidad')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="seleccionados table" id="productos">
                <thead>
                    <tr>
                        <th>Nombre del producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="lista-productos">
                    @foreach($productos as $p)
                        @if($p->id_reservation == Session::get('id'))
                        <tr>
                            <td>{{$p->food->nombre}} </td>
                            <td class="p-costo">{{$p->food->costo}}</td>
                            <td class="d-flex flex-row">
                                <input type="hidden" name="id1[]" value="{{$p->id}}">
                                <button type="button" class="buttonmenos btn btn-primary btn-sm">-</button>
                                <input type='number' id='cantidad' name='checked1[]' min='1' max='20' value='{{$p->cantidad}}' class="border-0 text-center" readonly>
                                <button type="button" class="buttonmas btn btn-primary btn-sm">+</button>
                            </td>
                            <td class="p-total">{{$p->food->costo}}</td>
                        </tr>
                        @endif
                    @endforeach
                    @foreach($servicios as $s)
                        @if($s->id_reservation == Session::get('id'))
                        <tr>
                            <td>{{$s->services->nombre}} @if($s->horario != "N/A")<strong>{{$s->horario}}</strong>@endif</td>
                            <td class="p-costo">{{$s->services->costo}}</td>
                            <td>
                                <input type="hidden" name="id2[]" value="{{$s->id}}">
                                @if($s->horario == "N/A")
                                    <button type="button" class="buttonmenos btn btn-primary btn-sm">-</button>
                                    <input type='number' id='cantidad' name='checked2[]' min='1' max='20' value='{{$s->cantidad}}' class="border-0 text-center" readonly>
                                    <button type="button" class="buttonmas btn btn-primary btn-sm">+</button>
                                @endif
                            </td>
                            <td class="p-total">{{$s->services->costo}}</td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div class="total">
                <p class="d-none">{{$reservacion->total}}</p>
                <h4><b> Total: </b><input type="text" class="cantidad-total border-0" name="total" value="0" readonly></h4>
                <p>Selecciona el adelanto a pagar</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pago" id="pago1" value="" checked>  
                    <label class="form-check-label" for="pago1">
                        50% - $<span class="50p fw-bold"></span>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pago" id="pago2" value="">
                    <label class="form-check-label" for="pago2">
                        100% - $<span class="100p fw-bold"></span>
                    </label>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-around align-items-center mb-5">
                <button class="btn btn-primary bg-primary"><a href="{{action('ReservationController@eliminaServicios')}}" class="text-light text-decoration-none">ATRÁS</a></button> 
                <button type="submit" class="btn btn-primary bg-brown" name="send" value="Submit">CONTINUAR</button>      
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function(){

            setTimeout(function() {$('#successMessage').fadeOut('fast');}, 3000);

            var producto = "";
            var nombre = "";
            var costo = "";
            var total = 0;
            var cantidad = 0;
            var id = "";
            var id_hora = "N";
            var hora = "";
            var total_pedido = 0;
            var pago = 0;
            var aux = 0;

            aux = $(".d-none").text();
            //alert(aux);

            $('.p-costo').each(function(){
                total_pedido += parseFloat($(this).text());  
            });

            pago = total_pedido * .5;
            
            if(aux==0){
                $('input[name=total]').val(total_pedido);
                $('.100p').text(total_pedido);
                $('.50p').text(pago);
                $('input[name=pago]').val(pago);
            }else{
                $('input[name=total]').val(aux);
                total_pedido = parseInt(aux);
            }
            
            //Agregar elemento al carrito de compras
            $(".seleccionados").on("click","input[type=number]", function(){
                costo = $(this).closest("tr").find(".p-costo").text();
                cantidad = $(this).val();
                $(this).closest("tr").find(".p-total").html(costo*cantidad);

                total_pedido += parseInt(costo);
                $('input[name=total]').val(total_pedido);
                $('input[name=100p]').val(total_pedido);
                $('.100p').text(total_pedido);
            });

            $("#general").on("click","button.buttonmas",function(){
                costo = $(this).closest("tr").find(".p-costo").text();
                x = $(this).closest("tr").find("input[type=number]").val();
                x++;
                $(this).closest("tr").find("input[type=number]").val(x);

                $(this).closest("tr").find(".p-total").text(parseInt(costo*x));
                total_pedido += parseInt(costo);
                $('input[name=total]').val(total_pedido);
                pago = total_pedido * .5;
                $('.50p').text(pago);
                $('.100p').text(total_pedido);
                if($("#pago2").is(':checked')) {
                    $('input[name=pago]').val(total_pedido);
                }else{
                    $('input[name=pago]').val(total_pedido*.5);
                }
            });

            $("#general").on("click","button.buttonmenos",function(){
                x = $(this).closest("tr").find("input[type=number]").val();
                if(x>1){
                    costo = $(this).closest("tr").find(".p-costo").text();
                    x--;
                    $(this).closest("tr").find("input[type=number]").val(x);
                    $(this).closest("tr").find(".p-total").text(parseInt(costo*x));
                    total_pedido -= parseInt(costo);
                    $('input[name=total]').val(total_pedido);
                    pago = total_pedido * .5;
                    $('.50p').text(pago);
                    $('.100p').text(total_pedido);
                    if($("#pago2").is(':checked')) {
                        $('input[name=pago]').val(total_pedido);
                    }else{
                        $('input[name=pago]').val(total_pedido*.5);
                    }
                }
            });

            $("#general").on("click","#pago2",function(){
                $('input[name=pago]').val(total_pedido);
            });

            $("#general").on("click","#pago1",function(){
                $('input[name=pago]').val(pago);
            });
        });
    </script>
@endsection