@extends('admin.layouts.header')
@section('page')
    <br>
    Logged ! Admin in construction.
    <br>
    <a href="{{ route('admin-users.index') }}">Utilisateurs</a>
    <br>
    <a href="{{ route('admin-posts.index') }}">Articles</a>
@endsection