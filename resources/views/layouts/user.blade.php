<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-learning - @yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="icon" href="logo.png">

</head>
<body>
    <div>
        <nav class="bg-gradient-to-r from-gray-900 via-gray-800 to-black py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <!-- Logo and Main Navigation -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0 text-white mr-6">
                            <a href="/" class="text-white text-3xl font-bold flex items-center">
                                <img src="logo.png" alt="E-learning Logo" class="mr-2 h-20">
                                E-learning
                            </a>
                        </div>
                        <!-- Dropdown Menus -->
                        <div class="flex space-x-4 relative">
                            <!-- Dropdown 1 -->
                            <div class="relative">
                                <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(0)">Inicio <i class="bi bi-caret-down-fill"></i></button>
                                <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent0">
                                    <!-- Dropdown Content -->
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-home"></i> - Home</a>
                                    <a href="{{ url('/cursos') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-book"></i> - Cursos</a>
                                </div>
                            </div>
                            <!-- Dropdown 2 -->
                            <div class="relative">
                                <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(1)">Cursos <i class="bi bi-caret-down-fill"></i></button>
                                <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent1">
                                    <!-- Dropdown Content -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-calculator"></i> - Matemáticas</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-flask"></i> - Ciencias</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-history"></i> - Historia</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-language"></i> - Idiomas</a>
                                </div>
                            </div>
                            <!-- Dropdown 3 -->
                            <div class="relative">
                                <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(2)">Ayuda <i class="bi bi-caret-down-fill"></i></button>
                                <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent2">
                                    <!-- Dropdown Content -->
                                    <a href="{{ url('/index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-hands-helping"></i> - Soporte</a>
                                    <a href="{{ url('/faq') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-question-circle"></i> - FAQs</a>
                                    <a href="{{ url('/contacto') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-envelope"></i> - Contacto</a>
                                </div>
                            </div>
                            <!-- Campo de búsqueda -->
                            <div class="relative">
                                <input type="text" class="text-gray-800 placeholder-gray-400 px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-64" placeholder="Buscar...">
                                <button class="absolute right-0 top-0 bottom-0 px-4 py-3 bg-gray-700 text-white rounded-r-md"><i class="fas fa-search"></i></button>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Secondary Navigation and Additional Elements -->
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Authentication Links -->
                        @auth
                        <div class="relative">
                            <button class="text-gray-300 hover:bg-gray-600 hover:text-white px-4 py-3 rounded-md text-base font-medium" onclick="toggleDropdown(3)">{{ Auth::user()->name }} <i class="bi bi-caret-down-fill"></i></button>
                            <div class="absolute z-10 -ml-4 mt-3 transform w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent3">
                                <!-- Dropdown Content -->
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-user"></i> - Perfil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i class="fas fa-sign-out-alt"></i> - Cerrar Sesión</button>
                                </form>
                            </div>
                        </div>
                        @else
                        <div class="ml-4 flex items-center">
                            <a href="/login" class="font-semibold text-white px-4 py-3 rounded-md text-base font-medium bg-blue-600 hover:bg-blue-700 active:bg-blue-800"><i class="fas fa-sign-in-alt"></i> Log in</a>
                            <a href="/register" class="ml-4 font-semibold text-white px-4 py-3 rounded-md text-base font-medium bg-green-600 hover:bg-green-700 active:bg-green-800"><i class="fas fa-user-plus"></i> Register</a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        
        <script>
            // Función para cerrar todos los dropdowns abiertos
            function closeDropdowns() {
                var dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(function(item) {
                    item.classList.add('hidden');
                });
            }
        
            // Función para alternar la visibilidad de un dropdown
            function toggleDropdown(index) {
                var dropdownContent = document.getElementById('dropdownContent' + index);
                dropdownContent.classList.toggle('hidden');
                
                // Ocultar los otros dropdowns
                var dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(function(item, i) {
                    if (i != index) {
                        item.classList.add('hidden');
                    }
                });
            }
        </script>
                
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div><div>@yield('contents')</div></div>
            </div>
        </main>
    </div>
</body>
<br>
<footer class="bg-gradient-to-r from-gray-900 via-gray-800 to-black text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between">
            <!-- Logo and Description -->
            <div class="mb-8 md:mb-0">
                <h3 class="text-lg font-bold mb-2">E-learning</h3>
                <p class="text-sm">Ofrecemos una amplia gama de cursos en línea para ayudarte a alcanzar tus metas educativas y profesionales.</p>
            </div>
            <!-- Navigation Links -->
            <div class="flex space-x-8">
                <div>
                    <h4 class="font-semibold mb-2">Enlaces</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white">Inicio</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Cursos</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Soporte</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-2">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Política de Privacidad</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Términos del Servicio</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Cookies</a></li>
                    </ul>
                </div>
            </div>
            <!-- Social Media Links -->
            <div>
                <h4 class="font-semibold mb-2">Síguenos</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center text-sm text-gray-500">
            <p>© 2024 E-learning. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
</html>
