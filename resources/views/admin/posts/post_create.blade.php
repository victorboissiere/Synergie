@extends('admin.layouts.header')
@section('page')
    <br>
    @if(isset($post))
        <h4>Modifier article</h4>
    @else
        <h4>Nouvel article</h4>
    @endif
    <a href="{{ route('admin-posts.index') }}">Liste des articles</a>
    <form method="POST" action="{{ isset($post) ? route('admin-posts.update', $post->id) : route('admin-posts.store') }}">
        @if(isset($post))
            <input type="hidden" name="_method" value="PUT">
        @endif
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
                <input class="validate" name="title" id="title" type="text" value="{{ isset($post) && empty(old('title')) ? $post->title : old('title') }}">
                <label for="title">Titre</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input class="validate" name="description" id="description" type="text" value="{{ isset($post) && empty(old('description')) ? $post->description : old('description') }}">
                <label for="description">Description</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input class="validate" name="content" id="content" type="text" value="{{ isset($post) && empty(old('content')) ? $post->content : old('content') }}">
                <label for="content">Contenu</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light right" name="action" type="submit">{{ isset($post) ? 'Modifier' : 'Ajouter' }}
            <i class="material-icons right">send</i>
        </button>
    </form>
@endsection