<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends RmModel
{

    protected $table = "itens_pedidos";
    protected $fillable = ['dt_item','valor','quantidade','produto_id','pedido_id'];
}
