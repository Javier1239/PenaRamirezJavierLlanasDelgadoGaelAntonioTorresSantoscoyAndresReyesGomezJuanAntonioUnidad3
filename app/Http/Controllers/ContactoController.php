<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function guardarInformacion(Request $request)
    {
        // Validar los datos del formulario si es necesario

        // Guardar los datos en la base de datos
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->email = $request->input('email');
        $contacto->mensaje = $request->input('mensaje');
        $contacto->save();

        // Redireccionar o mostrar un mensaje de éxito
        return redirect()->back()->with('success', '¡Gracias! Tu mensaje ha sido enviado.');
    }
}
