<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;

class GeneralController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function galeria()
    {
        $imagenes = Imagen::all();
        return view('galeria')->with("imagenes", $imagenes);
    }

    public function recomendaciones_y_compromisos()
    {
        return view('recomendaciones_y_compromisos');
    }

    public function FAQ()
    {
        return view('FAQ');
    }

    public function acerca_de()
    {
        return view('acerca_de');
    }

    public function imagenes()
    {
        $imagenes = Imagen::all();
        return view("imagenes")->with("imagenes", $imagenes);
    }

    public function guardarImagen(Request $request)
    {
        $imagen = new Imagen();

        $imagen->estacion = $request->estacion;

        if($request->hasfile('imagen')){
            $file = $request->imagen;
            $filename = 'img/' . $file->getClientOriginalName();
            $file->move('img/', $filename);
            $imagen->imagen = $filename;
        }else {
            return $request;
        }

        $imagen->save();

        return redirect()->back()->with('success','Servicio agregado con exito');
    }

    public function eliminar($id=null)
    {
        if(!is_null($id)){
            $imagen = Imagen::find($id);
            $imagen->delete();
            return redirect('/imagenes');
        }
    }
}
