<div class="mb-3 mb-0">
    <label class="form-label">{{ $label }}</label>
    <textarea name= "$name" rows="5" {{ $attributes->merge(['class',=>'form-control']) }} placeholder="{{ $placeholder }}" value="Mike">
    </textarea>
    <x-input-error :message="$errors->first($name)" />

</div>
