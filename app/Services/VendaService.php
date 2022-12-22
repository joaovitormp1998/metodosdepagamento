<?php

namespace App\Services;

use App\Models\Usuario;
use Log;
use App\Models\Pedido;
use App\Models\ItensPedido;

class VendaService
{

    public function finalizarVenda($prods = [])
    {
        try {
            \DB::beginTransaction();
            $dtHoje = new \DateTime();
            $pedido = new Pedido();
            $pedido->datapedido = $dtHoje->format("Y-m-d H:i:s");
            $pedido->status = "";
            $pedido->usuario_id = 15;
            $pedido->save();
            foreach ($prods as $p){
                $itens = new ItensPedido();
                $itens->quantidade =1;
                $itens->valor = $p->valor;
                $itens->dt_item = $dtHoje->format("Y-m-d H:i:s");
                $itens->produto_id = $p->id;
                $itens->pedido_id = $pedido->id;
                $itens->save();

            }
            \DB::commit();
            return ['status' => 'ok', 'message' => 'Venda realizada com Sucesso'];

        } catch (\Exception $e) {
            \Log::error('ERROR:VENDASERVICE', ['message' => $e->getMessage()]);
            \DB::rollback();
            return ['status' => 'err', 'message' => 'Venda não pode ser realizada '];
            // dd($e);
        }
    }
}
