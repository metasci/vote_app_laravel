@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
@endsection


@section('content')
    <div class="container">
        @include('partials.homeJumbo')

        <div class="container">

            <div style="text-align: center" class="container">
                <h2>Congratulations!</h2>
                <h3>Your poll has been posted to</h3>

                <!-- create custom url and display it here -->
                <a href="{{ $url }}"><h3>{{ $url }}</h3></a>
            </div>

        </div>
    </div>
@endsection
