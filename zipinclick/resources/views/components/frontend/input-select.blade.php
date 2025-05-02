<div class="form_box">
    <label for="{{ $name }}"
        class="form-label mb-2 font-18 font-heading fw-600">{{ $label}}</label>
    <div class="">
        <select  {{ $attributes->merge(['class'=>'common-input border']) }} id="country"
            name="{{ $name }}">
            <option value="1">{{ __('SELECT') }}</option>

            {{ $slot }}
        </select>
    </div>
    <x-input-error :message="$errors->first('country')" />
</div>
