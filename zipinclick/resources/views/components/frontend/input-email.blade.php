<div class="form_box">
    <label for="{{ $name }}"
        class="form-label mb-2 font-18 font-heading fw-600">{{ $label }}</label>
    <input type="email" {{ $attributes->merge(['class' => 'common-input border']) }}
        name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
    <x-input-error :message="$errors->first('email')" />
</div>
