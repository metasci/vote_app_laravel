@extends('layouts.app')

@section('content')

    @if(Auth::check())
        @include('partials.homeJumbo')
    @else
        @include('partials.mainJumbo')
    @endif

  <div class="container">

      <div id="home" class="row">
          <div class="col-md-4">
              <img src="/img/fast.png"/>
              <h2>Fast Results</h2>
              <p>Live graphs show your poll results immediately in an easy to understand format. One graph will not provide the whole picture, that's why we provide multiple graph types to better describe your results.</p>
          </div>

          <div class="col-md-4">
              <img src="/img/globe.png"/>
              <h2>Universal</h2>
              <p>Traditional desktop computers now represent only 30% of Internet traffic. Your poll must work on the tablets, smart phones, netbooks and notebooks that your visitors are using. Our responsive designs do just that.</p>
          </div>

          <div class="col-md-4">

              <i class="fa fa-facebook-square"></i>

              <h2>Social Media</h2>
              <p>Free integrated facebook or traditional comments allow your poll voters to provide immediate feedback and discuss results. Social share buttons encourage your poll voters to help spread the word.</p>
          </div>
      </div>
{{-- container --}}
  </div>



@endsection


@section('custom_css')
  <link rel="stylesheet" href="/css/main.css">
@endsection
