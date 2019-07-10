@extends('main')

@section('content-main')

<h2>Adicionar Sale</h2>
<hr />

<form method="post" action="{{url('/sales/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="description">Descrição</label>
        <input value="{{old('descrição')}}" id="description" class="form-control" name="descrição" type="text">

        @error('Descrição')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="unity">Unidade</label>
        <input value="{{old('peso')}}" id="unity" class="form-control" name="unidade" type="text">
        @error('Unidade')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="pride">Preço</label>
        <input id="pride" class="form-control" rows="3" name="pride">{{old('preço')}}
        @error('pride')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
            <label for="amount">Quantidade</label>
            <input id="amount" class="form-control" rows="3" name="amount">{{old('Quantidade')}}

        @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Cadastrar</button>

</form>

@endsection
