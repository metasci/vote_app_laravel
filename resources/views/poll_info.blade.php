@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="/css/poll_info.css">
@endsection


@section('content')
    <div class="container">
        @include('partials.homeJumbo')

        <div class="container text-centered">

            {{-- put info here --}}
            <h2>{{ $poll->title }}</h2>
            <div class="container">
                <ul class="list-group col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    @foreach($poll->options as $option)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          {{ $option->option }}
                          <span class="badge badge-default badge-pill">{{ $option->vote_count }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="alert alert-info">
                <h4>Cast vote at this url:</h4>
                <a href="{{ env('APP_URL') . '/vote/' . $poll->url }}">{{ env('APP_URL') . '/vote/' . $poll->url }}</a>
            </div>
        </div>
    </div>
@endsection
