<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Google Fonts: Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-...isi hash integrity dari CDN..."
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />


    <!-- Vite CSS -->
    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Script Section --}}
    <script>
        const toggleButton = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggleButton?.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <!-- Vite JS (optional) -->
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
