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
    <p class="post-meta">Publié le {{ $posts[$i]->created_at->format('d F Y') }}</p>
  </div>
  {!! $i == count($end) ? '' : '<hr>' !!}
@endfor
