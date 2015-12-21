@extends('admin.layouts.header')
@section('header')

@endsection
@section('title')
  @include('admin.utilities.title', [
    'title' => isset($post) ? 'Modify post' : 'Add new post',
    'description' => ''
  ])
@endsection
@section('page')
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">{{ isset($post) ? "Modify post" : "New post" }}</h3>
      </div>

      <form role="form" method="POST" action="{{ isset($post) ? route('admin-posts.update', $post->id) : route('admin-posts.store') }}">
        @if(isset($post))
          <input type="hidden" name="_method" value="PUT">
        @endif

        {!! csrf_field() !!}

        @include('utilities.forms.validation')

        <div class="box-body">

          @include('utilities.forms.input', [
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'content' => old('title', isset($post) ? $post->title : '')
          ])

          @include('utilities.forms.input', [
            'label' => 'Description',
            'name' => 'description',
            'type' => 'text',
            'content' => old('description', isset($post) ? $post->description : '')
          ])

          @include('utilities.forms.input', [
            'label' => 'Content',
            'name' => 'content',
            'type' => 'textarea',
            'content' => old('content', isset($post) ? $post->content : '')
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
@section('scripts')
  <script src="{{ asset('admin-theme/js/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    $(function() {
      CKEDITOR.replace('content');
    });
  </script>
@endsection
