<style>
    .jp-card-front, .jp-card-back {
        width: 200% !important;
        height: 200% !important;
        margin-bottom: 300px;
    }

    .w-100:hover {
        background: green;
    }

    a {
        background-color: transparent
    }

    .jp-card .jp-card-back, .jp-card .jp-card-front {
        margin: auto;
        /* -webkit-backface-visibility: hidden; */
        backface-visibility: hidden;
        /* -webkit-transform-style: preserve-3d; */
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transition: all 400ms linear;
        -moz-transition: all 400ms linear;
        transition: all 400ms linear;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        border-radius: 35px !important;
        background: #143F6E !important;
    }

    @media (max-width: 640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .jp-card-back {
            background-position: center;
        }

        .jp-card-front, .jp-card-back {
            width: 109% !important;
            height: 118% !important;
            margin-bottom: 300px;
        }
        .qrcode{
            width: 100%!important;
            height: 100%!important;
        }
        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width: 768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width: 1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity))
        }

        .dark\:bg-gray-900 {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity))
        }

        .dark\:border-gray-700 {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity))
        }

        .dark\:text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .dark\:text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }
    }

    .topbar {
        background: #143F6E;
        height: 100px;
        border-bottom: 4px solid #f0f0f0;
        z-index: 10;
        text-align: center;
        width: 100%;
    }

    .page-footer {
        background: #143F6E;
        position: inherit;
        border-top: 4px solid #e4e4e4;
        z-index: 3;
        padding: 1%;
    }

    .topbar-logo-header {
        border-right: 1px solid #143F6E;
    }

    .topbar .navbar {
        width: 100%;
        height: 60px;
        padding-left: 1px;
        padding-right: 30px;
    }

    .page-content {
        padding: 3.0rem;
    }

    .bg-warning {
        background-color: #fff !important;
    }

    .text-white {
        color: #42413f !important;
    }

    .border-primary {
        border-color: #eee !important;
    }

    .sw-theme-arrows {
        border: 1px solid #fff;
    }

    .sw-theme-arrows > .nav {
        overflow: hidden;
        border-bottom: 1px solid #fff;
    }

    .page-content {
        padding: 1.5rem;
    }

    .sw-theme-arrows > .tab-content > .tab-pane {
        padding: 10px;
        width: 100% !important;
    }

    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
        margin-right: 10px;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

    .fs-title {
        font-size: 18px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: -10px;
        letter-spacing: 2px;
        font-weight: bold;
        margin-top: 0px;
    }

    #blanket,
    #aguarde,
    .extrato {
        position: fixed;
        display: none;
    }

    #blanket,
    #aguarde_pagamento,
    .extrato {
        position: fixed;
        display: none;
    }

    #blanket,
    #aguarde_boleto,
    .extrato {
        position: fixed;
        display: none;
    }

    #blanket,
    #aguarde_banco,
    .extrato {
        position: fixed;
        display: none;
    }

    #blanket,
    #aguarde_codigo_pix,
    .extrato {
        position: fixed;
        display: none;
    }

    #blanket {
        left: 0;
        top: 0;
        background-color: #f0f0f0;
        filter: alpha(opacity=30);
        height: 100%;
        width: 100%;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
        opacity: 0.80;
        z-index: 9998;
    }


    /*TELA CELULAR*/
    @media screen and (max-width: 600px) {

        #aguarde,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 20%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_pagamento,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 16%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_banco,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 13%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_boleto,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 10%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_codigo_pix,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 14%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

    }

    /*TELA DESKTOP*/
    @media screen and (min-width: 900px) {

        #aguarde,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 42%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_pagamento,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 38%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_banco,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 38%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_boleto,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 38%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }

        #aguarde_codigo_pix,
        .extrato {
            width: auto;
            height: 30px;
            top: 50%;
            left: 42%;
            background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
        / / o gif que desejar, eu geralmente uso um 20 x20 line-height: 30 px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            z-index: 9999;
            padding-left: 27px;
        }
    }

    .CartaoCredito,
    .Debito,
    .Boleto {
        float: left;
        width: 100%;
        margin: 15px 1.5%;
        border-radius: 10px;
        border: 1px solid #999;
        font-size: 10px;
        font-weight: bold;
    }

    .jp-card {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: xx-large;
        line-height: 1;
        position: relative;
        width: 100%;
        height: 100%;
        min-width: 100% !important;
    }

    .swal2-title {
        font-size: 1.55em !important;
    }

    #circulo {
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background-color: red;
        float: right;
        margin-left: 5px;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
        integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function copiarTexto() {
        let textoCopiado = document.getElementById("text_qrcode");
        textoCopiado.select();
        textoCopiado.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function copiarTexto2() {
        let textoCopiado2 = document.getElementById("text_boleto");
        textoCopiado2.select();
        textoCopiado2.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("O texto é: " + textoCopiado2.value);
    }
</script>
<div class="card">
    <div class="card-body">
        <h3>Dados de Pagamento</h3>
        <ul class="nav nav-tabs nav-primary" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#cartao_credito"
                   href="#cartao_credito"
                   role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="lni lni-credit-cards css-1gu8igg"><img
                                    src="https://cdn-icons-png.flaticon.com/512/2/2244.png"
                                    width="17" height="17"></i>
                        </div>
                        <div class="tab-title">&nbsp;Cartão de Crédito</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#cartao_debito" href="#cartao_debito"
                   role="tab"
                   aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="lni lni-credit-cards css-1gu8igg"><img
                                    src="https://cdn-icons-png.flaticon.com/512/60/60378.png?w=360"
                                    width="17" height="17"></i>
                        </div>
                        <div class="tab-title">&nbsp;Cartão de Débito</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#boleto_bancario" href="#boleto_bancario"
                   role="tab"
                   aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="lni lni-trello css-1gu8igg">
                                <img
                                    src="https://img.freepik.com/free-vector/bar-code-magnifier-realistic-illustration_1284-26570.jpg?w=826&t=st=1670244511~exp=1670245111~hmac=d51e23827c8622948e9ef769f21a9566bfc91152bd0b12cbce05c14fe3e5e5c5"
                                    width="30" height="30">
                            </i>
                        </div>
                        <div class="tab-title">&nbsp;Boleto Bancário</div>
                    </div>
                </a>
            </li>
            <li OnClick="" class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#pagamento_pix" href="#pagamento_pix"
                   role="tab"
                   aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><img
                                src="https://devtools.com.br/img/pix/logo-pix-png-icone-520x520.png"
                                width="17" height="17"></i>
                        </div>
                        <div class="tab-title">&nbsp;PIX</div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane active show  fade" id="cartao_credito" role="tabpanel">
                <div class="row g-3">
                    <h3>Cartão de Crédito</h3><br>
                    <div style="margin-bottom: 30px;" class='card-wrapper'></div>
                    <h3 style="font-size: 15px" class="fs-subtitle">Dados do Cartão</h3>

                    <div class="row col-md-12" style="margin-top: 5vh;"
                         id="dados_cartao_inputs">
                        <!--<form id="Form1" name="Form1" method="post" action="api-pagseguro/ControllerPedido.php">-->

                        <form style="width: 100%;" id="msform" id="msform" role="form"
                              method="POST" action="{{route('pagar')}}">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-sm-6">
                                    <input type="text" name="hashseller" id="hashseller" class="hashseller">
                                    <input type="text" name="bandeira" id="bandeira" class="bandeira">
                                    <label for="ncredito" class="form-label">Número do
                                        cartão:</label>
                                    <input type="text"
                                           class="ncredito form-control"
                                           id="ncredito" name="ncredito">
                                </div>
                                <div class="col-sm-2" style="display:none">
                                    <label for="BandeiraCartao"
                                           class="form-label">Bandeira:</label><br>
                                    <button class="submit-lente" type="button">
                                        <div style="margin-bottom: 30px;"
                                             class="BandeiraCartao"></div>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nome" class="form-label">Nome do titular do
                                        cartão:</label>
                                    <input type="text" class="form-control" id="nome"
                                           name="nome" maxlength="28">
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-sm-6">
                                    <label class="form-label" style="">Validade:</label>
                                    <input class="form-control ValidadeCartao-inputmask"
                                           type="text" id="ValidadeCartao" name="ValidadeCartao"
                                           placeholder="Ex. 12/2030">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" style="">Cod. Segurança:</label>
                                    <input class="form-control /*CodSegCartao-inputmask*/"
                                           type="number" id="ncvc" name="ncvc"
                                           placeholder="Ex. 123">
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-sm-4">
                                    <label class="form-label" style="">CPF do
                                        <b>titular</b>:</label>
                                    <input class="form-control CPFTitularCartao-inputmask"
                                           type="text" id="CPFTitularCartao"
                                           name="CPFTitularCartao">
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label" style="">Telefone do
                                        <b>Titular</b>:</label>
                                    <input class="form-control TelefoneTitularCartao-inputmask"
                                           type="text" id="TelefoneTitularCartao"
                                           name="TelefoneTitularCartao" placeholder="">
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label" style="">Data de
                                        nascimento:</label>
                                    <input class="form-control" type="date"
                                           id="NascimentoTitularCartao"
                                           name="NascimentoTitularCartao"
                                           placeholder="Ex. 20/05/1980">
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <h3 style="font-size: 15px" class="fs-subtitle">
                                    Parcelamento</h3>
                                <div class="col-sm-12">
                                    <label class="form-label" style="">Pague em até 12x:</label>
                                    <select class="nparcela form-control" style="margin-bottom: 30px;"
                                            name="nparcela" id="nparcela">
                                        <option value="1">1X</option>
                                        <option value="2">2X</option>
                                        <option value="3">3X</option>
                                        <option value="4">4X</option>
                                        <option value="5">5X</option>
                                        <option value="6">6X</option>
                                        <option value="7">7X</option>
                                        <option value="8">8X</option>
                                        <option value="9">9X</option>
                                        <option value="10">10X</option>
                                        <option value="11">11X</option>
                                        <option value="12">12X</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Subtotal a Vista:</label>
                                    <input type="text" id="totalfinal" value="{{ $total }}" name="totalfinal"
                                           class="totalfinal form-control">

                                </div>
                                <div class="col-sm-4">
                                    <label>Valor das Parcelas:</label>
                                    <input type="text" id="totalparcela" name="totalparcela"
                                           class="totalparcela form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label>Total a Pagar:</label>
                                    <input type="text" id="totalapagar" name="totalapagar"
                                           class="totalapagar form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <center><input
                                            style="margin-top: 20px;margin-bottom: 50px; width: 100%;"
                                            class="w-100 btn btn-outline-secondary" type="submit"
                                            id="BotaoComprar" name="BotaoComprar"
                                            value="Finalizar Pagamento"></center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="cartao_debito" role="tabpanel">
                <div class="row g-3">
                    <h3>Débito Online</h3>
                    <div class="row">
                        <div style="margin-bottom:25px" class="row col-sm-12">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>
                        <center>
                            <p>Escolha acima seu banco para pagamento.</p>
                        </center>
                        <center>
                            <p><b>*Pagamentos em débito, verificar o módulo de segurança e a
                                    autorização do dispositivo!</b></p>
                        </center>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="boleto_bancario" role="tabpanel">
                <div class="row g-3">
                    <h3>Boleto Bancário</h3>
                    @include('boleto')

                </div>
            </div>

            <div class="tab-pane fade show" id="pagamento_pix" role="tabpanel">
                <div class="row g-3">
                    <h3>Pagamento PIX <img src="https://devtools.com.br/img/pix/logo-pix-png-icone-520x520.png"
                                           width="26" height="26"></h3> (Para gerar o QRCODE são necessários apenas os
                    campos
                    "Nome do Produto:","Valor do Produto:","Nome Comprador:","CPF do
                    Comprador:")
                    <center>
                        <p id="aguardando_pagamento" style="display:none"><b>Aguardando
                                Pagamento</b> <img src="http://i.imgur.com/SpJvla7.gif" alt=""
                                                   width="" height=""></p>
                    </center>
                    <center>
                        <p id="aguardando_pagamento_recebido" style="display:none;color:green">
                            <b>Pagamento Recebido</b></p>
                    </center>
                    <div class="row" style="display: block">
                        <div class="col-sm-12">
                            <div id="QrCode_png"></div>
                            <br>
                            <div id="QrCode_link"></div>
                            <center><input type="button" id="clipboardCopy"
                                           style="display:none;margin-top: 20px;margin-bottom: 50px;/*width:20%*/"
                                           value="Copiar QrCode"></center>
                            <input type="hidden" id="Gerar_QrCode_input"
                                   name="Gerar_QrCode_input" value="">
                            <center> @include('qrcode')</center>
                        </div>
                    </div>
                    <br><br>
                    <center>
                        <p>Leia o QrCode com o aplicativo do seu banco e realize o pagamento, ou
                            copie o código PIX e cole no item "Pix Copia e Cola", no aplicativo
                            do seu banco.</p>
                    </center>
                </div>
            </div>

        </div>

    </div>
</div>
