@if(Session::has('message'))
    <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Success!</strong> {{ Session::get('message') }}
    </div>
    <br>
@endif
@if(Session::has('error'))
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Error!</strong> {{ Session::get('error') }}
    </div>
    <br>
@endif
