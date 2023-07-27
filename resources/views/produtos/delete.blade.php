@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
    <p class="h3">Produto Delete</p><hr>
        <form action="{{ route('exclui-produto',['id' => $produto->id]) }}" method="POST">
        @csrf
        <p class="h2">{{ $produto->nome }}</p>
        <p class="h4">{{ $produto->descricao }}</p>
        <p class="h6">Custo: <b>{{ $produto->custo }}</b>  Preço: <b>{{ $produto->preco }}</b></p>
        <p class="h6">Quantidade: <b>{{ $produto->quantidade }}</b></p>
        <hr>
        <input type="button" value="Cancelar" onclick="history.back()">
        <input type="Submit" value="Confirmar">

        </form>
</div>
@endsection
