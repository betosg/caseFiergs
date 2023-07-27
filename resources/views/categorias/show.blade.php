@extends('layouts.app-master')
@section('content')
<div style="margin-top: 15px;">
<p class="h3">Categoria View</p><hr>
    <p class="h4">{{ $categoria->nome }}</p>
    <p class="h5"><?php echo $categoria->ativo=1 ? "ATIVA":"INATIVA";?></p>
    <hr>
    <input type="button" value="Voltar" onclick="history.back()">
</div>
 @endsection
