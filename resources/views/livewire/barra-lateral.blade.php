<div class="col-span-2 pl-3 bg-sky-100 pb-3" x-show="open">
        @if(Auth::user()->permiso_id == 2)

        <ul>
            <h1 class="text-lg font-bold mt-2 mb-1">Categorías</h1>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="{{ route('categoria.index') }}">Ver categorías</x-elementos.link></li>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="{{ route('categoria.create') }}">Agregar Categorías</x-elementos.link></li>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="#">Eliminar Categorías</x-elementos.link></li>

            <h1 class="text-lg font-bold mt-2 mb-1">Productos</h1>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="#">Ver Productos</x-elementos.link></li>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="#">Agregar Productos</x-elementos.link></li>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="#">Eliminar Productos</x-elementos.link></li>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="#">Modificar Productos</x-elementos.link></li>

            <h1 class="text-lg font-bold mt-2 mb-1">Inventario</h1>
            <li class="mb-1 lg:mb-0"><x-elementos.link href="#">Generar Reporte</x-elementos.link></li>
        </ul>
            
        @endif
</div>
