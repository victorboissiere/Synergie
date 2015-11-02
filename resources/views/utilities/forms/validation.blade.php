@if(Session::has('message'))
    <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Succès!</strong> {{ Session::get('message') }}
    </div>
    <br>
@endif
@if(Session::has('error'))
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Erreur!</strong> {{ Session::get('error') }}
    </div>
    <br>
@endif