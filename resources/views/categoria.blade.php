@extends("layout")
@section("title")
    <title>Categorias</title>
@endsection

@section("conteudo")
    <h2>Categoria</h2>
    <div class="col-12 mb-2">
        <select class="form-select form-select-lg" aria-label=".form-select-sm example" style="text-align: center;"
                id="selecionar" name="selecionar" onclick="clickedselec()">
            @if(isset($listaCategoria) && count($listaCategoria) > 0)
                <option selected><a href="{{ route('categoria') }}"
                                    class="list-group-item list-group-item-secondary list-group-item-action @if(0 == $idcategoria) active @endif">Todas</a>
                </option>
                @foreach($listaCategoria as $cat)
                    <option style="text-align: center;"><a
                            href="{{ route('categoria_por_id', ['idcategoria' => $cat->id]) }}"
                            class="list-group-item list-group-item-secondary list-group-item-action  @if($cat->id == $idcategoria) active @endif">{{ $cat->categoria }}</a>
                    </option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="col-12">
        @include("_produtos",['lista'=> $lista])
    </div>
@endsection
@section("scriptjs")
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let url_atual = window.location.href.toString();
        //alert(url_atual);
        var selectItem = $('.form-select');
        switch (url_atual) {
            case 'http://localhost:8088/1/categoria':
                selectItem.val('Geral');
                break
            case 'http://localhost:8088/2/categoria':
                selectItem.val('Limpeza');
                break
            case 'http://localhost:8088/3/categoria':
                selectItem.val('Informática');
                break
            case 'http://localhost:8088/4/categoria':
                selectItem.val('Vestuario');
                break
            default:
                console.log(selectItem.val());
                break
        }
        function clickedselec() {
            switch (selectItem.val()) {
                case 'Todas':
                    window.location.replace('http://localhost:8088/categoria');
                    break;
                case 'Geral':
                    window.location.replace('/1/categoria');
                    break;
                case 'Limpeza':
                    window.location.replace('/2/categoria');
                    break;
                case 'Informática':
                    window.location.replace('/3/categoria');
                    break;
                case 'Vestuario':
                    window.location.replace('/4/categoria');
                    break;
                default:
                    break;
                //window.location.replace('/4/categoria');
            }
        }
    </script>
@endsection
