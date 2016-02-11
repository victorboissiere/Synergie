@extends('layouts.header', [
  'type'        => 'page',
  'heading'     => 'Synergie',
  'subheading'  => $page->description,
  'image'       => get_page_image($page->image)
])

@section('page')
{!! $page->content !!}
<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-xs-12 col-md-9">
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
  </div>
  <div class="col-xs-12 col-md-3">
    <a class="twitter-timeline" href="https://twitter.com/victorboissiere" data-widget-id="695971637846503424">Tweets by @victorboissiere</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</div>
@endsection
