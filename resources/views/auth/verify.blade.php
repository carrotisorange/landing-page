@extends('layouts.argon.dashboard')

@section('title', 'Verify')

@section('content')

  <h1 class="h4 text-gray-900 mb-4">Verify your email...</h1>

@if (session('resent'))
<div class="alert alert-success" role="alert">
  A fresh verification link has been sent to the email address {{ Auth::user()->email }}.
</div>
@endif

      {{ __('Before proceeding, please check your email for a verification link.') }}
      {{ __('If you did not receive the email') }},
      <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
        </form>

@endsection

@section('scripts')

@endsection

