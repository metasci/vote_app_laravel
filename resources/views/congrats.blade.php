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

                <div class="alert alert-info">
                    <h3>Voters can access your poll at this URL:</h3>

                    <!-- create custom url and display it here -->
                    <a href="{{ env('APP_URL') . '/vote/' . $url }}"><h3>{{ env('APP_URL') . '/vote/' . $url }}</h3></a>
                </div>
            </div>

        </div>
    </div>
@endsection
