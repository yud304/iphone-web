<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JualiPhone</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navbar -->
    <nav id="navbar" class="bg-white shadow-sm sticky top-0 z-50 transition-colors duration-300">
        <div class="container mx-auto px-4 py-2 flex justify-center transition-colors duration-300">
            <!-- Brand -->
            <a id="brand" href="{{ url('/') }}" class="text-2xl font-extrabold text-orange-600 transition-colors duration-300">
                JualiPhone.com
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-orange-600 text-white text-center py-4 w-full shadow-inner">
        <p>&copy; {{ date('Y') }} JualiPhone. All rights reserved.</p>
    </footer>

    <!-- Scroll Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbar = document.getElementById('navbar');
            const brand = document.getElementById('brand');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 10) {
                    navbar.classList.remove('bg-white-600');
                    navbar.classList.add('bg-orange-600');
                    brand.classList.remove('text-orange-600');
                    brand.classList.add('text-white');
                } else {
                    navbar.classList.remove('bg-orange-600');
                    navbar.classList.add('bg-white-600');
                    brand.classList.remove('text-white');
                    brand.classList.add('text-orange-600');
                }
            });
        });
    </script>
</body>
</html>
