
<div>
    {{-- Con la propiedad atributes de blade components, es posible
        enviar la url específica --}}        
    <a {{$attributes}} class="font-semibold text-blue-800 hover:text-blue-500">{{ $slot }}</a>
</div>
