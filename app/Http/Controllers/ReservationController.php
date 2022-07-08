<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Service;
use App\Hour;
use App\Reservation;
use App\FoodList;
use App\ServicesList;
use App\Cabin;
use PDF;
use Session;
use Mail;

class ReservationController extends Controller
{

    public function datos()
    {
        return view('datosReservacion');
    }

    public function cabanas()
    {
        $cabanas = Cabin::all();
        return view('cabanas')->with('cabanas',$cabanas);
    }

    public function infoCabanas($id=null)
    {
        $cabana = DB::table('cabins')->where('id',$id)->get();
        return view('info-cabana')->with('cabana',$cabana);
    }

    public function seleccionComida(Request $reservation_id)
    {
        $productos = DB::table('food')->where('reservacion', 1)->get();
        return view('seleccionComida')->with('productos',$productos);
    }

    public function seleccionServicios()
    {
        $servicios = DB::table('services')->where('reservacion', 1)->get();
        $horas = Hour::all();
        return view('seleccionServicios', compact('servicios', 'horas'));
    }

    public function orden()
    {
        $id_p = Session::get('id');
        $productos = FoodList::with('food')->get();
        $servicios = ServicesList::with('services')->get();
        $reservacion = Reservation::find($id_p);
        return view('orden', compact('productos', 'servicios','reservacion'));
    }

    public function guardarDatosReservacion(Request $request)
    {
        $reservation = new Reservation();
        $reservation->nombre = $request->nombre;
        $reservation->correo = $request->correo;
        $reservation->personas = $request->personas;
        $reservation->dia = $request->dia;
        $reservation->hora = $request->hora;
        $reservation->total = 0;
        $reservation->pago = 0;

        $reservation->save();
        $id_pedido = $reservation->id;
        Session::put('id',$id_pedido);
        Session::put('correo', $request->correo);

        return redirect()->route('seleccion.comida')->with('id_pedido');
    }

    public function guardarSeleccion(Request $request)
    {
        $id_p = Session::get('id');
        if(isset($request->tipo) && $request->tipo == 1){
            $productos = $request->get('checked');
            if (is_array($productos) || is_object($productos))
            {
                foreach ($productos as $value){
                    $listaComida = new FoodList;
                    $listaComida->id_reservation = $id_p;
                    $listaComida->comida = $value;
                    $listaComida->cantidad = 1;
                    $listaComida->save();
                }
            }
            return redirect()->route('seleccion.servicios');
        }else{
            $servicios = $request->get('checked');
            $horas = $request->get('checkedh');
            //dd($horas);
            if (is_array($servicios) || is_object($servicios))
            {
                foreach ($servicios as $value){
                    $listaServicios = new ServicesList;
                    $listaServicios->id_reservation = $id_p;
                    $listaServicios->servicio = $value;
                    $listaServicios->cantidad = 1;
                    $listaServicios->horario = null;
                    $listaServicios->save();
                }
            }
            if (is_array($horas) || is_object($horas))
            {
                foreach ($horas as $value){
                    DB::table('hours')->where('id', $value)->update(['seleccionado' => 1]);
                    $servicio_id = DB::table('hours')->where('id', $value)->value('service_id');
                    $servicio_hora = DB::table('hours')->where('id', $value)->value('hora');
                    $listaServicios = new ServicesList;
                    $listaServicios->id_reservation = $id_p;
                    $listaServicios->servicio = $servicio_id;
                    $listaServicios->cantidad = 1;
                    $listaServicios->id_horario = $value;
                    $listaServicios->horario = $servicio_hora;
                    $listaServicios->save();
                }
            }
            return redirect()->route('orden');
        }
    }

    public function actualizaCantidad(Request $request)
    {
        if($request->total == 0){
            return redirect()->back()->with('error','Selecciona al menos un platillo o un servicio');
        }else{
            $id_p = Session::get('id');
            $aux = 0;
            $id = $request->get('id1');
            $productos = $request->get('checked1');
            $id2 = $request->get('id2');
            $servicios = $request->get('checked2');

            $reservacion = Reservation::find($id_p);
            $reservacion->total = $request->total;
            $reservacion->pago = $request->pago;
            $reservacion->save();
            if (is_array($productos) || is_object($productos))
            {
                foreach ($productos as $value){
                    $listaComida = FoodList::find($id[$aux]);
                    $listaComida->cantidad = $value;
                    $listaComida->save();
                    $aux++;
                }
            }
            $aux = 0;
            if (is_array($servicios) || is_object($servicios))
            {
                foreach ($servicios as $value){
                    $listaServicios = ServicesList::find($id2[$aux]);
                    $listaServicios->cantidad = $value;
                    $listaServicios->save();
                    $aux++;
                }
            }
            $data = ["total" => $request->pago, "referencia" => "5579 0830 1375 7972"];
            Session::put('data',$data);
            return redirect()->route('pagina.final');
        }
    }

    public function gracias()
    {
        return view('gracias');
    }

    public function oxxoPDF()
    {
        $id_p = Session::get('id');
        $correo = Session::get('correo');
        $reservacion = Reservation::find($id_p);
        $productos = FoodList::with('food')->where('id_reservation', $id_p)->get();
        $servicios = ServicesList::with('services')->where('id_reservation', $id_p)->get();
        $correos = ['cd52bgomez@hotmail.com','ecoturismodenaturaleza@gmail.com', $correo];
        Mail::send('emails.reservationmail',[
            'id' => $id_p,
            'nombre' => $reservacion->nombre,
            'personas' => $reservacion->personas,
            'dia' => $reservacion->dia,
            'hora' => $reservacion->hora,
            'total' => $reservacion->total,
            'productos' => $productos,
            'servicios' => $servicios,
        ],function($mail) use($correos){
            $mail->from(env('MAIL_FROM_ADDRESS'),"Las Cruces");
            $mail->to($correos)->subject('Comprobante de reservación');
        });
        $data = Session::get('data');
        $pdf = PDF::loadView('oxxoPDF',$data);
        return $pdf->download('pago.pdf');
        return redirect()->route('orden')->with($pdf);
    }

    public function reservacionesRealizadas()
    {
        $reservaciones = Reservation::all();
        $productos = FoodList::all();
        $servicios = ServicesList::all();
        return view('reservacionesRealizadas', compact('reservaciones','productos', 'servicios'));
    }

    public function eliminarReservacion($id=null)
    {
        DB::table('food_list')->where('id_reservation', $id)->delete();
        DB::table('services_list')->where('id_reservation', $id)->delete();
        DB::table('reservation')->where('id', $id)->delete();
        return redirect('/reservaciones-realizadas');
    }

    public function eliminaComida()
    {
        $id_p = Session::get('id');
        $servicios = FoodList::where('id_reservation', $id_p)->delete();
        return redirect()->route('seleccion.comida');
    }

    public function eliminaServicios()
    {
        $id_p = Session::get('id');
        $servicios = ServicesList::where('horario', '!=', null)->get();
        foreach ($servicios as $value){
            $horas = Hour::where('id', $value->id_horario)->update(['seleccionado' => 0]);
        }
        $servicios = ServicesList::where('id_reservation', $id_p)->delete();
        return redirect()->route('seleccion.servicios');
    }
}
