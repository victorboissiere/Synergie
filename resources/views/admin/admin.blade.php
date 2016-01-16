@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Dashboard',
    'description' => 'Control panel'
  ])
@endsection
@section('page')
<div class="row">
  @include('utilities.box.basic_box', [
    'lg' => 3,
    'xs' => 6,
    'color' => 'aqua',
    'title' => $nb_posts,
    'content' => 'Posts',
    'header_icon' => 'folder',
    'footer_icon' => 'arrow-circle-right',
    'text_to_action' => 'Posts',
    'link' => route('admin-posts.index')
  ])
  @include('utilities.box.basic_box', [
    'lg' => 3,
    'xs' => 6,
    'color' => 'aqua',
    'title' => $nb_posts,
    'content' => 'Pages',
    'header_icon' => 'folder',
    'footer_icon' => 'arrow-circle-right',
    'text_to_action' => 'Page',
    'link' => route('admin-posts.index')
  ])
  @include('utilities.box.basic_box', [
    'lg' => 3,
    'xs' => 6,
    'color' => 'green',
    'title' => $nb_users,
    'content' => 'Users',
    'header_icon' => 'person-stalker',
    'footer_icon' => 'arrow-circle-right',
    'text_to_action' => 'Users',
    'link' => route('admin-users.index')
  ])
</div>
@endsection
