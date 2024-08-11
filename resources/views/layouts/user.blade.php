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
        <nav class="bg-white shadow-lg py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <!-- Logo and Main Navigation -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-6">
                            <a href="/" class="text-gray-800 text-3xl font-bold flex items-center">
                                <img src="logo.png" alt="E-learning Logo" class="mr-2 h-16">
                                E-learning
                            </a>
                        </div>
                        <!-- Dropdown Menus -->
                        <div class="flex space-x-6">
                            <!-- Dropdown 1 -->
                            <div class="relative">
                                <button class="text-gray-600 hover:text-blue-600 px-4 py-2 text-base font-medium border border-gray-300 rounded-md" onclick="toggleDropdown(0)">
                                    Inicio <i class="bi bi-caret-down-fill"></i>
                                </button>
                                <div class="absolute z-10 mt-2 w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent0">
                                    <!-- Dropdown Content -->
                                    <a href="{{ url('/') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Home</a>
                                    <a href="{{ url('/cursos') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cursos</a>
                                </div>
                            </div>
                            <!-- Dropdown 2 -->
                            <div class="relative">
                                <button class="text-gray-600 hover:text-blue-600 px-4 py-2 text-base font-medium border border-gray-300 rounded-md" onclick="toggleDropdown(1)">
                                    Cursos <i class="bi bi-caret-down-fill"></i>
                                </button>
                                <div class="absolute z-10 mt-2 w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent1">
                                    <!-- Dropdown Content -->
                                    <a href="#" onclick="openModal('Matematicas')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Matemáticas</a>
                                    <a href="#" onclick="openModal('Ciencias')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ciencias</a>
                                    <a href="#" onclick="openModal('Historia')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Historia</a>
                                    <a href="#" onclick="openModal('Idiomas')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Idiomas</a>
                                </div>
                            </div>
                            <!-- Dropdown 3 -->
                            <div class="relative">
                                <button class="text-gray-600 hover:text-blue-600 px-4 py-2 text-base font-medium border border-gray-300 rounded-md" onclick="toggleDropdown(2)">
                                    Ayuda <i class="bi bi-caret-down-fill"></i>
                                </button>
                                <div class="absolute z-10 mt-2 w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent2">
                                    <!-- Dropdown Content -->
                                    <a href="{{ url('/index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Soporte</a>
                                    <a href="{{ url('/faq') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">FAQs</a>
                                    <a href="{{ url('/contacto') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Secondary Navigation and Additional Elements -->
                    <div class="hidden md:flex items-center space-x-6">
                        <!-- Campo de búsqueda -->
                        <div class="relative">
                            <input type="text" class="text-gray-800 placeholder-gray-400 px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 w-64" placeholder="Buscar...">
                            <button class="absolute right-0 top-0 bottom-0 px-4 py-2 bg-blue-600 text-white rounded-r-full">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <!-- Authentication Links -->
                        @auth
                        <div class="relative">
                            <button class="text-gray-600 hover:text-blue-600 px-4 py-2 text-base font-medium" onclick="toggleDropdown(3)">{{ Auth::user()->name }} <i class="bi bi-caret-down-fill"></i></button>
                            <div class="absolute z-10 mt-2 w-48 py-2 bg-white rounded-md shadow-lg hidden" id="dropdownContent3">
                                <!-- Dropdown Content -->
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perfil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar Sesión</button>
                                </form>
                            </div>
                        </div>
                        @else
                        <div class="ml-4 flex items-center">
                            <a href="/login" class="font-semibold text-gray-800 px-4 py-2 rounded-full text-base font-medium bg-blue-500 hover:bg-blue-600">Log in</a>
                            <a href="/register" class="ml-4 font-semibold text-gray-800 px-4 py-2 rounded-full text-base font-medium bg-green-500 hover:bg-green-600">Register</a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        
        
        
        <!-- Modal para Curso de Matemáticas -->
        <div id="modalMatematicas" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-xl max-w-3xl relative">
                <h3 class="text-xl font-semibold mb-4">Temas del Curso de Matemáticas</h3>
                <div class="grid grid-cols-3 gap-4 text-gray-700 mb-6">
                    <div>Valor posicional decimal</div>
                    <div>Divide fracciones</div>
                    <div>El pensamiento algebraico</div>
                    <div>Suma decimales</div>
                    <div>Multiplica decimales</div>
                    <div>Convertir unidades de medida</div>
                    <div>Resta decimales</div>
                    <div>Divide decimales</div>
                    <div>Las gráficas de línea</div>
                    <div>Suma y resta fracciones</div>
                    <div>Potencias de diez</div>
                    <div>Propiedades de las figuras</div>
                    <div>Multiplicación y división de varios dígitos</div>
                    <div>El volumen</div>
                    <div>Plano coordenado</div>
                    <div>Multiplica fracciones</div>
                </div>
                <div class="flex justify-end">
                    <button id="closeModalMatematicas" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">Cerrar</button>
                </div>
            </div>
            <div id="modalOverlayMatematicas" class="fixed"></div>
        </div>
        <!-- Modal para Curso de Ciencias -->
        <div id="modalCiencias" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-xl max-w-3xl relative">
                <h3 class="text-xl font-semibold mb-4">Temas del Curso de Ciencias</h3>
                <div class="grid grid-cols-3 gap-4 text-gray-700 mb-6">
                    <div>Principios de la Física</div>
                    <div>Química Básica</div>
                    <div>Biología Celular</div>
                    <div>La Energía</div>
                    <div>Ecología y Medio Ambiente</div>
                    <div>Astronomía</div>
                    <div>El Método Científico</div>
                    <div>Experimentos Prácticos</div>
                    <div>Avances Científicos</div>
                </div>
                <div class="flex justify-end">
                    <button id="closeModalCiencias" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">Cerrar</button>
                </div>
            </div>
            <div id="modalOverlayCiencias" class="fixed"></div>
        </div>
        <!-- Modal para Curso de Historia -->
        <div id="modalHistoria" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-xl max-w-3xl relative">
                <h3 class="text-xl font-semibold mb-4">Temas del Curso de Historia</h3>
                <div class="grid grid-cols-3 gap-4 text-gray-700 mb-6">
                    <div>Historia Antigua</div>
                    <div>Edad Media</div>
                    <div>Revolución Industrial</div>
                    <div>Guerras Mundiales</div>
                    <div>Historia Moderna</div>
                    <div>Civilizaciones Prehispánicas</div>
                    <div>Historia de América</div>
                    <div>Movimientos Sociales</div>
                    <div>Personajes Históricos</div>
                </div>
                <div class="flex justify-end">
                    <button id="closeModalHistoria" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">Cerrar</button>
                </div>
            </div>
            <div id="modalOverlayHistoria" class="fixed"></div>
        </div>
        <!-- Modal para Curso de Idiomas -->
        <div id="modalIdiomas" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-xl max-w-3xl relative">
                <h3 class="text-xl font-semibold mb-4">Temas del Curso de Idiomas</h3>
                <div class="grid grid-cols-3 gap-4 text-gray-700 mb-6">
                    <div>Gramática Básica</div>
                    <div>Vocabulario Esencial</div>
                    <div>Conversación Diaria</div>
                    <div>Pronunciación Correcta</div>
                    <div>Comprensión Auditiva</div>
                    <div>Lectura y Escritura</div>
                    <div>Expresiones Comunes</div>
                    <div>Entonación y Ritmo</div>
                    <div>Aspectos Culturales</div>
                </div>
                <div class="flex justify-end">
                    <button id="closeModalIdiomas" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded">Cerrar</button>
                </div>
            </div>
            <div id="modalOverlayIdiomas" class="fixed"></div>
        </div>

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

            // Función para abrir el modal correspondiente
                function openModal(modalName) {
                    // Ocultar todos los modales
                    const modals = document.querySelectorAll('[id^=modal]');
                    modals.forEach(modal => modal.classList.add('hidden'));

                    // Mostrar el modal correspondiente
                    const modal = document.getElementById(`modal${modalName}`);
                    const overlay = document.getElementById(`modalOverlay${modalName}`);
                    if (modal) modal.classList.remove('hidden');
                    if (overlay) overlay.classList.remove('hidden');
                }

                // Función para cerrar los modales
                function closeModal(modalName) {
                    const modal = document.getElementById(`modal${modalName}`);
                    const overlay = document.getElementById(`modalOverlay${modalName}`);
                    if (modal) modal.classList.add('hidden');
                    if (overlay) overlay.classList.add('hidden');
                }

                // Agregar event listeners a los botones de cierre y overlays
                document.querySelectorAll('[id^=closeModal]').forEach(button => {
                    button.addEventListener('click', () => {
                        const modalName = button.id.replace('closeModal', '');
                        closeModal(modalName);
                    });
                });

                document.querySelectorAll('[id^=modalOverlay]').forEach(overlay => {
                    overlay.addEventListener('click', () => {
                        const modalName = overlay.id.replace('modalOverlay', '');
                        closeModal(modalName);
                    });
                });
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
