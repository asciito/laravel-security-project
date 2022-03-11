
<div x-data="{ active: false }">
    <input
        {{ $attributes }}
        hidden
        x-bind:value="Number(active)"
        class=""
    >

    <div class="flex items-center space-x-2">
        <x-form.label for="{{ $attributes->get('for') }}">{{ $attributes->has('label') ? $attributes->get('label') : $attributes->get('name') }}</x-form.label>

        <div
            class="inline-block border-4 border-gray-200 bg-gray-200 rounded-full w-5 h-5 cursor-pointer"
            x-bind:class="active ? 'bg-green-400' : ''"
            @click="active = ! active"></div>
    </div>

    <x-form.error :error="$attributes->get('name')" />
</div>