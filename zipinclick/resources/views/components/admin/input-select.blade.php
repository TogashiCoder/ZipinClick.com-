<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" {{ $attributes->merge(['class'=>'form-control form-select']) }}>
        <option value="">{{ __('SELECT') }}</option>
        {{ $slot }}
    </select>
</div>
