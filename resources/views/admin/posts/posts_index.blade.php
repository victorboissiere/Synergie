@extends('admin.layouts.header')
@section('page')

@include('utilities.forms.validation')
{!! csrf_field() !!}

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Posts</h3>
        <div class="box-tools">
          <div class="input-group">
            <div class="input-group-btn">
              <a href="{{ route('admin-posts.create') }}">
                <button class="btn btn-sm btn-default pull-right">
                  <i class="fa fa-plus"></i> Add post
                </button>
              </a>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
          @foreach ($posts as $post)
              <tr class="item-{{ $post->id }}">
                  <td>{{ $post->id }}</td>
                  <td>{{ str_limit($post->title, 20) }}</td>
                  <td>{{ $post->created_at }}</td>
                  <td>
                    <a href="{{ route('admin-posts.edit', $post->id) }}">Modifier</a>
                    //
                    <a href="{{ route('admin-posts.destroy', $post->id) }}" data-id="{{ $post->id }}" class="removeItem">Supprimer</a>
                  </td>
              </tr>
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
{!! $posts->render() !!}
@endsection
@section('scripts')
    @include('utilities.forms.scripts.delete_confirmation')
@endsection
