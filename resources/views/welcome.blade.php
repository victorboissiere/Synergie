@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Synergie',
  'subheading'  => 'Promouvoir la mixité',
  'image'       => 'frontend-theme/img/home-bg.jpg'
])

@section('page')
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @include('utilities.snippets.blog_posts', [
      'begin' => 0,
      'end'   => count($posts),
      'posts' => $posts
    ])
    <ul class="pager">
      <li class="next">
        <a href="{{ route('blog') }}">Voir tous les articles &rarr;</a>
      </li>
    </ul>
  </div>
</div>
@endsection
