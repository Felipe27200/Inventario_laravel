<div class="grid grid-cols-12 bg-blue-100">
    <div class="col-span-12 md:col-span-3 py-3 pl-2">

        <button class="pl-3" @click="open = !open"><i class="fa-solid fa-bars"></i></button>

        <a href="{{ asset('/') }}" class="pl-4 font-semibold text-blue-900 hover:text-blue-700">Inicio</a>
        <a href="{{ route('dashboard') }}" class="pl-4 font-semibold text-blue-900 hover:text-blue-700">Home</a>
    </div>
</div>
