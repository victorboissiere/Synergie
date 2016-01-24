@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Testimonials',
    'description' => ''
  ])
@endsection
@section('page')
@include('utilities.forms.validation')


<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Published testimonials</h3>
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Content</th>
            <th>IP</th>
            <th>Actions</th>
          </tr>
          @foreach ($published_testimonials as $testimonial)
              <tr>
                  <td>{{ $testimonial->id }}</td>
                  <td>{{ str_limit($testimonial->content, 30) }}</td>
                  <td>{{ $testimonial->ip }}</td>
                  <td>
                    <a href="{{ route('admin-testimonials.edit', $testimonial->id) }}">Modifier</a> //
                    <a href="#">Change status to waiting</a> //
                    <a href="#">Remove</a>
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
      </div>
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Content</th>
            <th>IP</th>
            <th>Actions</th>
          </tr>
          @foreach ($waiting_testimonials as $testimonial)
              <tr>
                  <td>{{ $testimonial->id }}</td>
                  <td>{{ str_limit($testimonial->content, 30) }}</td>
                  <td>{{ $testimonial->ip }}</td>
                  <td>
                    <a href="#">Publish</a> //
                    <a href="{{ route('admin-testimonials.edit', $testimonial->id) }}">Modifier</a> //
                    <a href="#">Remove</a>
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
  //TODO : add scripts to publish and remove testimonials
</script>
@endsection
