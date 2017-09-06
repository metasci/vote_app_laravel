@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="/css/my_polls.css">
@endsection


@section('content')
    <div class="container">
        @include('partials.homeJumbo')

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!--you will want to show poll url inside the individual polls-->
            <div class="list-group container">
            <!--doesn't update automatically on new poll submit-->
                @if(!$polls->isEmpty())
                    @foreach($polls as $poll)
                        <div class="list-group-item">
                            <div class="row">
                                <span class="col-lg-8 col-md-8 col-sm-8 col-xs-8">{{ $poll->title }}</span>

                                {{-- [X] build Route to accept $poll->url --}}
                                {{-- [X] build view - show graphs and options (stats) --}}
                                {{--  build separate view for annonymous voters to vote --}}
                                <a href="{{ '/poll-info/' . $poll->id }}"  class="btn btn-primary col-lg-2 col-md-2 col-sm-2 col-xs-2">View Poll <i class="glyphicon glyphicon-trash"></i></a>

                                {{-- [X] make this button work --}}
                                {{-- [X] delete poll and associated options --}}
                                {{-- [X] return to my-polls view --}}
                                <form action="{{ '/my-polls/delete-poll/' . $poll->id }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <button onClick="return confirm('Are you sure you want to delete this poll?')" title="delete" class="btn btn-danger col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </form>


                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container">
                        <h2>Oops, you haven't created any polls yet!</h2>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
        $(function(){

        });
</script>
@endsection
