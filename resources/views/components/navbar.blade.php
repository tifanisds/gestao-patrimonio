<nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 shadow-sm transition-colors duration-300">
    <div class="px-4 md:px-8 py-4 flex items-center justify-between">
        <!-- Left: Menu Toggle (Mobile) & Breadcrumb -->
        <div class="flex items-center gap-4">
            <button onclick="toggleSidebar()" class="md:hidden text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <div class="hidden md:block text-sm text-gray-500 dark:text-gray-400">
                <span>@section('breadcrumb', 'Dashboard')@show</span>
            </div>
        </div>

        <!-- Right: User Menu & Theme Toggle -->
        <div class="flex items-center gap-6">
            <!-- Theme Toggle Button -->
            <button onclick="toggleTheme()" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200" title="Alternar tema">
                <!-- Sun Icon (light mode) -->
                <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.536l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm5.657-9.193a1 1 0 00-1.414 0l-.707.707A1 1 0 005.05 6.464l.707-.707a1 1 0 001.414-1.414zM5 17a1 1 0 100 2H4a1 1 0 100-2h1z" clip-rule="evenodd"></path>
                </svg>
                <!-- Moon Icon (dark mode) -->
                <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </button>

            <!-- User Menu -->
            <div class="relative group">
                <button class="flex items-center gap-3 p-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-900 to-blue-700 flex items-center justify-center text-white text-sm font-bold">
                        U
                    </div>
                    <span class="hidden sm:inline text-sm font-medium">Usuário</span>
                </button>
                
                <!-- Dropdown Menu -->
                <div class="absolute right-0 w-48 mt-2 bg-white dark:bg-gray-700 rounded-lg shadow-lg border border-gray-200 dark:border-gray-600 invisible group-hover:visible transition-all duration-200 z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 first:rounded-t-lg">Meu Perfil</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Configurações</a>
                    <hr class="my-1 border-gray-200 dark:border-gray-600">
                    <a href="#" class="block px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-600 last:rounded-b-lg">Sair</a>
                </div>
            </div>
        </div>
    </div>
</nav>
