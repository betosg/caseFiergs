@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
<p class="h3">Produto Edita</p><hr>
<form action="{{ route('edita-produto',['id' => $produto->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Nome</label>
            <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Descrição</label>
            <textarea name="descricao" class="form-control">{{ $produto->descricao }}</textarea>
        </div>
        <div class="mb-3">
            <label for="">Categoria</label>
            <select name="categoria_id" class="form-control" required>
                <option value=""></option>
                <?php foreach($categorias as $categoria){?>
                    <option value="{{ $categoria->id }}" <?php echo $categoria->id==$produto->categoria_id?'SELECTED':"";?>>{{ $categoria->nome }}</option>
                <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Custo</label>
            <input type="text" name="custo" value="{{ $produto->custo }}" class="form-control" required>
            </div>
        <div class="mb-3">
            <label for="">Preço</label>
            <input type="text" name="preco" value="{{ $produto->preco }}" class="form-control" required>
            </div>
        <div class="mb-3">
            <label for="">Quantidade</label>
            <input type="text" name="quantidade" value="{{ $produto->quantidade }}" class="form-control" required>
        </div>
        <hr>
        <div class="mb-3">
            <input type="submit" value="Salvar" >
            <input type="button" value="Cancelar" onclick="history.back()">
        </div>
        </form>
</div>
@endsection
