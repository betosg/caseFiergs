@extends('layouts.auth-master')
@include('layouts.partials.navbar')
@section('content')
<div style="margin: 15px;">
<p class="h3">Cadastro Usuário</p><hr>
    <form method="post" action="{{ route('register.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!--h1 class="h3 mb-3 fw-normal">Register</h1-->
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@exemplo.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Usuário</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuário" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Senha" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="mb-3">
        <label for="">Confirmar Senha</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar Senha" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="" type="submit">Enviar</button>
        </form>
</div>
        @include('auth.partials.copy')


@endsection
