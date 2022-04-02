<form class="w-full max-w-full pr-2" wire:submit.prevent="store" method="POST">
  @csrf
  <div class="flex flex-wrap justify-center -mx-3 mb-3">
    <div class="w-full md:w-2/4 lg:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block tracking-wide text-gray-700 text-md font-bold mb-2" for="categoria">
        Nombre Categoría
      </label>
      {{-- wire:model mantiene sincronizados los datos en la clase del componente con los de la vista,
        sin el no sería posible actualizar los datos de la propiedad $nuevaCategoria en el componente. --}}
      <input wire:model="nuevaCategoria" class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="categoria_nombre" type="text" placeholder="Ingrese la nueva categoría">

      {{-- El nombre del error debe coincidir con el del campo para así poder mostrar el error correspondiente --}}
      @error('nuevaCategoria') <p class="text-red-500 text-xs italic font-semibold">{{ $message }}</p> @enderror
    </div>

  </div>

  <div class="flex flex-wrap justify-center -mx-3 mb-6">
    <div class="w-full md:w-2/4 lg:w-1/3 px-3 mb-6 md:mb-0">
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 md:px-3 rounded" value="">Registrar Categoría</button>
    </div>
  </div>
  
  @if(session()->has('mensaje'))
  <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
    <h4 class="text-2xl font-medium leading-tight mb-2">Registrado Exitosamente!</h4>
    <p class="mb-4">
      {{ session('mensaje') }}
    </p>
  
    <hr class="border-green-600 opacity-30">
  </div>
  
  @elseif (session()->has('error'))
  <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700" role="alert">
    <h4 class="text-2xl font-medium leading-tight mb-2">Ops! Algo salió mal.</h4>
    <p class="mb-4">
      {{ session('error') }}
    </p>
  
    <hr class="border-red-600 opacity-30">
  </div>
  @endif
</form>

