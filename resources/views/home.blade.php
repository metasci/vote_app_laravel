@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron main">
                    <h1>Dashboard</h1>
                    <p>What would you like to do today?</p>
                    <a href="/new-poll" class="menu btn btn-success">New Poll</a>
                    <a href="/my-polls" class="menu btn btn-primary">My Polls</a>
            </div>
        </div>
    </div>

</div>
<div class="container">
    @if ($page == 'new_poll')
        @include('partials.new_poll')
    {{-- @elseif ($page == 'my_polls')
        @include('partials.my_polls.blade.php')
    @elseif ($page == 'congrats')
        @include('partials.congrats.blade.php') --}}
    @endif
</div>
@endsection




@section('script')
    
@endsection
