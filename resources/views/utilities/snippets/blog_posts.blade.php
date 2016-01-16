@for($i = $begin; $i < $end; ++$i)
  <div class="post-preview">
    <a href="{{ route('simple_post', $posts[$i]->id) }}">
      <h2 class="post-title">
        {{ $posts[$i]->title }}
      </h2>
      <h3 class="post-subtitle">
        {{ str_limit($posts[$i]->description, 256)}}
      </h3>
    </a>
    <p class="post-meta">Publié le {{ get_post_date($posts[$i]->created_at) }}</p>
  </div>
  {!! $i == count($end) ? '' : '<hr>' !!}
@endfor
