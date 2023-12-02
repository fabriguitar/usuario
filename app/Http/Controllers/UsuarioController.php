<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = Usuario::all(); // Corregir el nombre de la variable $usuarios

        return view('usuarios', compact('usuarios'));
    }

    public function crear (){

        return view('crearUsuario');
    }
    public function score (Request $request) {
        Return $request->usuario;
    }
}
