<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-900">
    
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="{{ url('/') }}" class="text-lg font-bold">My Pinterest</a>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        © {{ date('Y') }} My Pinterest. All rights reserved.
    </footer>
</body>
</html>
