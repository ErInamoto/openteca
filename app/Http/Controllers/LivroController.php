<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function pesquisaView()
    {
        return view('livros/resultados_de_pesquisa_livros');
    }

    public function infoView()
    {
        return view('livros/informacoes_do_livro');
    }

    public function meusView()
    {
        return view('livros/meus_livros');
    }
}
