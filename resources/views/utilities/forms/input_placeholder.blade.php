<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
  @if ($errors->has($name))
    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first($name) }}</label>
  @endif
  <input name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" autocomplete="off" class="form-control"
  value="{{ $content }}">
</div>
