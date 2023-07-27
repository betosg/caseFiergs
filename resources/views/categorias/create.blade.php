@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
<p class="h3">Cadastro Categoria</p><hr>
        <form action="{{ route('registra-categoria') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="">Nome</label><br>
            <input type="text" name="nome" value="" class="form-control"></br>
            <label for="">Ativo/Inativo</label><br>
            <select name="ativo" class="form-control">
                <option value="1">Ativo</option>
                <option value="0">inativo</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="Salvar" >
            <input type="button" value="Cancelar" onclick="history.back()">
        </div>
        </form>
</div>
@endsection

