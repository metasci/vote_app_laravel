@extends('layouts.app')

@section('custom_css')
  <link rel="stylesheet" href="/css/home.css">
@endsection


@section('content')
    <div class="container">
        @include('partials.homeJumbo')

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="container">
                <h2>New Poll</h2>
                <form id="new-poll" action="/new-poll" method="post">
                    {{ csrf_field() }}

                    {{-- what do i do about this? --}}
                    {{-- there has to be a way to access current logged in user info without this obvious security breach --}}
                    {{-- <input style="display:none" value="<%= user._id %>" name="currentUser"> --}}


                    <p>Name your poll.</p>
                    <input class="form-control" type="text" name="question" placeholder="What's your favorite lunch?">
                    <p>Options</p>
                    <div id="options">
                        <input class="form-control" type="text" placeholder="Macaroni" name="options[]">
                        <input class="form-control" type="text" placeholder="Hot Pockets" name="options[]">
                    </div>


                    <div id="new_poll_buttons" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 centered-btn">
                        <!---->
                        <div id="more_opt_btn" class="btn btn-default">More Options</div>
                        <input class="btn btn-success" type="submit">
                        <!---->
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
        $(function(){
            var $options = $('#options');
            var $optBtn = $('#more_opt_btn'); // more options button

            $optBtn.on('click', function() {
               $options.append('<input class="form-control" type="text" placeholder="New Option" name="option">');
            });
        });
</script>
@endsection
