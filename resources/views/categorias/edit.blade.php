@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
<p class="h3">Categoria Edita</p><hr>
        <form action="{{ route('edita-categoria',['id' => $categoria->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Nome</label><br>
            <input type="text" name="nome" value="{{ $categoria->nome }}"></br>
        </div>
        <div class="mb-3">
            <label for="">Ativo</label><br>
            <select name="ativo">
                <option value="1" <?php echo $categoria->ativo==1 ? "SELECTED":"";?>>Ativo</option>
                <option value="0" <?php echo $categoria->ativo==0 ? "SELECTED":"";?>>Inativo</option>
            </select>
        </div>
        <hr>
        <div class="mb-3">
            <input type="submit" value="Salvar" >
            <input type="button" value="Cancelar" onclick="history.back()">
        </div>
        </form>
</div>
@endsection
