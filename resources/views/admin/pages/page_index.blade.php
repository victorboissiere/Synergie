@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Pages',
    'description' => ''
  ])
@endsection
@section('page')
@include('utilities.forms.validation')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Pages</h3>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
          </tr>
          @foreach ($pages as $page)
              <tr>
                  <td>{{ $page->id }}</td>
                  <td>{{ ucfirst($page->title) }}</td>
                  <td>
                    <a href="{{ route('admin-pages.edit', $page->id) }}">Modifier</a>
                  </td>
              </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
