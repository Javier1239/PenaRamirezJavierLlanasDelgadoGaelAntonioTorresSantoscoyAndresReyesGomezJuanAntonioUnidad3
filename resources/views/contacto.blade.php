@extends('layouts.user')
 
@section('title', 'Contactanos')
 
@section('contents')
<main class="bg-gray-200">
    <!-- Contenido principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Columna 1: Texto con precio y botón de compra -->
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-4">Contáctanos</h2>
                <p class="text-xl mb-4">¿Tienes alguna pregunta, comentario o solicitud? ¡Estamos aquí para ayudarte!</p>
                <p class="text-xl mb-4">Nuestra ubicación: Av. Educación #123, Ciudad de Ejemplo, País.</p>
            </div>

            <!-- Columna 2: Formulario de Contacto -->
            <div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden p-8">
                    <form action="{{ route('guardarInformacion') }}" method="POST">
                        @csrf <!-- Asegúrate de incluir el token CSRF para proteger tu formulario -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-900">Nombre</label>
                            <input type="text" id="name" name="nombre" class="w-full px-4 py-2 rounded-md bg-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                    
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-900">Correo Electrónico</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md bg-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                    
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-900">Mensaje</label>
                            <textarea id="message" name="mensaje" rows="4" class="w-full px-4 py-2 rounded-md bg-gray-200 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                        </div>
                    
                        <div class="flex items-center justify-end">
                            <button type="submit" class="py-3 px-6 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md">Enviar Mensaje</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</main>

@endsection