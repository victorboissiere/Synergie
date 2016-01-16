@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Synergie',
  'subheading'  => $page->description,
  'image'       => get_page_image($page->image)
])

@section('page')
{!! $page->content !!}

<h1 class="text-center">Articles récents</h1>
<hr>
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    @include('utilities.snippets.blog_posts', [
      'begin' => 0,
      'end'   => count($posts),
      'posts' => $posts
    ])
    <ul class="pager">
      <li class="next">
        <a href="{{ route('blog') }}" style="float:none">Voir tous les articles &rarr;</a>
      </li>
    </ul>
  </div>
</div>
@endsection
