@extends('layouts.user')
 
@section('title', 'Busqueda')
 
@section('contents')

<section class="bg-gray-200 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-8">Resultado de la Búsqueda</h2>
        <p class="text-lg text-gray-800 mb-8">Este es el resultado de tu búsqueda de un curso de matemáticas:</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Curso de Matemáticas -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                <img src="https://th.bing.com/th/id/OIP.Sdf4yv18X6WeNzQvH9u7swHaEo?rs=1&pid=ImgDetMain" alt="Curso de Matemáticas" class="w-full h-64 object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                    <a href="#" class="text-white font-semibold">Ver detalles</a>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Curso de Matemáticas</h3>
                    <p class="text-gray-700 mb-6">Aprende los conceptos fundamentales de matemáticas y mejora tu habilidad para resolver problemas.</p>
                    <div class="flex items-center justify-center mb-4">
                        <p class="text-2xl font-semibold text-blue-500">$99</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection