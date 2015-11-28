@extends('admin.layouts.header')
@section('page')
    <br>
    <h4>Nouvel utilisateur</h4>
    <a href="{{ route('admin-users.index') }}">Liste des utilisateurs</a>
    <form method="POST" action="{{ route('admin-users.store') }}">
        {!! csrf_field() !!}
        <br>
        @include('utilities.forms.validation')
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="input-field col s12">
                <input class="validate" name="name" id="name" type="text" value="{{ old('name') }}">
                <label for="name">Nom et prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input class="validate" name="email" id="email" type="email" value="{{ old('email') }}">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input class="validate" name="password" id="password" type="password">
                <label for="password">Mot de passe</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light right" name="action" type="submit">Ajouter
            <i class="material-icons right">send</i>
        </button>
    </form>
@endsection