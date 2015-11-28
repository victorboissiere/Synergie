@extends('admin.layouts.header')
@section('page')
    <br>
    <h4>Utilisateurs (en cours)</h4>
    <br>
    <a href="{{ route('admin-users.create')  }}">Ajouter un utilisateur</a>
    <br>
    @include('utilities.forms.validation')
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
                    <a href="{{ route('admin-users.destroy', $user->id) }}">Supprimer (no warning yet)</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection