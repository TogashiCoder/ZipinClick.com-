<div class="mb-3">


    <label class="form-label">{{ $label }}</label>
    <input name ="{{ $name }}" type="{{ $type == null ? 'text' : $type }}"
        {{ $attributes->class(['form-control','is-invalid'=> $errors->has($name)]) }} placeholder="{{ $placeholder }}"
        value="{{ $value }}">
    <x-input-error :message="$errors->first($name)" />



</div>
