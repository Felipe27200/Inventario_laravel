<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ open: true }">
            @livewire('nav-menu')

            <div class="grid grid-cols-12">
                @livewire('barra-lateral')

                <div :class="open ? 'col-span-10' : 'col-span-12'" class="pl-2 pt-2">
                    {{ $contenido }}
                </div>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
