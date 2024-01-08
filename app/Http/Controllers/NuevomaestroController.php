<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class NuevomaestroController extends Controller
{
    public function index(){
        return view('admin-panel.agregarmaestro');
    }

    public function store(Request $request) {
        Maestro::create([
            'clave' => $request->clave,
            'nombre_completo' => $request->nombre_completo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'genero' => $request->genero,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'extencion' => $request->extencion,
            'telefono' => $request->telefono,
            'codigo_postal' => $request->codigo_postal,
            'ciudad' => $request->ciudad
        ]);

        return redirect()->route('maestros');
    }
}
