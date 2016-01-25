@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Témoignages',
  'subheading'  => 'Partagez vos expériences',
  'image'       => get_page_image()
])
@section('head')
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- TODO : move into own css when it is done !-->
  <style>
    .custom-testimonial{
      padding: 10px 15px !important;
      font-size: 10px !important;
      //border-radius: 0 !important;
      border-top-left-radius: 15px !important;
      border-top-right-radius: 15px !important;
      border-bottom-right-radius: 15px !important;
      border-bottom-left-radius: 15px !important;
      font-weight: normal !important;
      margin-right: 10px;
      margin-top: -20px;
    }
  </style>
@endsection

@section('page')
@if (Session::has('message'))
  @include('utilities.forms.validation')
@endif

@foreach($testimonials as $testimonial)
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-8 col-xs-12">
          {{ $testimonial->content }}
          <div class="visible-xs">
            <br>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <ul class="pager">
            <li class="next">
              <a href="#" class="custom-testimonial">Intéressant</a>
              <a href="#" class="custom-testimonial">Drôle</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <br>
@endforeach
<div class="text-center">
  {!! $testimonials->render() !!}
</div>
<ul class="pager">
  <li class="next">
    <a href="#" style="float:none" data-toggle="modal" data-target="#add-testimonial-box">Ajouter votre témoignage</a>
  </li>
</ul>

<!-- Modal -->
<div class="modal fade" id="add-testimonial-box" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ route('add-testimonial') }}">
        {!! csrf_field() !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Ajouter votre témoignage</h4>
        </div>
        <div class="modal-body">
          @if (Session::has('error'))
            @include('utilities.forms.validation')
          @endif
          <div class="form-group">
            @include('utilities.forms.input', [
              'label'   => 'Témoignage',
              'name'    => 'content',
              'type'    => 'textarea',
              'resize'  => false,
              'rows'    => '6',
              'content' => old('content', '')
            ])
          </div>
          <div class="g-recaptcha" data-sitekey="6LcuQBYTAAAAAH8MIAomGwbr3etLDLWrqDUVvyoC"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  @if (count($errors) > 0 || Session::has('error'))
    <script>
      $('#add-testimonial-box').modal('show');
    </script>
  @endif
@endsection
