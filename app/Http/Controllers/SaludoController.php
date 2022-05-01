<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function inicio()
    {
        return view('formulario');
    }

    public function saludo(Request $request, $comentario)
    {


        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');

        /* $datos['nombre'] = $nombre;
        $datos['apellido'] = $apellido; */

        if ($nombre == "" || $apellido == "") {
            $response = redirect()->action([SaludoController::class, 'inicio'])->withInput();
        }
        else {
             $response = view('saludo', compact('nombre', 'apellido', 'comentario'));
        }

        return $response;
    }
}
