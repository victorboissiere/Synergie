@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'À propos',
  'subheading'  => $page->description,
  'image'       => get_page_image($page->image)
])
@section('page')
  {!! $page->content !!}
@endsection
