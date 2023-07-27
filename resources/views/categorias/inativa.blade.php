@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
    <p class="h3">Ativa/Inativa</p><hr>
        <form action="{{ route('inativa-categoria',['id' => $categoria->id]) }}" method="POST">
        @csrf
        <p class="h4">{{ $categoria->nome }}</p>
        <<p class="h5"><?php echo $categoria->ativo=1 ? "ATIVA":"INATIVA";?></p>
        <hr>
        <input type="button" value="Cancelar" onclick="history.back()">
        <input type="Submit" value="Confirmar">

        </form>
</div>
@endsection
