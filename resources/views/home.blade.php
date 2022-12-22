@extends("layout")
@section("title")
    <title>Home </title>
@endsection
@section("conteudo")
    @include("_produtos",['lista' => $lista])
@endsection
