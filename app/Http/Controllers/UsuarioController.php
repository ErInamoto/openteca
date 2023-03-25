<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginView()
    {
        return view('usuario/login');
    }

    public function cadastroView()
    {
        return view('usuario/cadastro');
    }

    public function contaView()
    {
        return view('usuario/minha_conta');
    }

    public function homeView()
    {
        return view('usuario/home');
    }


}
