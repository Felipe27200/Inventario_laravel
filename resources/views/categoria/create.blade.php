<x-app-layout>
    <x-slot name="title">
        Agregar Categoría
    </x-slot>

    <x-slot name="contenido">
        <div class="border-2 w-full">

            <h1 class="text-center my-4 font-bold text-xl">Agregar Categoría</h1>

                @livewire('categoria-form')
        </div>
    </x-slot>

</x-app-layout>