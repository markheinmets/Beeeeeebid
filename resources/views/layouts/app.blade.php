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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased scroll-smooth">
        <div class="min-h-screen flex ">
            @include('layouts.navigation')

            <div class="flex flex-col fixed right-0 top-0 bottom-0 left-0 lg:left-48 xl:left-96 overflow-y-auto">
                <!-- Page Heading -->
                <header class="bg-white h-24 flex items-center p-8 fixed top-0 right-0 left-0 lg:left-48 xl:left-96 z-50">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex items-center">
                        <div class="w-full"></div>
                        <div class="flex gap-2">
                            <a href="{{ route('blog') }}" class=" hover:bg-[#fb9111]/80 hover:text-black text-white shadow-md py-2 px-6 bg-[#FB9333] transition-colors ease-in rounded-full">Blogi</a>
                            <a href="{{ route('numbers') }}" class="  text-white shadow-md py-2 px-6 bg-[#B90E0A] rounded-full hover:bg-red-500 transition-colors ease-in">Numbrid</a>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="pt-24">
                    {{ $slot }}
                    <footer class="bg-[#FFDFC1] py-5">
                        <div class="contents text-center">
                            <p class="text-[26px]">Meie info on üle vaadatud </p>
                            <p class="text-[26px] text-[#fb9333]">spetsialistide poolt</p>
                        </div>
                    </footer>
                </main>
            </div>
        </div>
    </body>
</html>

