@extends('layouts.auth-master')

@section('content')
<div style="margin: 15px;">
<p class="h3">Login</p><hr>
    <form method="post" action="{{ route('login.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />


        @include('layouts.partials.messages')

        <!--div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>

        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>

        </div-->

        <div class="mb-3">
            <label for="">Nome</label>
            <input type="text" name="username" value="{{ old('username') }}" class="form-control" required>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for="">Senha</label>
            <input type="password" name="password" value="{{ old('password') }}" class="form-control" required>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button type="submit">Login</button>

        @include('auth.partials.copy')
    </form>
</div>
@endsection
