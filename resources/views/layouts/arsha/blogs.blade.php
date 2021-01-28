@extends('layouts.arsha.template')

@section('title', 'Blogs | The Property Manager')

@section('nav-bar')
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center">
      <h3 class="logo mr-auto"><img src="{{ asset('/arsha/assets/img/logo.png') }}" alt="" class=""><a href="/">Blogs</a></h3> 
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo mr-auto"></a> 
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="active"><a target="_blank" href="/blogs">Blogs</a></li>
          <li><a target="_blank" href="/listings">Listings</a></li>
          <li><a target="_blank" href="/pricing">Payment</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
      <a href="/login"  target="_blank" class="get-started-btn scrollto">Login</a>
    </div>
</header>
@endsection

@section('content')
<br><br><br><br>
@foreach ($featured_blog as $item)
  <div class="col-md-8 mx-auto">
    <div class="jumbotron bg-transparent">
      <header class="blockquote-header text-right">{{ $item->category }}</header>
      <h3 class="">{{ $item->title }}</h3>
      <p class="">{!! $item->body !!}</p>
      
      <footer class="blockquote-footer">{{ $item->name }} <cite title="Source Title">on {{ Carbon\Carbon::parse($item->created_at)->format('M d Y') }}</cite></footer>
     
    </div>
  </div>
  @endforeach
  <hr>
  <div class="col-md-11 mx-auto">
    Previous Blogs
    <div class="row">
       @foreach ($previous_blogs as $item)
       <div class="col">
        <div class="jumbotron bg-transparent">
          <header class="blockquote-header text-right">{{ $item->category }}</header>
          <h3 class="">{{ $item->title }}</h3>
          <p class="">{!! $item->body !!}</p>
          <footer class="blockquote-footer">{{ $item->name }} <cite title="Source Title">on {{ Carbon\Carbon::parse($item->created_at)->format('M d Y') }}</cite></footer>
        </div>
      </div>   
       @endforeach
    </div>
  </div>
@endsection
@section('scripts')

@endsection



