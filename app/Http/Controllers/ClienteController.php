<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Services\ClienteService;

class ClienteController extends Controller
{
    public function cadastrar(Request $request)
    {
        $data = [];
        return view("cadastrar", $data);
    }

    public function cadastrarCliente(Request $request)
    {
        // Serve para catar todos os dados do form request economiza linhas de codigo
        $values = $request->all();
        $usuario = new Usuario();

        $usuario->fill($values);
        $usuario->login = $request->input("cpf", "");

        $senha = $request->input("password", "");
        $usuario->password = \Hash::make($senha); //Técnica de Criptografia Utilizando make Hash do Laravel

        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input("endereco", "");

        $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($usuario, $endereco);
        $message = $result['message'];
        $status = $result['status'];

        //dd($result);
        $request->session()->flash($status,$message);

        return redirect()->route('cadastrar');
    }

}
