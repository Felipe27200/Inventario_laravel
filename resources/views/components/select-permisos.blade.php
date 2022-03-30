<div>
    <select name="permiso" id="permiso" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <option value="">Seleccione</option>

        @foreach ($permisosUser as $permiso)
            <option value="{{ $permiso->permiso_id }}">{{ $permiso->nombre }}</option>
        @endforeach
    </select>
</div>