
@extends('main')

@section('content-main')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2 align="center"> Tabela de produtos</h2>

    <table class="table table-striped table-dark">
        <tr>
                <th scope="col">ID prod.</th>
                <th scope="col">Produto</th>
                <th scope="col">Unidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th>Opções</th>
                <th><a href="{{url('/form-adicionar')}}" class="btn btn-primary float-right mb-2">
                    Adicionar</a></th>
              </tr>
            </thead>

</table>
@forelse ($product as $sales)
        <tr>
            <td> {{$products->id}} </td>
            <td> {{$products->descrition}} </td>
            <td> {{$products->unity}} </td>
            <td> {{$products->price}} </td>
            <td> {{$products->amount}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/sale/editar/' . $product->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/sale/excluir/' . $product->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Não há produtos cadastrados.</td>
        </tr>
    @endforelse
@endsection
