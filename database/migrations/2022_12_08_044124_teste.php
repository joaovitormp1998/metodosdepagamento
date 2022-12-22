<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();

        $prod = new \App\Models\Produto([
            'nome' => 'YPE MULTIUSO',
            'valor' => 10,
            'foto' => 'imagens/1xg.webp',
            'descricao' => 'Lavagem geral da casa',
            'categoria_id' => $cat->id
        ]);
        $prod->save();

        $prod = new \App\Models\Produto([
            'nome' => 'TÊNIS FILA',
            'valor' => 10,
            'foto' => 'imagens/produto2.jpg',
            'descricao' => 'Excelente para corridas e caminhadas',
            'categoria_id' => $cat->id
        ]);

        $prod->save();

        $prod = new \App\Models\Produto([
            'nome' => 'CAMISA LACOSTE ORIGINAL', 'valor' => 10,
            'foto' => 'imagens/produto3.webp', 'descricao' => 'Lavagem geral da casa', 'categoria_id' => $cat->id
        ]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'CAMISA AMBERCROMBIE ORIGINAL', 'valor' => 10, 'foto' => 'imagens/produto4.webp', 'descricao' => 'Lavagem geral da casa', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'HD EXTERNO 2TB', 'valor' => 10, 'foto' => 'imagens/produto5.jpg', 'descricao' => 'Lavagem geral da casa', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'CAMISA POLO ROYAL', 'valor' => 10, 'foto' => 'imagens/produto6.webp', 'descricao' => 'Lavagem geral da casa', 'categoria_id' => $cat->id]);
        $prod->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
