<?php

namespace App\Models;

use App\Interfaces\CarrinhoInterface;

class Carrinho implements CarrinhoInterface
{
    private $statusDoCarrinho;

    public function __construct()
    {
        $this->statusDoCarrinho = new StatusCarrinho();
    }
    public function adicionarAoCarrinho($id)
    {
        if (!$this->statusDoCarrinho->carrinhoExiste()) {
            $this->statusDoCarrinho->criarOCarrinho();
        }
        if ($this->statusDoCarrinho->estaNoCarrinho($id)) {
            $_SESSION['cart'][$id] = 1;
        }else{
            $_SESSION['cart'][$id] += 1;

        }
    }
    public function pegarProdutosDoCarrinho()
    {
    }

    public function removerDoCarrinho($id)
    {
        // TODO: Implement removerDoCarrinho() method.
    }

    public function totalDoPedido()
    {
        // TODO: Implement totalDoPedido() method.
    }
}
