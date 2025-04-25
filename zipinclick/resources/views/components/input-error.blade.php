@props(['message' => null])

@if ($message)
    <p {{ $attributes->merge(['class' => 'text-danger']) }}  class="text-danger">{{ $message }}</p>
@endif
