@extends('admin.layouts.header')
@section('page')
    <br>
    <h4>Utilisateurs (en cours)</h4>
    <br>
    <a href="{{ route('admin-users.create')  }}">Ajouter un utilisateur</a>
    <br>
    @include('utilities.forms.validation')
    {!! csrf_field() !!}
    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>Nom/Prénom</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        @foreach ($users as $user)
            <tr class="item-{{ $user->id }}">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="#">Modifier</a>
                    //
                    <a href="{{ route('admin-users.destroy', $user->id) }}" class="removeItem" data-id="{{ $user->id }}">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection
@section('scripts')
    @include('utilities.forms.scripts.delete_confirmation')
@endsection
