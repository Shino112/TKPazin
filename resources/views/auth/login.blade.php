@extends('layouts.app')
@section('title', 'TK Pazin CMS | Prijava')
@section('content')
    <div class="login-box">
    <div class="login-logo">
        <a href="/"><b>Admin </b>Teniski klub Pazin</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Prijavi se da pokreneš svoju sesiju</p>
        <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="fa fa-envelope form-control-feedback"></span>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="fa fa-lock form-control-feedback"></span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                <input type="checkbox" name="remember"> Zapamti me
                </label>
            </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Prijava</button>
            </div>
            <!-- /.col -->
        </div>
        </form>

        <br>
        <a href="{{ route('password.request') }}">Zaboravio sam lozinku</a><br>

    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
