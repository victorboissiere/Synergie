@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Testimonials',
    'description' => ''
  ])
@endsection
@section('page')
@include('utilities.forms.validation')

{!! csrf_field() !!}
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Published testimonials</h3>
        <div class="box-tools">
          <div class="input-group">
            <div class="input-group-btn">
              <a href="{{ route('admin-testimonials.create') }}">
                <button class="btn btn-sm btn-default pull-right">
                  <i class="fa fa-plus"></i> Add testimonial
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover" id="published-items">
          <tr>
            <th>ID</th>
            <th>Content</th>
            <th>IP</th>
            <th>Actions</th>
          </tr>
          @foreach ($published_testimonials as $testimonial)
              <tr class="item-{{ $testimonial->id }}">
                  <td>{{ $testimonial->id }}</td>
                  <td>{{ str_limit($testimonial->content, 30) }}</td>
                  <td>{{ $testimonial->ip }}</td>
                  <td>
                    <a href="{{ route('admin-testimonials.edit', $testimonial->id) }}">Modifier</a> //
                    <a href="{{ route('testimonial-waiting', $testimonial->id) }}"
                       data-id="{{ $testimonial->id }}" class="status-change">Change status to waiting</a> //
                    <a href="{{ route('admin-testimonials.destroy', $testimonial->id) }}"
                       data-id="{{ $testimonial->id }}" class="removeItem">Remove</a>
                  </td>
              </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Testimonials waiting approval</h3>
        <div class="box-tools">
          <div class="input-group">
            <div class="input-group-btn">
              <a href="{{ route('admin-testimonials.create') }}">
                <button class="btn btn-sm btn-default pull-right">
                  <i class="fa fa-plus"></i> Add testimonial
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover" id="waiting-items">
          <tr>
            <th>ID</th>
            <th>Content</th>
            <th>IP</th>
            <th>Actions</th>
          </tr>
          @foreach ($waiting_testimonials as $testimonial)
              <tr class="item-{{ $testimonial->id }}">
                  <td>{{ $testimonial->id }}</td>
                  <td>{{ str_limit($testimonial->content, 30) }}</td>
                  <td>{{ $testimonial->ip }}</td>
                  <td>
                    <a href="{{ route('testimonial-publish', $testimonial->id) }}"
                       data-id="{{ $testimonial->id }}" class="status-change">Publish</a> //
                    <a href="{{ route('admin-testimonials.edit', $testimonial->id) }}">Modifier</a> //
                    <a href="{{ route('admin-testimonials.destroy', $testimonial->id) }}"
                       data-id="{{ $testimonial->id }}" class="removeItem">Remove</a>
                  </td>
              </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  $(function() {
    $('.status-change').click(function (event) {
      event.preventDefault();
      var url = $(this).prop('href');
      var token = $('input[name="_token"]').val();
      var id = $(this).data('id');

      $.ajax({
        url: url,
        type: "POST",
        data: {
          _token : token
        },
        success: function (data) {
          $('.item-' + id).remove();
          //TODO : find a way to dynamically move testimonials from one table to another
        },
        error: function(xhr, ajaxOptions, thrownError)
        {
          var json = $.parseJSON(xhr.responseText);
          alert('Error : ' + json['message']);
        }
      });

    });
  });
</script>
@include('utilities.forms.scripts.delete_confirmation')
@endsection
