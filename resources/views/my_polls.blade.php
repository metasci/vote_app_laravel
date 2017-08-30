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
                @foreach($polls as $poll)
                    <a style="cursor: default" class="list-group-item">
                        {{ $poll->title }}
                        <button title="delete" class="btn btn-danger pull-right">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </a>
                @endforeach
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
