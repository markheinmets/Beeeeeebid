<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen bg-gray-100 flex ">
            @include('layouts.navigation')

            <div class="flex flex-col fixed right-0 top-0 bottom-0 left-96 overflow-y-auto">
                <!-- Page Heading -->
                <header class="bg-white h-24 flex items-center p-8 fixed top-0 right-0 left-96 z-50">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex items-center">
                         
                        <div class="w-full"></div>
                        <div class="flex gap-2">
                            <a href="#" class=" hover:bg-white hover:text-black text-white shadow-md py-2 px-6 bg-[#FB9333] rounded-full">Blogi</a>
                            <a href="#" class="  text-white shadow-md py-2 px-6 bg-[#B90E0A] rounded-full">Numbrid</a>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="pt-24">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
