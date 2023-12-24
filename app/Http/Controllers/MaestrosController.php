<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    public function index() {
        $maestros = Maestro::all();
        return view('admin-panel.maestroslist', compact('maestros'));
    }
}
