<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Portfolio') }}</title>

    {{-- This loads your JS + CSS via Vite --}}
    @vite('resources/js/app.js')

    {{-- Allows Inertia to manage <head> tags --}}
    @inertiaHead
</head>
<body class="antialiased">
    {{-- This is where Vue pages render --}}
    @inertia
</body>
</html>

