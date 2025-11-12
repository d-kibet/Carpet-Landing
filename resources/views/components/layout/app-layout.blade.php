<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#0066cc">

    <title>{{ $title ?? 'Raha Express Automated Carpet Wash - Professional Carpet Cleaning in Nairobi' }}</title>
    <meta name="description" content="{{ $description ?? 'Professional carpet cleaning services in Nairobi with automated machinery. Quick 24-hour turnaround. Serving Lang\'ata and expanding to Mombasa & Eldoret.' }}">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/Raha_logo.jpg') }}">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/Raha_logo.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/Raha_logo.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Mobile Optimization -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Raha Express">

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