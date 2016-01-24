<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
  @if ($errors->has($name))
    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first($name) }}</label>
  @else
    <label for="{{ $name }}">{{ $label }}</label>
  @endif
  @if ($type != "textarea")
    <input name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" autocomplete="off"
    class="form-control" value="{{ $content }}" placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
    height="50">
  @else
    <textarea name="{{ $name }}" class="form-control" style="{{ isset($resize) && !$resize ? 'resize:none;' : '' }}"
    rows="{{ isset($rows) ? $rows : '' }}" cols="{{ isset($cols) ? $cols : ''}}">{{ $content }}</textarea>
  @endif
</div>
