@props(['for'])

<label for="{{ $for }}" class="text-xl font-light">{{ ucfirst($slot) }}</label>