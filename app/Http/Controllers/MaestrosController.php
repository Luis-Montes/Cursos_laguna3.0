<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use App\Models\Curso;
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        $maestros = Maestro::all();
        return view('admin-panel.maestroslist', compact('maestros'));
    }
}