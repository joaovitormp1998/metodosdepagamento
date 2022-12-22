@if ($error)
    {{ $error }}
@endif
@if ($response)
    <div class="col-12">
        <div class="qrcode col-6 mb-3">
            <img src="{{$response['qr_codes'][0]['links'][0]['href']}}" alt="Pagamento Pix" width="50%" height="40%" align="center"
                 id="qrcode" class="qrcode" name="qrcode">
        </div>
        <div class="qrcode col-6 mb-3">
            <button href="#" type="button" onclick="copiarTexto();">Copiar Codigo</button>
            <textarea class="form-control" id="text_qrcode" cols="6" rows="5"
                      readonly>{{$response['qr_codes'][0]['text']}}</textarea>
        </div>
    </div>
@endif
