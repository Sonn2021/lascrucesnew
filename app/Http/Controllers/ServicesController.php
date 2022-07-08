<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Hour;

class ServicesController extends Controller
{
    public function servicios()
    {
        $servicios = Service::all();
        return view('servicios')->with('servicios',$servicios);
    }

    public function agregarServicio()
    {
        return view('agregarServicio');
    }

    public function previewServicios()
    {
        $servicios = Service::all();
        $hours = Hour::all();
        //return view('previewServicios')->with('servicios',$servicios);
        return view('previewServicios', compact('servicios','hours'));
    }
    
    public function editar($id=null)
    {
        if(!is_null($id)){
            $servicio = Service::find($id);
            return view("editaServicio")->with('servicio',$servicio);
        }else
            return redirect('/preview-servicios');
    }

    public function eliminar($id=null)
    {
        if(!is_null($id)){
            $service = Service::find($id);
            $service->delete();
            return redirect('/preview-servicios');
        }
    }

    public function guardarHoraServicio(Request $request)
    {
        $hora = new Hour();
        $hora->service_id = $request->id_servicio;
        $hora->hora = $request->hora;
        $hora->dia = $request->dia;
        $hora->seleccionado = 0;

        $hora->save();
        return redirect()->back()->with('success-hour','Hora agregada con exito');
    }

    public function guardarServicio(Request $request)
    {
        $service = new Service();

        if(isset($request->identificador))
            $service = Service::find($request->identificador);

        $service->nombre = $request->nombre;
        $service->costo = $request->costo;
        $service->descripcion = $request->descripcion;
        $service->reservacion = $request->reservacion;

        if($request->hasfile('imagen')){
            $file = $request->imagen;
            $filename = 'img/' . $file->getClientOriginalName();
            $file->move('img/', $filename);
            $service->imagen = $filename;
        }else {
            return $request;
        }

        $service->save();

        if(isset($request->identificador))
            return redirect('/preview-servicios');
        return redirect()->back()->with('success','Servicio agregado con exito');
    }
}