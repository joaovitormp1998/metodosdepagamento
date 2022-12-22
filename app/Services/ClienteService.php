<?php


namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Endereco;
use Log;

class ClienteService extends Controller
{


    public function salvarUsuario(Usuario $usuario, Endereco $endereco)
    {
        try {
            \DB::beginTransaction(); //Iniciar uma transação Técnica de Banco para testar algo antes de realmente salvar
            $usuario->save();
            //throw new \Exception("Erro apos salvar o Usuario");
            $endereco->usuario_id = $usuario->id;// Relação entre tabelas
            $endereco->save();
            \DB::commit();
            return ['status' => 'ok', 'message' => 'Usuario Cadastrado com Sucesso'];
        } catch (\Exception $e) {
            \Log::error('ERROR', ['file' => 'ClienteService.salvarUsuario',
                                            'message' => $e->getMessage()]);
            \DB::rollback();
            return ['status' => 'err', 'message' => 'O Usuário não foi cadastrado'];
            // dd($e);
        }
    }
}

