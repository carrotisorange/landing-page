@extends('layouts.argon.auth')

@section('title', 'Email')

@section('content')

    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
      <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
    </div>
    @if(session('status'))
      <div class="alert alert-success" role="alert">
          {{  session('status') }}
      </div>
    @endif
     <form class="user" id="resetPasswordForm" method="POST" action="{{ route('password.email') }}">
      @csrf
  
      <div class="form-group">
             
          <input form="resetPasswordForm" id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp" placeholder="Enter Email Address...">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror         
       
      </div>
      <button form="resetPasswordForm" type="submit"  class="btn btn-primary btn-user btn-block" onclick="this.form.submit(); this.disabled = true;">
        Send Password Reset Link
    </button>
  </form>
    <hr>
    <div class="text-center">
      <a class="small" href="/register">Create an Account!</a>
    </div>
    <div class="text-center">
      <a class="small" href="/login">Already have an account? Login!</a>
    </div>


@endsection

@section('scripts')

@endsection
