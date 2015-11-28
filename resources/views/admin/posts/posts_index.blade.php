@extends('admin.layouts.header')
@section('page')
    <br>
    <h4>Articles (en cours)</h4>
    <br>
    <a href="{{ route('userCreate')  }}">Ajouter un article</a>
    <br>
    @include('utilities.forms.validation')
    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>
                    <a href="#">Modifier</a>
                    //
                    <a href="#">Supprimer (no warning yet)</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@endsection