<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')

    <style>
        /* Skip links */
        .skip-link {
            position: absolute;
            left: -9999px;
            top: auto;
            background: #000;
            color: #fff;
            padding: 8px;
            z-index: 9999;
        }

        .skip-link:focus {
            left: 10px;
            top: 10px;
        }

        /* Scroll to top */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            font-size: 18px;
            background: #000;
            color: #fff;
            padding: 10px 12px;
            border-radius: 50%;
            z-index: 999;
            cursor: pointer;
        }

        .scroll-to-top.show {
            display: block;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <!-- Skip links -->
    <a href="#content" class="skip-link">
        <i class="fa-solid fa-arrow-down"></i> Skip to content
    </a>
    <a href="#footer" class="skip-link">
        <i class="fa-solid fa-arrow-down-to-line"></i> Skip to footer
    </a>

    <!-- Scroll to top button -->
    <a id="scrollToTop" class="scroll-to-top" title="Scroll to top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <!-- Navigation -->
    @include('components.nav')

    <!-- Main content -->
    <main id="content" class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    @yield('footer_scripts')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Scroll to top button
            const scrollBtn = document.getElementById('scrollToTop');
            window.addEventListener('scroll', () => {
                scrollBtn.classList.toggle('show', window.scrollY > 300);
            });
            scrollBtn.addEventListener('click', e => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>

</body>

</html>
