@props(['message' => null])

@if ($message)
    <p class="text-danger">{{ $message }}</p>
@endif
