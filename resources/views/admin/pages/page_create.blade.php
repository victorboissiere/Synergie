@extends('admin.layouts.header')
@section('header')

@endsection
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Modify page',
    'description' => ''
  ])
@endsection
@section('page')
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">{{ "Modify page " . $page->title }}</h3>
      </div>

      <form role="form" method="POST" action="{{ route('admin-pages.update', $page->id)}}">
        <input type="hidden" name="_method" value="PUT">

        {!! csrf_field() !!}

        @include('utilities.forms.validation')

        <div class="box-body">

          @include('utilities.forms.input', [
            'label' => 'Description',
            'name' => 'description',
            'type' => 'text',
            'content' => old('description', isset($page) ? $page->description : '')
          ])

          @include('utilities.forms.input', [
            'label' => 'Content',
            'name' => 'content',
            'type' => 'textarea',
            'content' => old('content', isset($page) ? $page->content : '')
          ])

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">{{ isset($page) ? 'Modify' : 'Add' }}</button>
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
