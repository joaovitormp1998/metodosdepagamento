@extends('layout')
<head>

    <style>

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        .jp-card-front, .jp-card-back {
            width: 200% !important;
            height: 200% !important;
            margin-bottom: 300px;
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

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }


        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
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
</head>
@section('pgto')
<div style="margin-top: 5.5%;">
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h3>Dados do Produto</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="ins_nome_evento" class="form-label">Nome do Produto:</label>
                            <input type="text" class="form-control" id="ins_nome_evento" name="ins_nome_evento">
                        </div>
                        <div class="col-sm-6">
                            <label for="eve_valor_taxa" class="form-label">Valor do Produto:(Padrão americano)</label>
                            <input type="text" class="form-control" id="eve_valor_taxa" name="eve_valor_taxa">
                        </div>
                    </div>
                    <br><br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="ins_dt_nascimento" class="form-label">Nascimento Comprador:</label>
                            <input type="date" class="form-control" id="ins_dt_nascimento" name="ins_dt_nascimento">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_nome_aluno" class="form-label">Nome Comprador:</label>
                            <input type="text" class="form-control" id="ins_nome_aluno" name="ins_nome_aluno">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_telefone" class="form-label">Tel Comprador:</label>
                            <input type="text" class="form-control" id="ins_telefone" name="ins_telefone">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_email_comprador" class="form-label">Email Comprador:</label>
                            <input type="text" class="form-control" id="ins_email_comprador" name="ins_email_comprador">
                        </div>
                    </div>
                    <br><br>


                    <div class="row">
                        <div class="col-sm-3">
                            <label for="ins_endereco_cep" class="form-label">CEP Comprador:</label>
                            <input type="text" class="form-control" id="ins_endereco_cep" name="ins_endereco_cep">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_endereco_rua" class="form-label">Rua Comprador:</label>
                            <input type="text" class="form-control" id="ins_endereco_rua" name="ins_endereco_rua">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_endereco_numero" class="form-label">Número Comprador:</label>
                            <input type="text" class="form-control" id="ins_endereco_numero" name="ins_endereco_numero">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_endereco_complemento" class="form-label">Complemento Comprador:</label>
                            <input type="text" class="form-control" id="ins_endereco_complemento"
                                   name="ins_endereco_complemento">
                        </div>
                    </div>
                    <br><br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="ins_endereco_bairro" class="form-label">Bairro Comprador:</label>
                            <input type="text" class="form-control" id="ins_endereco_bairro" name="ins_endereco_bairro">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_endereco_cidade" class="form-label">Cidade Comprador:</label>
                            <input type="text" class="form-control" id="ins_endereco_cidade" name="ins_endereco_cidade">
                        </div>
                        <div class="col-sm-3">
                            <label for="ins_endereco_uf" class="form-label">UF Comprador:(Precisa ser
                                maiúsculo(SIGLA))</label>
                            <input type="text" class="form-control" id="ins_endereco_uf" name="ins_endereco_uf">
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
                            <input type="text" class="form-control" id="ins_referencia" name="ins_referencia">
                        </div>
                    </div>
                    <br><br>


                    <div style="display:block" id="dados_cartao">

                        <div class="card">
                            <div class="card-body">
                                <h3>Dados de Pagamento</h3>
                                <ul class="nav nav-tabs nav-primary" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#cartao_credito"
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
                                    <li OnClick="getHashDebito()" class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#cartao_debito" role="tab"
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
                                    <li OnClick="getHashBoleto()" class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#boleto_bancario" role="tab"
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
                                        <a class="nav-link" data-bs-toggle="tab" href="#pagamento_pix" role="tab"
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
                                    <div class="tab-pane fade show active" id="cartao_credito" role="tabpanel">
                                        <div class="row g-3">
                                            <h3>Cartão de Crédito</h3><br>
                                            <div style="margin-bottom: 30px;" class='card-wrapper'></div>

                                            <h3 style="font-size: 15px" class="fs-subtitle">Dados do Cartão (<a
                                                    style="font-size: 10px;" href="javascript:void(0)"
                                                    onClick="carregar_dados_cartao()">O cartão é meu!</a>)</h3>

                                            <div class="row col-md-12" style="display:True;margin-top: 5vh;"
                                                 id="dados_cartao_inputs">
                                                <!--<form id="Form1" name="Form1" method="post" action="api-pagseguro/ControllerPedido.php">-->
                                                <form style="width: 100%;" id="msform" id="msform" role="form"
                                                      method="POST" action="">
                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-sm-6">
                                                            <label for="NumeroCartao" class="form-label">Número do
                                                                cartão:</label>
                                                            <input type="text"
                                                                   class="form-control NumeroCartao-inputmask"
                                                                   id="NumeroCartao" name="NumeroCartao">
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
                                                                   type="number" id="cvc" name="cvc"
                                                                   placeholder="Ex. 123">
                                                        </div>
                                                    </div>

                                                    <div class="row" style="margin-top: 20px;">
                                                        <div class="col-sm-4">
                                                            <label class="form-label" style="">CPF do
                                                                <b>titular</b>:</label>
                                                            <input class="form-control CPFTitularCartao-inputmask"
                                                                   type="text" id="CPFTitularCartao"
                                                                   name="CPFTitularCartao" onblur="ValidarCPF2()">
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
                                                            <select class="form-control" style="margin-bottom: 30px;"
                                                                    name="QtdParcelas" id="QtdParcelas">
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


                                                    <!--<label style="float: left; font-size:12px;margin-top: 30px">Token do Cartão:</label>-->
                                                    <input type="hidden" id="TokenCard" name="TokenCard">

                                                    <!--<label style="float: left; font-size:12px;margin-top: 30px">Bandeira Cartao:</label>-->
                                                    <input type="hidden" id="BadeiraCartao" name="BadeiraCartao">


                                                    <!--<label style="float: left; font-size:12px;;margin-top: 30px">Hash do Cartão:</label>-->
                                                    <input type="hidden" id="HashCard" name="HashCard">

                                                    <input type="hidden" id="HashBoleto" name="HashBoleto">

                                                    <input type="hidden" id="HashDebito" name="HashDebito">

                                                    <!--<label style="float: left; font-size:12px;;margin-top: 30px">Valor Parcelas:</label>-->
                                                    <input type="hidden" id="ValorParcelas" name="ValorParcelas">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <center><input
                                                                    style="margin-top: 20px;margin-bottom: 50px;/*width:50%*/"
                                                                    class="w-100 btn btn-primary btn-lg" type="button"
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
                                                        <img OnClick="finalizarcompraDebitoOnline('bancodobrasil')"
                                                             style="width: 64px;margin-left: 0px;cursor: pointer;"
                                                             src="images/bancodobrasil.png" alt="Girl in a jacket"
                                                             width="" height="">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img OnClick="finalizarcompraDebitoOnline('itau')"
                                                             style="width: 64px;margin-left: 0px;cursor: pointer;"
                                                             src="images/itau.png" alt="Girl in a jacket" width=""
                                                             height="">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img OnClick="finalizarcompraDebitoOnline('bradesco')"
                                                             style="width: 64px;margin-left: 0px;cursor: pointer;"
                                                             src="images/bradesco.png" alt="Girl in a jacket" width=""
                                                             height="">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img OnClick="finalizarcompraDebitoOnline('banrisul')"
                                                             style="width: 64px;margin-left: 0px;cursor: pointer;"
                                                             src="images/banrisul.png" alt="Girl in a jacket" width=""
                                                             height="">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <img OnClick="finalizarcompraDebitoOnline('hsbc')"
                                                             style="width: 64px;margin-left: 0px;cursor: pointer;"
                                                             src="images/hsbc.png" alt="Girl in a jacket" width=""
                                                             height="">
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
                                            <img OnClick="finalizarcompraBoletoBancario()"
                                                 style="width: 30%;margin-left: 0px;cursor: pointer;"
                                                 src="images/boleto.png" alt="Girl in a jacket" width=""
                                                 height=""><br><br>
                                            <p>Gere aqui seu boleto de pagamento.</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade show" id="pagamento_pix" role="tabpanel">
                                        <div class="row g-3">
                                            <h3>Pagamento PIX</h3> (Para gerar o QRCODE são necessários apenas os campos
                                            "Nome do Produto:","Valor do Produto:","Nome Comprador:","CPF do
                                            Comprador:")
                                            <center>
                                                <p id="aguardando_pagamento" style="display:none"><b>Aguardando
                                                        Pagamento</b> <img src="http://i.imgur.com/SpJvla7.gif" alt=""
                                                                           width="" height=""></p>
                                            </center>
                                            <center>
                                                <p id="aguardando_pagamento_recebido" style="display:none;color:green">
                                                    <b>Pagamento Recebido</b> <img src="images/check-circle.gif" alt=""
                                                                                   width="40" height="40"></p>
                                            </center>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div id="QrCode_png"></div>
                                                    <br>
                                                    <div id="QrCode_link"></div>
                                                    <center><input type="button" id="clipboardCopy"
                                                                   style="display:none;margin-top: 20px;margin-bottom: 50px;/*width:20%*/"
                                                                   value="Copiar QrCode"></center>
                                                    <input type="hidden" id="Gerar_QrCode_input"
                                                           name="Gerar_QrCode_input" value="">
                                                    <center><input OnClick="gerar_qrcode_pix()"
                                                                   style="margin-top: 20px;margin-bottom: 50px;/*width:20%*/"
                                                                   type="button" id="Gerar_QrCode" name="Gerar_QrCode"
                                                                   value="Gerar QrCode"></center>
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
            numberInput: 'input#NumeroCartao', // Form Opcional Aqui se põe o input do numero do cartao
            expiryInput: 'input#ValidadeCartao',
            cvcInput: 'input#cvc',
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
