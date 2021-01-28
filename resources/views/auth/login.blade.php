@extends('layouts.argon.auth')

@section('title', 'Login')

@section('content')

<form class="user" method="POST" id="loginForm" action="{{ route('login') }}">
    @csrf
     <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
      </div> 
    
        <div class="form-group">
          <input form="loginForm" id="email" type="email" placeholder="Email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <input form="loginForm" id="password" type="password"placeholder="Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox small">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
          </div>
        </div>
        <button form="loginForm" type="submit" class="btn btn-primary btn-user btn-block" onclick="this.form.submit(); this.disabled = true;">Login</button>
        <hr>
        {{-- <a href="login/google" class="btn btn-google btn-user btn-block">
          <i class="fab fa-google fa-fw"></i> Login with Google
        </a> 
         <a href="login/facebook" class="btn btn-facebook btn-user btn-block">
          <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
        </a> --}}
      </form>
      {{-- <hr> --}}
      <div class="text-center">
        @if (Route::has('password.request'))
            <a class="small btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        @endif
        
      </div>
      {{-- <div class="text-center">
        <a class="small" href="/register">Create an Account!</a>
      </div> --}}
@endsection

@section('scripts')
  
@endsection



