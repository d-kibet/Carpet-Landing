<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Raha Express Automated Carpet Wash - Professional Carpet Cleaning in Nairobi' }}</title>
    <meta name="description" content="{{ $description ?? 'Professional carpet cleaning services in Nairobi with automated machinery. Quick 24-hour turnaround. Serving Lang\'ata and expanding to Mombasa & Eldoret.' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-stone-50 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <x-layout.header />

        <!-- Main Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <x-layout.footer />
    </div>
</body>
</html>