<!DOCTYPE html>
<html lang="en" data-theme="{{ session('theme', 'light') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MilesConsult</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Include Kanit font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        .hover-img {
            z-index: 10;
        }
    </style>
</head>

<body>
    @include('components.navbar')
    @yield('slider')
    <div class="mx-auto">
        @yield('content')
    </div>
    @include('components.footer')

    {{-- Javascript --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const html = document.documentElement;
        const theme = localStorage.getItem('theme');

        if (theme === 'dark') {
            html.setAttribute('data-theme', 'dark');
        }

        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('theme-toggle');
            if (toggle) {
                toggle.addEventListener('click', () => {
                    const isDark = html.getAttribute('data-theme') === 'dark';
                    html.setAttribute('data-theme', isDark ? 'light' : 'dark');
                    localStorage.setItem('theme', isDark ? 'light' : 'dark');
                });
            }
        });
    </script>

</body>

</html>
