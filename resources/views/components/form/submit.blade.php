@props(['align' => 'left'])

@php
$classes = match($align) {
    'left' => 'text-left',
    'center' => 'text-center',
    'right' => 'text-right',
}
@endphp

<div class="{{ $classes }}">
    <button type="submit" class="px-3 py-2 inline-block text-white bg-blue-400 hover:bg-blue-500 active:bg-blue-400 rounded-sm">{{ $slot }}</button>
</div>