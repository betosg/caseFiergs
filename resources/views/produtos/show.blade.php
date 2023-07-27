@extends('layouts.app-master')
@section('content')

<div style="margin-top: 15px;">
<p class="h3">Produto View</p><hr>
    <p class="h1">{{ $produto->nome }}</p>
    <p class="h4">{{ $produto->descricao }}</p>
    <p class="h6">Custo: <b>{{ $produto->custo }}</b>  Preço: <b>{{ $produto->preco }}</b></p>
    <p class="h6">Quantidade: <b>{{ $produto->quantidade }}</b></p>
    <hr>
    <input type="button" value="Voltar" onclick="history.back()">
</div>
@endsection
