@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Témoignages',
  'subheading'  => 'Partagez vos expériences',
  'image'       => get_page_image()
])
@section('head')
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('page')
@if (Session::has('message'))
  @include('utilities.forms.validation')
@endif
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
