<?php

use App\Models\Maestro;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\NuevocursoController;
use App\Http\Controllers\NuevomaestroController;
use App\Http\Controllers\RegistroMController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* VISTAS INICIALES*/
Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/Registro-Instructor', [RegistroMController::class, 'index'])->name('registromhome');

/* PANEL DE ADMINSTRADOR */
Route::get('/admin', function () {
    return view('admin-panel.adminpanle');
})->name('admin');

/* RUTAS PARA LOS CURSOS */
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');
Route::get('/cursos_formulario', [NuevocursoController::class, 'index'])->name('formulario_cursos');
Route::post('/cursos_formulario', [NuevocursoController::class, 'store']);



/* RUTAS PARA LOS MAESTROS */
Route::get('/maestros', [MaestrosController::class, 'index'])->name('maestros');
Route::get('/maestros_formulario', [NuevomaestroController::class, 'index'])->name('formulario_maestros');
Route::post('/maestros_formulario', [NuevomaestroController::class, 'store']);
