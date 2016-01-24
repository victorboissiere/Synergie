@extends('admin.layouts.header')
@section('header')

@endsection
@section('title')
  @include('admin.utilities.title', [
    'title' => isset($testimonial) ? 'Modify testimonial' : 'Add new testimonial',
    'description' => ''
  ])
@endsection
@section('page')
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">{{ isset($testimonial) ? "Modify testimonial" : "New testimonial" }}</h3>
      </div>

      <form role="form" method="POST" action="{{ isset($testimonial) ? route('admin-testimonials.update', $testimonial->id) : route('admin-testimonials.store') }}">
        @if(isset($testimonial))
          <input type="hidden" name="_method" value="PUT">
        @endif

        {!! csrf_field() !!}

        @include('utilities.forms.validation')

        <div class="box-body">

          @include('utilities.forms.input', [
            'label' => 'Content',
            'name' => 'content',
            'type' => 'textarea',
            'content' => old('content', isset($testimonial) ? $testimonial->content : '')
          ])

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">{{ isset($testimonial) ? 'Modify' : 'Add' }}</button>
          </div>
          <br><br>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
