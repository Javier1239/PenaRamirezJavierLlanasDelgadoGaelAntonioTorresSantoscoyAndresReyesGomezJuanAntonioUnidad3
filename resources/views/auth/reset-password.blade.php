<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning - Restablecer Contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="{{ asset('logo.png') }}">
</head>
<body class="bg-gray-200">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-gray-900 via-gray-800 to-black py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <!-- Logo and Main Navigation -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-white mr-6">
                        <a href="/" class="text-white text-3xl font-bold flex items-center">
                            <img src="{{ asset('logo.png') }}" alt="E-learning Logo" class="mr-2 h-20">
                            E-learning
                        </a>
                    </div>
                </div>
                <!-- Back Button -->
                <div>
                    <button onclick="history.back()" class="font-semibold text-white px-4 py-3 rounded-md text-base font-medium bg-blue-600 hover:bg-blue-700 active:bg-blue-800">
                        <i class="fas fa-arrow-left"></i> Atrás
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Reset Password Form -->
    <div class="flex justify-center items-center min-h-screen py-16">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-4xl flex">
            <!-- Form Column -->
            <div class="w-full p-8">
                <h2 class="text-3xl font-bold mb-6 text-center text-gray-900">Restablecer Contraseña</h2>
                
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-2 text-gray-900">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md bg-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                        @error('email')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium mb-2 text-gray-900">Contraseña</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-md bg-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium mb-2 text-gray-900">Confirmar Contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 rounded-md bg-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md">Restablecer Contraseña</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
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
</body>
</html>
