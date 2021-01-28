@extends('layouts.arsha.arsha-login')

@section('title', 'The Property Manager | Plan')

@section('content')
                
@if(Auth::user()->account_type === null)

    
             
<h1 class="h4 text-gray-900 mb-4">Select Your Plan</h1>

<form id="selectingPlanForm" action="/users/{{ Auth::user()->id }}/plan" method="POST">
  @method('put')
  {{ csrf_field() }}


<div class="form-group">
  <select form="selectingPlanForm" id="account_type" class="form-control form @error('account_type') is-invalid @enderror" name="account_type" value="{{ old('account_type') }}" required autocomplete="account_type">
  <option value="">Please select one</option>
  <option value="Free">Free</option>
  {{-- <option value="Medium">Medium | 50 rooms | ₱950/mo</option>
  <option value="Large">Large | 100 rooms | ₱1800/mo</option>
  <option value="Enterprise">Enterprise | 200 rooms | ₱2400/mo </option>
  <option value="Corporate">Corporate | 500 rooms | ₱4800/mo </option> --}}
</select>

@error('account_type')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<button form="selectingPlanForm" type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="this.form.submit(); this.disabled = true;"> 
Submit
</button>

</form>

<hr>

@else

@if(Auth::user()->account_type === 'Free')


 
  <h1 class="h4 text-gray-900 mb-4">Select Your Plan</h1>

  <form id="selectingPlanForm" action="/users/{{ Auth::user()->id }}/plan" method="POST">
    @method('put')
    {{ csrf_field() }}


<div class="form-group">
  <select class="form-control" name="account_type" id="" onchange='this.form.submit()'>
    <option value="{{ Auth::user()->account_type }}">{{ Auth::user()->account_type }}</option>
    <option value="Free">Free</option>
    {{-- <option value="Medium">Medium | 50 rooms | ₱950/mo </option>
    <option value="Large">Large | 100 rooms | ₱1800/mo </option>
    <option value="Enterprise">Enterprise | 200 rooms | ₱2400/mo</option>
    <option value="Corporate">Corporate | 500 rooms | ₱4800/mo</option> --}}
  </select>
</div>
{{-- <button form="selectingPlanForm" type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="this.form.submit(); this.disabled = true;"> 
Change Plan
</button> --}}

</form>

<hr>
  

<form action="/users/{{ Auth::user()->id }}/charge" method="POST" id="payment-form">
@csrf

<p class="text-right">  <button type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="this.form.submit(); this.disabled = true;"> Finish</button> </p>
</form>


@else


 
  <h1 class="h4 text-gray-900 mb-4">Select Your Plan</h1>

  <form id="selectingPlanForm" action="/users/{{ Auth::user()->id }}/plan" method="POST">
    @method('put')
    {{ csrf_field() }}


<div class="form-group">
  <select class="form-control" name="account_type" id="" onchange='this.form.submit()'>
    <option value="{{ Auth::user()->account_type }}">{{ Auth::user()->account_type }}</option>
    <option value="Free">Free</option>
    {{-- <option value="Medium">Medium | 50 rooms | ₱950/mo</option>
    <option value="Large">Large | 100 rooms | ₱1800/mo</option>
    <option value="Enterprise">Enterprise | 200 rooms | ₱2400/mo</option>
    <option value="Corporate">Corporate | 500 rooms | ₱4800/mo </option> --}}
  </select>
</div>
{{-- <button form="selectingPlanForm" type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="this.form.submit(); this.disabled = true;"> 
Change Plan
</button> --}}

</form>

<hr>
 
<h3 class="h4 text-gray-900 mb-4">Payment Details</h1>

<form action="/users/{{ Auth::user()->id }}/charge" method="POST" id="payment-form" onsubmit="return checkForm(this);">
@csrf
<div class="form-group">
 <label for="card-element">
   Credit or debit card
 </label>
 <div id="card-element">
   <!-- A Stripe Element will be inserted here. -->
 </div>

 <!-- Used to display form errors. -->
 <div id="card-errors" role="alert"></div>
</div>

{{-- <small class="text-danger">Card won't be charge until {{ Carbon\Carbon::now()->addMonth()->format('M d Y')  }}.</small> --}}
<br>
@foreach (['danger', 'warning', 'success', 'info'] as $key)
@if(Session::has($key))

 <strong class="text-danger">{{ Session::get($key) }}</strong>

@endif
@endforeach
<br>

<button type="submit" name="myButton" class="btn btn-primary btn-user btn-block"> Finish</button>
</form>



@endif

@endif
@endsection

@section('scripts')

@endsection

