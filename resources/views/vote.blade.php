@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
@endsection


@section('content')
    <div class="container">
        @if(Auth::check())
            @include('partials.homeJumbo')
        @else
            @include('partials.mainJumbo')
        @endif


        <div style="text-align: center" class="container">
            <h2>{{ $poll->title }}</h2>
            <div class="list-group col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                @foreach($poll->options as $option)
                    <a href="/vote/cast-vote/{{ $option->id }}" class="list-group-item list-group-item-action">{{ $option->option }}</a>
                @endforeach
            </div>
        </div>


    </div>
@endsection
