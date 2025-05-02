<div class="form_box">
    <label for="{{ $label }}"
        class="form-label mb-2 font-18 font-heading fw-600">{{ $label }}</label>
    <input type="file" {{ $attributes->merge(['class'=>'common-input border']) }} id="avatar"
        name="{{ $name }}" >
    <x-input-error :message="$errors->first('avatar')" />
</div>
