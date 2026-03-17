<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestão de Patrimônio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-800">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            @include('components.navbar')

            <!-- Content Area -->
            <main class="flex-1 overflow-auto">
                <div class="p-4 md:p-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Dark Mode Toggle Script -->
    <script>
        // Verificar preferência de tema salva ou preferência do sistema
        function initTheme() {
            const htmlElement = document.documentElement;
            const savedTheme = localStorage.getItem('theme');
            
            if (savedTheme) {
                htmlElement.classList.toggle('dark', savedTheme === 'dark');
            } else {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                htmlElement.classList.toggle('dark', prefersDark);
            }
        }
        
        window.toggleTheme = function() {
            const htmlElement = document.documentElement;
            htmlElement.classList.toggle('dark');
            
            const isDark = htmlElement.classList.contains('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        }
        
        initTheme();
    </script>
</body>
</html>
