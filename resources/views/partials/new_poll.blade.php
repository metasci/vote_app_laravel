<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="container">
        <h2>New Poll</h2>
        <form id="new-poll" action="/newPoll" method="post">
            {{-- <input style="display:none" value="<%= user._id %>" name="currentUser"> --}}
            <p>Name your poll.</p>
            <input class="form-control" type="text" name="pollName" placeholder="What's your favorite lunch?">
            <p>Options</p>
            <div id="options">
                <input class="form-control" type="text" placeholder="Macaroni" name="option">
                <input class="form-control" type="text" placeholder="Hot Pockets" name="option">
            </div>


            <div id="new_poll_buttons" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 centered-btn">
                <!---->
                <div class="btn btn-default">More Options</div>
                <input class="btn btn-success" type="submit">
                <!---->
            </div>


        </form>
    </div>
</div>
