@extends("layout")
@section("title")
    <title>Cadastrar</title>
@endsection
@section('conteudo')
    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>
    </div>
@include("form_cadastrar")
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@endsection
