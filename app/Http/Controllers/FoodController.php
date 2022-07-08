<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FoodController extends Controller
{
    public function comida()
    {
        $productos = Product::all();
        return view('comida')->with('productos',$productos);
    }

    public function agregarComida(){
        return view('agregarComida');
    }

    public function previewComida()
    {
        $productos = Product::all();
        return view('previewComida')->with('productos',$productos);
    }

    public function editar($id=null)
    {
        if(!is_null($id)){
            $producto = Product::find($id);
            return view("editaComida")->with('producto',$producto);
        }else
            return redirect('/preview-comida');
    }

    public function eliminar($id=null)
    {
        if(!is_null($id)){
            $producto = Product::find($id);
            $producto->delete();
            return redirect('/preview-comida');
        }
    }

    public function guardarComida(Request $request)
    {
        $product = new Product();

        if(isset($request->identificador))
            $product = Product::find($request->identificador);

        $product->nombre = $request->nombre;
        $product->costo = $request->costo;
        $product->descripcion = $request->descripcion;
        $product->reservacion = $request->reservacion;

        if($request->hasfile('imagen')){
            $file = $request->imagen;
            $filename = 'img/' . $file->getClientOriginalName();
            $file->move('img/', $filename);
            $product->imagen = $filename;
        }else {
            return $request;
        }
        
        $product->save();

        if(isset($request->identificador))
            return redirect('/preview-comida');
        return redirect()->back()->with('success','Platillo agregado con exito');
    }
}
