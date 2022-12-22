<?php
 namespace App\Interfaces;
 interface CarrinhoInterface
 {
     public function adicionarAoCarrinho($id);
     public function removerDoCarrinho($id);
     public function pegarProdutosDoCarrinho();
     public function totalDoPedido();
 }
