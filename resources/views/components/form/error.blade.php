@props(['error'])

@error($error)
    <p class="text-xs text-white bg-red-400 rounded-sm px-2 py-1">{{ $message }}</p>
@enderror