<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-screen font-sans text-gray-900 bg-[url('/public/img/waves-2.svg')] bg-cover antialiased bg-[#f3f7f9]">
        <div class="min-h-screen flex flex-col justify-between items-center pt-6 sm:pt-0">
            <div class="mt-12">
                <a href="/">
                    <x-application-logo-dark class="w-42" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <img class="w-full relative" src="{{ asset('img/waves-2.svg') }}">
        </div>
    </body>
</html>
