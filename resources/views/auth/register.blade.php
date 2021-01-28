@extends('layouts.argon.auth')

@section('title', 'Register')

@section('content')

    <form class="user" id="registrationForm" method="POST" action="/register">
        @csrf


          {{-- <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">REGISTER FOR FREE!</h1>
          </div>
           --}}

           <div class="form-group">
             
            <input form="registrationForm" id="account_type" type="text" class="form-control" name="name" value="{{ Session::get('plan') }}" readonly>

          </div>

            <div class="form-group">
             
                <input form="registrationForm"  id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Full Name" required>

                 @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
           
            <div class="form-group">
                <input form="registrationForm"  id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" required>

                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
              <div class="col-sm-6">
                <input form="registrationForm" id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

              </div>
              <div class="col-sm-6">
                <input form="registrationForm" id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
              </div>
            </div>
            <hr>
         
            
           <div class="form-group">
             <small>
               <input type="checkbox" name="terms" checked>
               By selecting Agree and Register below, I agree to The Property Manager <a href="/terms-of-service" target="_blank">Terms and Conditions</a>, <a href="/privacy-policy" target="_blank">Privacy Policy</a>, and <a href="/acceptable-use-policy" target="_blank">Acceptable Use Policy</a>.</small>
               @error('terms')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
              </div>
           
            <button form="registrationForm" type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="this.form.submit(); this.disabled = true;">
          REGISTER
        </button>
      
      </form>
{{--   
             <hr>
             <p class="text-center">or</p>
            <a href="login/google" class="btn btn-google btn-warning btn-block">
              <i class="fab fa-google fa-fw"></i> Register with Google
            </a> --}}
            {{-- <a href="login/facebook" class="btn btn-facebook btn-primary btn-block">
              <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
            </a> 
       --}}
          <hr> 
          <div class="text-center">
            @if (Route::has('password.request'))
                <a class="small btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </div>
          <div class="text-center">
            <a class="small" href="/login">Already have an account? Login!</a>
          </div>
 
   
@endsection

@section('scripts')

@endsection