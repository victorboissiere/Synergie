@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Dashboard',
    'description' => 'Control panel'
  ])
@endsection
@section('page')
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>
          {{ $nb_posts }}
        </h3>
        <p>
          Posts
        </p>
      </div>
      <div class="icon">
        <i class="ion ion-folder"></i>
      </div>
      <a href="{{ route('admin-posts.index') }}" class="small-box-footer">
        Posts <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3>
          {{ $nb_users }}
        </h3>
        <p>
          Users
        </p>
      </div>
      <div class="icon">
        <i class="ion ion-person-stalker"></i>
      </div>
      <a href="{{ route('admin-users.index') }}" class="small-box-footer">
        Users <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
</div>
@endsection
