<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Maestro;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        $maestros = Maestro::all();
        return view('admin-panel.cursoslist', compact('cursos')); 
    }
}
