<div>
    <img {{ $attributes->merge(['class' => 'img-fluid', 'style' => 'object-fit: cover; max-width: 200px; max-height: 200px; ']) }} src="{{ asset(auth()->user()->avatar) }}" alt="User Avatar">

</div>
