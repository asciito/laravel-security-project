<x-layout title="Hello, world!">
    <h1 class="text-4xl text-center first-letter:uppercase mb-4 font-light">Registar Usario</h1>

    <form method="POST" action="{{ route('register_user') }}" class="space-y-4 w-full sm:max-w-md mx-auto p-4">

        <x-form.input id="name" type="name" name="name" label="Nombre"/>

        <x-form.input id="email" type="email" name="email"/>

        <x-form.input id="password" type="password" name="password" label="Contraseña"/>

        <x-form.submit align="right">Iniciar Sesión</x-form.submit>

        @csrf

    </form>
</x-layout>