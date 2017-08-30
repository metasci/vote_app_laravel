@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
    @include('partials.homeJumbo')
@endsection
