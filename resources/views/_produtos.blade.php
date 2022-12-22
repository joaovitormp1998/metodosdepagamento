@if(isset($lista))
<div class="row">
    @foreach($lista as $prod)
    <div class="col-6 mb-3">
        <div class="card">
            <img src="{{ asset($prod->foto) }}" class="card-img-top">
            <div class="card-body">
                <h6>{{$prod->nome}} - Valor R$ {{$prod->valor}}</h6>
                <a href="{{ route('adicionar_carrinho', ['idproduto' => $prod->id]) }}" class="btn  btn-outline-secondary"> Adicionar Item ao Carrinho </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif