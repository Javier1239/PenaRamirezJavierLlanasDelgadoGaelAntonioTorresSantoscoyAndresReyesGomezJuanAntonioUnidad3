@extends('layouts.user')
 
@section('title', 'home')
 
@section('contents')
<main class="bg-gray-200">
    <!-- Contenido principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Columna 1: Texto con precio y botón de compra -->
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-4">Descubre nuestros cursos premium</h2>
                <p class="text-xl mb-4">Aprovecha esta oportunidad única para mejorar tus habilidades y avanzar en tu carrera profesional.</p>
                <p class="text-2xl font-semibold mb-4">$99 <span class="text-sm font-normal">/mes</span></p>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-blue-600">Empezar a comprar</button>
            </div>

            <!-- Columna 2: Sección de imágenes -->
            <div class="grid grid-cols-3 gap-4">
                <div class="relative">
                    <img src="https://st2.depositphotos.com/3580719/10635/v/950/depositphotos_106356176-stock-illustration-seamless-background-with-formulas-and.jpg" alt="Curso 1" class="rounded-lg w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                        <a href="#" class="text-white font-semibold">Ver detalles</a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://static.vecteezy.com/system/resources/previews/000/468/875/original/science-concept-flat-vector.jpg" alt="Curso 2" class="rounded-lg w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                        <a href="#" class="text-white font-semibold">Ver detalles</a>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://portalacademico.cch.unam.mx/sites/default/files/portadas/2019-07/HistoriaUniversal1-Portada.jpg" alt="Curso 3" class="rounded-lg w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                        <a href="#" class="text-white font-semibold">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-8">Cursos Destacados</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                    <img src="https://th.bing.com/th/id/OIP.SA5Yb9rn6dYMrtEidpNbNQHaHa?rs=1&pid=ImgDetMain" alt="Curso 1" class="w-full h-64 object-cover">
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
                <!-- Card 2 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                    <img src="https://th.bing.com/th/id/R.fd9bfc64afa34fc1481aee3e3ac481e3?rik=GIENcqGs5WxS1g&pid=ImgRaw&r=0" alt="Curso 1" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                        <a href="#" class="text-white font-semibold">Ver detalles</a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Curso de Ciencias</h3>
                        <p class="text-gray-700 mb-6">Explora los principios básicos de la ciencia y realiza experimentos prácticos para entender el mundo que te rodea.</p>
                        <div class="flex items-center justify-center mb-4">
                            <p class="text-2xl font-semibold text-blue-500">$79</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                    <img src="https://th.bing.com/th/id/R.304d3de6a5bdd33de5f93fee85c9cf6a?rik=U43FzynYv8%2fE%2bw&riu=http%3a%2f%2fpep.ieepo.oaxaca.gob.mx%2frecursos%2fmultimedia%2fILCE_Biblioteca_digital%2fColibri%2ftumba%2fimgs%2f10.jpg&ehk=z%2fBlOeaSmYGf4KqGYYOM5DPHzXPPSZKxn%2bT21LZhyAs%3d&risl=&pid=ImgRaw&r=0" alt="Curso 1" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                        <a href="#" class="text-white font-semibold">Ver detalles</a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Curso de Historia</h3>
                        <p class="text-gray-700 mb-6">Descubre los eventos más importantes de la historia mundial y comprende cómo han moldeado el presente.</p>
                        <div class="flex items-center justify-center mb-4">
                            <p class="text-2xl font-semibold text-blue-500">$89</p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden relative">
                    <img src="https://www.elsoldetampico.com.mx/incoming/udte7j-shutterstock_637031407.jpg/ALTERNATES/LANDSCAPE_1140/shutterstock_637031407.jpg" alt="Curso 1" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg opacity-0 hover:opacity-100 transition duration-300">
                        <a href="#" class="text-white font-semibold">Ver detalles</a>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Curso de Idiomas</h3>
                        <p class="text-gray-700 mb-6">Aprende un nuevo idioma de manera efectiva y comunícate con confianza en situaciones cotidianas y profesionales.</p>
                        <div class="flex items-center justify-center mb-4">
                            <p class="text-2xl font-semibold text-blue-500">$69</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-8">¿Qué esperar de E-learning?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Punto 1 -->
                <div class="flex items-center justify-center bg-white shadow-xl rounded-lg p-6">
                    <i class="fas fa-chalkboard-teacher text-6xl text-blue-500 mr-4"></i>
                    <p class="text-lg font-semibold">Profesores Expertos</p>
                </div>
                <!-- Punto 2 -->
                <div class="flex items-center justify-center bg-white shadow-xl rounded-lg p-6">
                    <i class="fas fa-book-open text-6xl text-blue-500 mr-4"></i>
                    <p class="text-lg font-semibold">Contenido de Calidad</p>
                </div>
                <!-- Punto 3 -->
                <div class="flex items-center justify-center bg-white shadow-xl rounded-lg p-6">
                    <i class="fas fa-users text-6xl text-blue-500 mr-4"></i>
                    <p class="text-lg font-semibold">Comunidad Activa</p>
                </div>
                <!-- Punto 4 -->
                <div class="flex items-center justify-center bg-white shadow-xl rounded-lg p-6">
                    <i class="fas fa-certificate text-6xl text-blue-500 mr-4"></i>
                    <p class="text-lg font-semibold">Certificaciones Reconocidas</p>
                </div>
                <!-- Punto 5 -->
                <div class="flex items-center justify-center bg-white shadow-xl rounded-lg p-6">
                    <i class="fas fa-calendar-alt text-6xl text-blue-500 mr-4"></i>
                    <p class="text-lg font-semibold">Flexibilidad de Horarios</p>
                </div>
                <!-- Punto 6 -->
                <div class="flex items-center justify-center bg-white shadow-xl rounded-lg p-6">
                    <i class="fas fa-globe-americas text-6xl text-blue-500 mr-4"></i>
                    <p class="text-lg font-semibold">Accesible desde Cualquier Lugar</p>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection