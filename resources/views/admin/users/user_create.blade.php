@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Users',
    'description' => ''
  ])
@endsection
@section('page')
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">{{ isset($user) ? "Modify user" : "New user" }}</h3>
      </div>

      <form role="form" method="POST" action="{{ isset($user) ? route('admin-users.update', $user->id) : route('admin-users.store') }}">
        @if(isset($user))
          <input type="hidden" name="_method" value="PUT">
        @endif

        {!! csrf_field() !!}

        @include('utilities.forms.validation')

        <div class="box-body">

          @include('utilities.forms.input', [
            'label' => 'First and last name',
            'name' => 'name',
            'type' => 'text',
            'content' => old('name', isset($user) ? $user->name : '')
          ])

          @include('utilities.forms.input', [
            'label' => 'Email',
            'name' => 'email',
            'type' => 'email',
            'content' => old('email', isset($email) ? $user->email : '')
          ])

          @include('utilities.forms.input', [
            'label' => 'Password',
            'name' => 'password',
            'type' => 'password',
            'content' => ''
          ])

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">{{ isset($post) ? 'Modify' : 'Add' }}</button>
          </div>
          <br><br>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
