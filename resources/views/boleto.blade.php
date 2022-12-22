@if ($error)
    {{ $error }}
@endif

@if ($response2)
    <div class="col-12">
        <div class="qrcode col-6 mb-3">
        <a href="{{$response2['links'][0]['href']}}" download="boleto_bancario_pagseguro"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
            Fazer Download em Pdf</a>
        </div>
        <div class="qrcode col-6 mb-3">
            <button href="#" type="button" onclick="copiarTexto2();" style="margin-bottom:2vh;margin-top:2vh;">Copiar Codigo de Barras</button>
            <textarea class="form-control" id="text_boleto" cols="6" rows="2"
                      readonly>{{$response2['payment_method']['boleto']['barcode']}}</textarea>
        </div>
    </div>
@endif
