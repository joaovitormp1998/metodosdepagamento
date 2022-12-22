<form action="{{route('cadastrar_cliente')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                Nome do Cliente
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Email
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Cpf
                <input type="text" class="form-control" id="cpf" name="cpf"
                       onkeypress="$(this).mask('000.000.000-00');">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Senha
                <input type="password" class="form-control" id="passsword" name="password">
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">Endereço:
                <input type="text" class="form-control" id=endereco" name="endereco">
            </div>
        </div>

        <div class="col-1">
            <div class="form-group">Número:
                <input type="text" class="form-control" id=numero" name="numero">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">Complemento:
                <input type="text" class="form-control" id=complemento" name="complemento">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">Cidade:
                <input type="text" class="form-control" id="cidade" name="cidade">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="password" class="form-label">Cep:</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00.000-000')" name="cep" id="cep">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">Estado:
                <input type="text" class="form-control" id="estado" name="estado">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">
            </div>
        </div>
    </div>
</form>
