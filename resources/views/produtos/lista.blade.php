@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
<p class="h3">Produtos</p>
<p class="h6"><a href="/produtos/cadastro/">Novo</a></p>
<hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preco</th>
                <th scope="col">Custo</th>
                <th scope="col">Quantidade</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($produto as $prod){?>
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nome }}</td>
                <td>{{ $prod->nome_categoria }}</td>
                <td>{{ $prod->preco }}</td>
                <td>{{ $prod->custo }}</td>
                <td>{{ $prod->quantidade }}</td>
                <td>
                    <a href="/produtos/show/{{ $prod->id }}"><i class="bi bi-binoculars"></i></a>
                    <a href="/produtos/edit/{{ $prod->id }}"><i class="bi bi-pencil"></i></a>
                    <a href="/produtos/delete/{{ $prod->id }}"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
@endsection
