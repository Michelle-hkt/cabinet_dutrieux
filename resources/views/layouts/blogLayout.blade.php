<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', config('app.name', 'Laravel'))
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Header public --}}
    @include('components.publicLayout.public-blog-header')

    {{-- Contenu de la page --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer public --}}
    @include('components.publicLayout.public-footer')

    

    <x-whatsapp-widget />
</body>
</html>