@extends('layouts.argon.auth')

@section('title', 'Reset')

@section('content')
<div class="text-center">
  <h1 class="h4 text-gray-900 mb-2">Enter Your New Password</h1>
  <p class="mb-4"></p>
</div>
@if(session('status'))
  <div class="alert alert-success" role="alert">
      {{  session('status') }}
  </div>
@endif
<form class="user" method="POST" action="{{ route('password.update') }}">
  @csrf

  <input type="hidden" name="token" value="{{ $token }}">
  
  <div class="form-group">   
      <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="form-group">
      <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New password">

      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>

  <div class="form-group">
      <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat new password">
  </div>

  <button type="submit"  class="btn btn-primary btn-user btn-block" onclick="this.form.submit(); this.disabled = true;">
     Reset Password
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

