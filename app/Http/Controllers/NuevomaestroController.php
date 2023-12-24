<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevomaestroController extends Controller
{
    public function index(){
        return view('admin-panel.agregarmaestro');
    }
}
