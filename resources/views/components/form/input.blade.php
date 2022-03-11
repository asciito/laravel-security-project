@props(['name', 'label'])

<div class="space-y-1">
    <x-form.label :for="$name">{{ $label ?? $name }}</x-form.label>

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes }}
        value="{{ old($name) ?? '' }}"
        class=" w-full px-2 py-1 font-xl border borde-gray-400 focus:outline-none focus:ring focus:ring-blue-400 rounded-sm">

    <x-form.error :error="$name" />
</div>