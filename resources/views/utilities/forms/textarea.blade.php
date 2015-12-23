<?php
  if (!isset($cols))
    $cols = 20;
  if (!isset($rows))
    $rows = 5;
?>
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
  @if ($errors->has($name))
    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{ $errors->first($name) }}</label>
  @else
    <label for="{{ $name }}">{{ $label }}</label>
  @endif
  <textarea name="{{ $name }}" cols="{{ $cols }}" rows="{{ $rows }}">{{ $content }}</textarea>
</div>
