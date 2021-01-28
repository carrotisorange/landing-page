@extends('layouts.arsha.arsha-login')

@section('title', 'The Property Manager | Property')

@section('content')

<div class="">
  <h1 class="h4 text-gray-900 mb-4">Property Profile</h1>
</div>

  <form class="user" id="addPropertyForm" action="/users/{{ Auth::user()->id }}/property" method="POST">
  @method('put')
  {{ csrf_field() }}
 
 

<div class="form-group">

    <input form="addPropertyForm" id="property" type="text" class="form-control form-control-user @error('property') is-invalid @enderror" name="property" value="{{ old('property') }}" required autocomplete="property" placeholder="Name of your property">

    @error('property')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror

  </div>
  

  <div class="form-group">

   <select form="" id="property_type" class="form-control @error('property_type') is-invalid @enderror" name="property_type" value="{{ old('property_type') }}" required>
     <option value="">Select property type</option>
     <option value="Dormitory">Dormitory</option>
     <option value="Apartment Rentals">Apartment Rentals</option>
     <option value="Commercial Complex">Commercial Complex</option>
     <option value="Condominium Associations">Condominium Associations</option>
   </select>

      @error('property_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
     </div>

          
     <div class="form-group ">
    <select form="" id="ownership" class="form-control form @error('ownership') is-invalid @enderror" name="ownership" value="{{ old('ownership') }}" required autocomplete="ownership">
      <option value="">Ownership</option>
      <option value="Single Owner">Single Owner</option>
      <option value="Multiple Owners">Multiple Owners</option>
    </select>

       @error('ownership')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      </div>

      <button form="addPropertyForm" type="submit" class="btn btn-primary btn-user btn-block" id="registerButton" onclick="this.form.submit(); this.disabled = true;"> 
        Submit
     </button>
    </form>
@endsection

@section('scripts')

@endsection

