@extends('layouts.app-master')

@section('content')
<div style="margin-top:15px">
<p class="h3">Categorias</p>
<p class="h6"><a href="/categorias/cadastro/">Novo</a></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ativo/Inativo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($categoria as $categ){?>
            <tr>
                <td>{{ $categ->id }}</td>
                <td>{{ $categ->nome }}</td>
                <td>
                    <?php if ($categ->ativo){?>
                        <i class="bi bi-lightbulb-fill"></i>
                    <?php }else{?>
                        <i alt="Inativa" class="bi bi-lightbulb"></i>
                    <?php }?>
                </td>
                <td>
                    <a href="/categorias/show/{{ $categ->id }}"><i class="bi bi-binoculars"></i></a>
                    <a href="/categorias/edit/{{ $categ->id }}"><i class="bi bi-pencil"></i></a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
@endsection
