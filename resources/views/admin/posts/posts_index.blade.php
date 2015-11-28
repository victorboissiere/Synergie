@extends('admin.layouts.header')
@section('page')
    <br>
    <h4>Articles</h4>
    <br>
    <a href="{{ route('admin-posts.create')  }}">Ajouter un article</a>
    <br>
    @include('utilities.forms.validation')
    {!! csrf_field() !!}
    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        @foreach ($posts as $post)
            <tr class="item-{{ $post->id }}">
                <td>{{ $post->id }}</td>
                <td>{{ str_limit($post->title, 20) }}</td>
                <td>À venir</td>
                <td>
                    <a href="{{ route('admin-posts.edit', $post->id) }}">Modifier (en cours)</a>
                    //
                    <a href="{{ route('admin-posts.destroy', $post->id) }}" data-id="{{ $post->id }}" class="removeItem">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}
@endsection
@section('scripts')
    @include('utilities.forms.scripts.delete_confirmation')
@endsection
