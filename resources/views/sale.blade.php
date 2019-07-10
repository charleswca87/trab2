
@extends('main')

@section('content-main')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2 align="center"> Tabela de produtos</h2>
<a href="{{url('initial_page/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a></th>

    <table class="table table-striped table-dark">
        <tr>
                <th scope="col">ID prod.</th>
                <th scope="col">Produto</th>
                <th scope="col">Unidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th>Opções</th>
            </thead>


@forelse ($product as $sales)
        <tr>
            <td> {{$sales->id}} </td>
            <td> {{$sales->description}} </td>
            <td> {{$sales->unity}} </td>
            <td> {{$sales->price}} </td>
            <td> {{$sales->amount}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/sales/editar/' . $sales->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/sales/excluir/' . $sales->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Não há produtos cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
