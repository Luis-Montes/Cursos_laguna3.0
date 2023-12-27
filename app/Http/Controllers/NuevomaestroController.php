<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevomaestroController extends Controller
{
    public function index(){
        return view('admin-panel.agregarmaestro');
    }

    public function store(Request $request) {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>"; 
    }
}
