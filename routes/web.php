<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

ROUTE::GET('/usuario', [UsuarioController::class,'index']);

ROUTE::GET('/usuario/crear', [UsuarioController::class,'crear'])->name('usuario.crear');
ROUTE::POST('/usuario/guardar', [UsuarioController::class,'store'])->name('usuario.guardar');
