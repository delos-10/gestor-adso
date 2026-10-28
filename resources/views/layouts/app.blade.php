<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Gestor ADSO')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Esta línea es la que hace la magia de cargar Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen font-sans antialiased text-gray-900">
    
    <nav class="bg-white shadow-sm border-b border-gray-200 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/aprendices" class="text-xl font-bold text-blue-600">Gestor ADSO</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/aprendices" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Aprendices
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Aquí se inyecta el contenido de index, create o edit -->
    <main>
        @yield('content')
    </main>

</body>
</html>