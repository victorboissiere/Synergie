@extends('admin.layouts.header')
@section('title')
  @include('admin.utilities.title', [
    'title' => 'File manager',
    'description' => 'Upload files'
  ])
@endsection
@section('header')
@endsection
@section('page')
  test
  <a href="{{ asset('filemanager/filemanager/dialog.php?type=0') }}" target="_blank" class="btn iframe-btn" type="button">Open Filemanager</a>
@endsection
@section('scripts')

@endsection
