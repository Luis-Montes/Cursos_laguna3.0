<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Maestro;
use Illuminate\Http\Request;

class NuevocursoController extends Controller
{
    public function index(){
        $maestros = Maestro::all();


        return view('admin-panel.agregarcurso', compact('maestros'));
    }

    public function store(Request $request){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        Curso::create([
            'nivel' => $request->nivel,
            'nombre_curso' => $request->nombre_curso,
            'descripcion' => $request->descripcion,
            'duracion' => $request->duracion,
            'precio' => $request->precio,
            'fecha_inicio' => $request->fecha_inicio,
            'maestro' => $request->maestro
        ]);

        return redirect()->route('inicio');

        


    }
}
