<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
rota padrao

Route::get('/', function () {
    return view('home');
});
*/

Route::match(['get', 'post'], '/', [ProdutoController::class, 'index'])
    ->name("home");

Route::match(['get', 'post'], '/pagamento', [ProdutoController::class, 'pagamento'])
    ->name("pagamento");

Route::match(['get', 'post'], '/categoria', [ProdutoController::class, 'categoria'])
    ->name("categoria");

Route::match(['get', 'post'], '/{idcategoria}/categoria', [ProdutoController::class, 'categoria'])
    ->name("categoria_por_id");

Route::match(['get', 'post'], '/cadastrar', [ClienteController::class, 'cadastrar'])
    ->name("cadastrar");

Route::match(['get', 'post'], '/cliente/cadastrar', [ClienteController::class, 'cadastrarCliente'])
    ->name("cadastrar_cliente");
// Carrinho
Route::match(['get', 'post'], '/{idproduto}/carrinho/adicionar', [ProdutoController::class, 'adicionarCarrinho'])
    ->name("adicionar_carrinho");

Route::match(['get', 'post'], '/carrinho', [ProdutoController::class, 'verCarrinho'])
    ->name("ver_carrinho");


Route::match(['get', 'post'], '/carrinho/finalizar', [ProdutoController::class, 'finalizar'])
    ->name("carrinho_finalizar");

Route::match(['get', 'post'], '/{indice}/excluircarrinho', [ProdutoController::class, 'excluirCarrinho'])
    ->name("carrinho_excluir");

Route::match(['get', 'post'], '/compras/pagar', [ProdutoController::class, 'pagar'])
    ->name("pagar");
