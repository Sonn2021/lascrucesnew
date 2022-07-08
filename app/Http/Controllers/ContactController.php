<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        Mail::send('emails.contactmail',[
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->nombre);
            $mail->to("turismodenaturaleza19@gmail.com")->subject('Contacto');
        });
        return redirect()->back()->with('success','Mensaje enviado con exito');
    }
}
