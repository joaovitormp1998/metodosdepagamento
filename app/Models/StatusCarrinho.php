<?php

namespace App\Models;

class StatusCarrinho
{
    public function carrinhoExiste()
    {
        return (isset($_SESSION['cart']) || !empty($_SESSION['cart'])) ? true : false;
    }

    public function criarOCarrinho()
    {
        if (!$this->carrinhoExiste()) {
            $_SESSION['cart'] = [];
        }
    }

    public function estaNoCarrinho($id)
    {
        if ($this->carrinhoExiste()) {
            if (isset($_SESSION['cart'][$id])) {
                return true;
            } else {
                $this->criarOCarrinho();
            }
        }
    }
}
