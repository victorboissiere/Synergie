@if (env('APP_ENV') == 'development' || !Auth::guest())
  <ul class="pager">
    <li class="next">
      <a href="{{ route('admin-posts.edit', $id) }}">Modifier &rarr;</a>
    </li>
  </ul>
@endif
