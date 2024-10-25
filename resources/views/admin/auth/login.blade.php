@extends('admin.layouts.auth_layout')

@section('content')

<div class="login-box">
    <!-- /.login-logo -->
    {{-- {{ asset('assets/img/logo.png') }} --}}
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="{{ url('/home') }}" class="h1"><b>Intelli</b>Vectra</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="post" action="{{ url('/login') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                    class="form-control @error('email') is-invalid @enderror">
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                </div>
                @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group mb-3">
                <input type="password" name="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                @enderror

            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>

                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>

            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('request-password-view') }}">I forgot my password</a>
        </p>
        <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

@endsection
