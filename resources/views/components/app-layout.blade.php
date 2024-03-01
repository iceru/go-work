<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Go Work</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    {{-- Initialize CSS and JS From Vite --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Includes Navigation --}}
    @include('components.navigation')

    {{-- Content Here --}}
    {{ $slot }}

    {{-- Includes Footer --}}
    @include('components.footer')

</body>

</html>
