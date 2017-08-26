<div class="panel col-lg-4 col-md-4 col-sm-12 col-xs-12  my-polls">
    <!--you will want to show poll url inside the individual polls-->
    <div class="list-group container">
    <!--doesn't update automatically on new poll submit-->
        <% user.polls.forEach(function(poll){ %>
            <a style="cursor: default" class="list-group-item"><%= poll.question %><span title="delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></span></a>
        <% }); %>
    </div>
</div>
