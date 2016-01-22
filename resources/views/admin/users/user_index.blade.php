@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Users',
    'description' => ''
  ])
@endsection
@section('page')
{!! csrf_field() !!}
<div class="row">
  <div class="col-xs-12">
    @include('utilities.forms.validation')
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">User list</h3>
        <div class="box-tools">
          <div class="input-group">
            <div class="input-group-btn">
              <a href="{{ route('admin-users.create') }}">
                <button class="btn btn-sm btn-default pull-right">
                  <i class="fa fa-plus"></i> Add admin user
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>First/Last name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
          @foreach ($users as $user)
              <tr class="item-{{ $user->id }}">
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                      <a href="{{ route('admin-users.edit', $user->id) }}">Modifier</a>
                      //
                      <a href="{{ route('admin-users.destroy', $user->id) }}" class="removeItem" data-id="{{ $user->id }}">Supprimer</a>
                  </td>
              </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
{!! $users->render() !!}
@endsection
@section('scripts')
    @include('utilities.forms.scripts.delete_confirmation')
@endsection
