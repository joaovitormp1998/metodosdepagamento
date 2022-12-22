<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Services\VendaService;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use PagSeguro\Configuration\Configure;

class ProdutoController extends Controller
{  /*
     Aqui e onde é setado toda a parte de configuração da api pagseguro que vem .env
     a partir daqui se não ocorreu nenhum erro no construtor tenho acesso as credencias da api
  */
    private $_configs;

    public function __construct()
    {
        $this->_configs = new Configure();
        $this->_configs->setCharset("UTF-8");
        $this->_configs->setAccountCredentials(env('PAGSEGURO_EMAIL'), env('PAGSEGURO_TOKEN'));
        $this->_configs->setEnvironment(env("PAGSEGURO_AMBIENTE"));
        $this->_configs->setLog(true, storage_path('logs/pagseguro_' . date("Ymd") . '.log'));

    }

    public function getCredential()
    {
        return $this->_configs->getAccountCredentials();
    }

    public function index(Request $request)
    {
        $data = [];
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);
    }

    public function pagamento(Request $request)
    {
        $data = [];
        return view("welcome", $data);
    }

    public function categoria(Request $request, $idcategoria = 0)
    {
        $data = [];
        $listaCategorias = Categoria::all();
        $queryProduto = Produto::limit(14);
        if ($idcategoria != 0) {
            $queryProduto->where("categoria_id", $idcategoria);
        }
        $listaProdutos = $queryProduto->get();
        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data['idcategoria'] = $idcategoria;
        return view('categoria', $data);
    }

    public function adicionarCarrinho(Request $request, $idProduto = 0)
    {
        $prod = Produto::find($idProduto);
        if ($prod) {
            $carrinho = session('cart', []);
            array_push($carrinho, $prod);
            session(['cart' => $carrinho]);
        }
        return redirect()->route('home');
    }

    public function verCarrinho(Request $request)
    {
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho];
        return view("carrinho", $data);

    }

    public function excluirCarrinho(Request $request, $indices)
    {
        $carrinho = session('cart', []);
        if (isset($carrinho[$indices])) {
            unset($carrinho[$indices]);
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');

    }

    public function finalizar(Request $request)
    {
        $prods = session('cart', []);
        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($prods);
        $message = $result['message'];
        $status = $result['status'];
        if ($status == 'ok') {
            $request->session()->forget('cart');
        }
        $request->session()->flash($status, $message);

        return redirect()->route('ver_carrinho');

    }


    public function pagar(Request $request)
    {
        $data = [];
        $carrinho = session('cart', []);
        $sessionCode = \PagSeguro\Services\Session::create(
            $this->getCredential()
        );
        $IDsession = $sessionCode->getResult();
        $data["sessionID"] = $IDsession;
        $data["cart"] = $carrinho;
        $endpoint = 'https://sandbox.api.pagseguro.com/orders';
        $endpoint2 = 'https://sandbox.api.pagseguro.com/charges';
        $token = 'F5D0AC2B4DB44E95ACF89BA2B43DDD52';
        $body =
            [
                "reference_id" => "ex-00001",
                "customer" => [
                    "name" => "Jose da Silva",
                    "email" => "email@test.com",
                    "tax_id" => "12345678909",
                    "phones" => [
                        [
                            "country" => "55",
                            "area" => "11",
                            "number" => "999999999",
                            "type" => "MOBILE"
                        ]
                    ]
                ],
                "items" => [
                    [
                        "name" => "nome do item",
                        "quantity" => 1,
                        "unit_amount" => 500
                    ]
                ],
                "qr_codes" => [
                    [
                        "amount" => [
                            "value" => 500
                        ],
                        "expiration_date" => "2023-01-29T20:15:59-03:00",
                    ]
                ],
                "shipping" => [
                    "address" => [
                        "street" => "Avenida Brigadeiro Faria Lima",
                        "number" => "1384",
                        "complement" => "apto 12",
                        "locality" => "Pinheiros",
                        "city" => "São Paulo",
                        "region_code" => "SP",
                        "country" => "BRA",
                        "postal_code" => "01452002"
                    ]
                ],
                "notification_urls" => [
                    "https://meusite.com/notificacoes"
                ]
            ];
        $body2 =
            [
            'reference_id' => 'ex-00001',
            'description' => 'Motivo do pagamento',
            'amount' => [
                'value' => 1000,
                'currency' => 'BRL',
            ],
            'payment_method' => [
                'type' => 'BOLETO',
                'boleto' => [
                    'due_date' => '2024-12-31',
                    'instruction_lines' => [
                        'line_1' => 'Pagamento processado para DESC Fatura',
                        'line_2' => 'Via PagSeguro',
                    ],
                    'holder' => [
                        'name' => 'Jose da Silva',
                        'tax_id' => '22222222222',
                        'email' => 'jose@email.com',
                        'address' => [
                            'street' => 'Avenida Brigadeiro Faria Lima',
                            'number' => '1384',
                            'locality' => 'Pinheiros',
                            'city' => 'Sao Paulo',
                            'region' => 'Sao Paulo',
                            'region_code' => 'SP',
                            'country' => 'Brasil',
                            'postal_code' => '01452002',
                        ],
                    ],
                ],
            ],
            'notification_urls' => [
                0 => 'https://yourserver.com/nas_ecommerce/277be731-3b7c-4dac-8c4e-4c3f4a1fdc46/',
            ],
        ];
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_CAINFO, "C:\laragon\www\metodosdepagamento\public\cacert.pem");
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type:application/json',
            'Authorization: Bearer ' . $token
        ]);
        $curl2 = curl_init();
        curl_setopt($curl2, CURLOPT_URL, $endpoint2);
        curl_setopt($curl2, CURLOPT_POST, true);
        curl_setopt($curl2, CURLOPT_POSTFIELDS, json_encode($body2));
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl2, CURLOPT_CAINFO, "C:\laragon\www\metodosdepagamento\public\cacert.pem");
        curl_setopt($curl2, CURLOPT_HTTPHEADER, [
            'Content-Type:application/json',
            'Authorization: Bearer ' . $token
        ]);
        $response = curl_exec($curl);
        $error = curl_error($curl);
        $response2 = curl_exec($curl2);
        $error2 = curl_error($curl2);

        curl_close($curl);
        $data["response"] = json_decode($response, true);
        $data["error"] = $error;
        $data["response2"] = json_decode($response2, true);
        $data["error2"] = $error2;


        return view("pagar", $data);
    }
}
