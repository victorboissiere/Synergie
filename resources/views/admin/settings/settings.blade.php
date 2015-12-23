@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'Settings',
    'description' => 'General settings'
  ])
@endsection
@section('page')
<form role="form" method="POST" action="{{ route('admin-settings') }}">
<input type="hidden" name="_method" value="PUT">
{!! csrf_field() !!}
@include('utilities.forms.validation')
@include('utilities.forms.errors')
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">General settings</h3>
      </div>
      <div class="box-body">

        @include('utilities.forms.input', [
          'label' => 'Website title',
          'name' => 'website_title',
          'type' => 'text',
          'content' => old('website_title', $settings['website_title'])
        ])

        @include('utilities.forms.input', [
          'label' => 'Admin title',
          'name' => 'admin_title',
          'type' => 'text',
          'content' => old('admin_title', $settings['admin_title'])
        ])


        @include('utilities.forms.input', [
          'label' => 'Admin email',
          'name' => 'admin_email',
          'type' => 'text',
          'content' => old('admin_email', $settings['admin_email'])
        ])

        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div>
        <br><br>
      </div>
    </div>
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">SEO</h3>
      </div>
      <div class="box-body">

        @include('utilities.forms.input', [
          'label' => 'Website description',
          'name' => 'website_description',
          'type' => 'text',
          'content' => old('website_description', $settings['website_description'])
        ])

        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div>
        <br><br>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-warning">
      <div class="box-header">
        <h3 class="box-title">Code injection</h3>
      </div>
      <div class="box-body">

        @include('utilities.forms.textarea', [
          'label' => 'Code header',
          'name' => 'code_header',
          'type' => 'textarea',
          'cols' => 75,
          'rows' => 10,
          'content' => old('code_header', $settings['code_header'])
        ])

        @include('utilities.forms.textarea', [
          'label' => 'Code footer',
          'name' => 'code_footer',
          'type' => 'textarea',
          'cols' => 75,
          'rows' => 10,
          'content' => old('code_footer', $settings['code_footer'])
        ])

        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
</form>
@endsection
