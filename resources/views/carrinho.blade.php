@extends("layout")
@section("title")
    <title>Carrinho</title>
@endsection
@section("conteudo")
    @if(isset($cart) && count($cart) > 0)
        @include('carrinho-body')
    @else
        <div>Nenhum Item no Carrinho</div>
    @endif
@endsection
