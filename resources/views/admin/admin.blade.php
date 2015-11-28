@extends('admin.layouts.header')
@section('page')
    <br>
    Logged ! Admin in construction.
    <br>
    <a href="{{ route('userList') }}">Utilisateurs</a>
    <br>
    <a href="{{ route('adminPosts') }}">Articles</a>
@endsection