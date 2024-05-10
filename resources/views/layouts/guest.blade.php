<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

        <title>{{ config('Horoskope', 'Horoskope') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased fondo-espacial">
        <div class=" fondo flex justify-center items-center ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 pt-2">
                        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                            {{ $slot }}
                        </div>
                    </div>                   
                </div>
            </div>
        </div> 
</body>

</html>
