@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Blog',
  'subheading'  => 'Actualités',
  'image'       => 'frontend-theme/img/home-bg.jpg'
])

@section('page')
  @include('utilities.snippets.blog_posts', [
    'begin' => 0,
    'end'   => count($posts),
    'posts' => $posts
  ])
  <div class="text-center">
    {!! $posts->render() !!}
  </div>
  <br><br>
@endsection
