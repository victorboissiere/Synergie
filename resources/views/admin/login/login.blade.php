@extends('layouts.header')
@section('page')
<br><br><br><br><br>
<div class="row">
    <div class="col s12 m4 offset-m4">
        <div class="container-fluid card z-depth-2">
            <div class="card-content">
                <div class="card-title">
                    <h4 class="black-text">Administration</h4>
                </div>
                <p>L'administration est réservée uniquement à l'équipe Synergie.</p>
                <div class="row">
                    <div class="input-field col s12">
                        <input class="validate" id="login" type="text">
                        <label for="login">Login</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input class="validate" id="password" type="password">
                        <label for="password">Mot de passe</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light right" type="submit" name="action">Se connecter
                <i class="material-icons right">send</i>
                </button>
                <br><br><br>
            </div>
        </div>
    </div>
</div>
@endsection