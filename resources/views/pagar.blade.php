@extends('layout')
@section("title")
    <title>
        Finalizar Pagamento
    </title>
@endsection
@section('scriptjs')

    <script type="text/javascript"
            src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function carregar() {
            PagSeguroDirectPayment.setSessionId('{{$sessionID}}')
        }

        $(function () {
            carregar();
            $(".ncredito").on("blur", function () {
                PagSeguroDirectPayment.onSenderHashReady(function (response) {
                    if (response.status == 'error') {
                        console.log(response.message);
                        return false;
                    }

                    var hash = response.senderHash; //Hash estará disponível nesta variável. })
                    $('.hashseller').val(hash);


                })

            })
            $(".nparcela").on('blur', function () {
                var bandeira = 'visa';
                var totalParcelas = $(this).val();

                PagSeguroDirectPayment.getInstallments({
                    amount: parseFloat($('.totalfinal').val()),
                    maxInstallmentNoInterest: 2,
                    brand: bandeira,
                    success: function (response) {
                        let status = response.error
                        if (status) {
                            alert("Não foi possivel encontrar parcelamento")
                            console.log(status);

                            return;
                        }
                        let indice = totalParcelas - 1;
                        let totalapagar = response.installments[bandeira][indice].totalAmount
                        let valorTotalParcela = response.installments[bandeira][indice].installmentAmount

                        $(".totalparcela").val(valorTotalParcela);
                        $(".totalapagar").val(totalapagar);

                    }
                })
            })
        })
    </script>

@endsection
@section('pgto')
    @csrf
    @php $total=0;@endphp
    @if(isset($cart) && count($cart) > 0)

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3> Itens Pedido</h3>
                        <table class="table thead-dark">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart as $indice )
                                @php $total+= $indice->valor;@endphp
                                <td>{{ $indice->nome }}</td>
                                <td>R${{ $indice->valor }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 5.5%;">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3>Dados do Produto</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="ins_nome_evento" class="form-label">Nome do Produto:</label>
                                    <input type="text" class="form-control" id="ins_nome_evento"
                                           name="ins_nome_evento">
                                </div>
                                <div class="col-sm-6">
                                    <label for="eve_valor_taxa" class="form-label">Valor do Produto:(Padrão
                                        americano)</label>
                                    <input type="text" class="form-control" id="eve_valor_taxa"
                                           name="eve_valor_taxa">
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="ins_dt_nascimento" class="form-label">Nascimento Comprador:</label>
                                    <input type="date" class="form-control" id="ins_dt_nascimento"
                                           name="ins_dt_nascimento">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_nome_aluno" class="form-label">Nome Comprador:</label>
                                    <input type="text" class="form-control" id="ins_nome_aluno"
                                           name="ins_nome_aluno">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_telefone" class="form-label">Tel Comprador:</label>
                                    <input type="text" class="form-control" id="ins_telefone" name="ins_telefone">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_email_comprador" class="form-label">Email Comprador:</label>
                                    <input type="text" class="form-control" id="ins_email_comprador"
                                           name="ins_email_comprador">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="ins_endereco_cep" class="form-label">CEP Comprador:</label>
                                    <input type="text" class="form-control" id="ins_endereco_cep"
                                           name="ins_endereco_cep">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_endereco_rua" class="form-label">Rua Comprador:</label>
                                    <input type="text" class="form-control" id="ins_endereco_rua"
                                           name="ins_endereco_rua">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_endereco_numero" class="form-label">Número Comprador:</label>
                                    <input type="text" class="form-control" id="ins_endereco_numero"
                                           name="ins_endereco_numero">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_endereco_complemento" class="form-label">Complemento
                                        Comprador:</label>
                                    <input type="text" class="form-control" id="ins_endereco_complemento"
                                           name="ins_endereco_complemento">
                                </div>
                            </div>
                            <br><br>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="ins_endereco_bairro" class="form-label">Bairro Comprador:</label>
                                    <input type="text" class="form-control" id="ins_endereco_bairro"
                                           name="ins_endereco_bairro">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_endereco_cidade" class="form-label">Cidade Comprador:</label>
                                    <input type="text" class="form-control" id="ins_endereco_cidade"
                                           name="ins_endereco_cidade">
                                </div>
                                <div class="col-sm-3">
                                    <label for="ins_endereco_uf" class="form-label">UF Comprador:(Precisa ser
                                        maiúsculo(SIGLA))</label>
                                    <input type="text" class="form-control" id="ins_endereco_uf"
                                           name="ins_endereco_uf">
                                </div>
                                <div class="col-sm-3">
                                    <label for="cpf_comprador" class="form-label">CPF do Comprador:</label>
                                    <input type="text" class="form-control" id="cpf_comprador" name="cpf_comprador">
                                </div>
                            </div>
                            <br><br>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="ins_referencia" class="form-label">Código do Produto:</label>
                                    <input type="text" class="form-control" id="ins_referencia"
                                           name="ins_referencia">
                                </div>
                            </div>
                            <br><br>


                            <div style="display:block" id="dados_cartao">

                                @include("dadospagamento")

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/card/2.5.4/card.js"></script>
        <script>
            var card = new Card({
                form: 'form',
                container: '.card-wrapper',
                formSelectors: {
                    numberInput: 'input#ncredito', // Form Opcional Aqui se põe o input do numero do cartao
                    expiryInput: 'input#ValidadeCartao',
                    cvcInput: 'input#ncvc',
                    nameInput: 'input#nome'
                },
                width: 250, // Largura padrao do cartao jquery
                formatting: true,

                messages: {
                    validDate: 'valid\ndate',
                    monthYear: 'mm/yyyy', // optional - default 'month/year'
                },

                // Default placeholders for rendered fields - optional
                placeholders: {
                    number: '0000 0000 0000 0000',
                    name: 'Nome Completo',
                    expiry: '••/••',
                    cvc: '•••'
                },
                /*
                  Descomentar caso queira que sejam aplicados uma mascara sobre os números do cartão vão ser exibidos da seguinte forma  .... .... .... 2500 apenas constando os ultimos 4 digitos
                    masks: {
                        cardNumber: '•' // optional - mask card number
                    },
                */
                // if true, will log helpful messages for setting up Card
                debug: true // optional - default false
            });
        </script>
@endsection

