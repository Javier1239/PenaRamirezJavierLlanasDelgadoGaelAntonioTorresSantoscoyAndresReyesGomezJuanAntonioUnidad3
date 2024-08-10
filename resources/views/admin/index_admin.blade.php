<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dashboard de Administrador">
    <meta name="author" content="TuNombre">
    <title>E-learning - Dashboard Admin</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="logo.png">
</head>
<body>
    <!-- Navegación -->
    <nav class="bg-gradient-to-r from-gray-900 via-gray-800 to-black py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="text-white text-3xl font-bold flex items-center">
                        <img src="logo.png" alt="E-learning Logo" class="mr-2 h-20">
                        E-learning Admin
                    </div>
                </div>
                <!-- Botón de Cerrar Sesión -->
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="font-semibold text-white px-4 py-3 rounded-md text-base font-medium bg-red-600 hover:bg-red-700 active:bg-red-800"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white h-screen px-4 py-8">
            <ul class="space-y-4">
                <li><a href="#" class="block text-lg font-medium hover:bg-gray-700 px-4 py-2 rounded-md"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#" class="block text-lg font-medium hover:bg-gray-700 px-4 py-2 rounded-md"><i class="fas fa-users"></i> Usuarios</a></li>
                <li><a href="#" class="block text-lg font-medium hover:bg-gray-700 px-4 py-2 rounded-md"><i class="fas fa-book"></i> Cursos</a></li>
                <li><a href="#" class="block text-lg font-medium hover:bg-gray-700 px-4 py-2 rounded-md"><i class="fas fa-chart-bar"></i> Reportes</a></li>
                <li><a href="#" class="block text-lg font-medium hover:bg-gray-700 px-4 py-2 rounded-md"><i class="fas fa-cogs"></i> Configuraciones</a></li>
            </ul>
        </aside>

        <!-- Contenido -->
        <main class="flex-1 bg-gray-100 p-6">
            <h1 class="text-2xl font-bold mb-6">Bienvenido al Dashboard de Administrador</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Tarjeta 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-gray-500"><i class="fas fa-users fa-2x"></i></div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold">Usuarios</h2>
                            <p class="text-gray-600">Gestionar usuarios</p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-gray-500"><i class="fas fa-book fa-2x"></i></div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold">Cursos</h2>
                            <p class="text-gray-600">Gestionar cursos</p>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center">
                        <div class="text-gray-500"><i class="fas fa-chart-bar fa-2x"></i></div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold">Reportes</h2>
                            <p class="text-gray-600">Ver reportes</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 via-gray-800 to-black text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-sm text-gray-500">
                <p>© 2024 E-learning. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
