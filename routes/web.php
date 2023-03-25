<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UsuarioController::class, 'homeView']);
Route::get('/login',[UsuarioController::class, 'loginView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/minha_conta', [UsuarioController::class, 'contaView']);

Route::get('/pesquisa_livro', [LivroController::class, 'pesquisaView']);
Route::get('/info_livro', [LivroController::class, 'infoView']);
Route::get('/meus_livros', [LivroController::class, 'meusView']);


Route::get('/', function () {
    return view('welcome');
});
