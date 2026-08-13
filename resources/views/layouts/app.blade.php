<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Dutrieux Notaires') }}
    </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-color: #f8f7f5;
        }

        .admin-layout {
            min-height: 100vh;
        }

        .admin-main {
            min-width: 0;
        }
    </style>
</head>

<body>

    <div class="admin-layout d-flex">

        @include('layouts.navigation')

        <main class="admin-main flex-grow-1">

            {{ $slot }}

        </main>

    </div>

</body>

</html>