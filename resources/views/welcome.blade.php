@extends('layouts.user')
 
@section('title', 'home')
 
@section('contents')
<main class="bg-gray-200">
    <!-- Contenido principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gray-100 rounded-lg shadow-md">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Columna 1: Texto con precio y botón de compra -->
            <div class="flex flex-col justify-center text-center lg:text-left">
                <h2 class="text-4xl font-bold mb-6 text-gray-800">Explora nuestros cursos premium</h2>
                <p class="text-xl mb-6 text-gray-700">Esta es tu oportunidad de elevar tus habilidades y dar un paso adelante en tu carrera.</p>
                <p class="text-3xl font-bold mb-6 text-blue-600">$99 <span class="text-lg font-normal text-gray-600">/mes</span></p>
                <button class="bg-gradient-to-r from-green-400 to-blue-500 text-white px-8 py-4 rounded-full text-lg font-bold hover:from-green-500 hover:to-blue-600 transition-transform transform hover:scale-105 shadow-lg">Compra Ahora</button>
            </div>
    
            <!-- Columna 2: Sección de imágenes -->
            <div class="grid grid-cols-3 gap-6">
                <div class="relative group">
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <a href="#" class="text-white font-bold">Ver detalles</a>
                    </div>
                    <img src="https://st2.depositphotos.com/3580719/10635/v/950/depositphotos_106356176-stock-illustration-seamless-background-with-formulas-and.jpg" alt="Curso 1" class="w-full h-full object-cover object-center rounded-lg">
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <a href="#" class="text-white font-bold">Ver detalles</a>
                    </div>
                    <img src="https://static.vecteezy.com/system/resources/previews/000/468/875/original/science-concept-flat-vector.jpg" alt="Curso 2" class="w-full h-full object-cover object-center rounded-lg">
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                        <a href="#" class="text-white font-bold">Ver detalles</a>
                    </div>
                    <img src="https://portalacademico.cch.unam.mx/sites/default/files/portadas/2019-07/HistoriaUniversal1-Portada.jpg" alt="Curso 3" class="w-full h-full object-cover object-center rounded-lg">
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
                        <a href="#" id="openModalMatematicas" class="text-white font-semibold">Ver detalles</a>
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
                        <a href="#" id="openModalCiencias" class="text-white font-semibold">Ver detalles</a>
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
                        <a href="#" id="openModalHistoria" class="text-white font-semibold">Ver detalles</a>
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
                        <a href="#" id="openModalIdiomas" class="text-white font-semibold">Ver detalles</a>
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

<!-- JavaScript para manejar los modales -->
<script>
    // Funcionalidad para abrir y cerrar el modal del curso de Matemáticas
    document.getElementById('openModalMatematicas').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('modalMatematicas').classList.remove('hidden');
    });

    document.getElementById('closeModalMatematicas').addEventListener('click', function() {
        document.getElementById('modalMatematicas').classList.add('hidden');
    });

    document.getElementById('modalOverlayMatematicas').addEventListener('click', function() {
        document.getElementById('modalMatematicas').classList.add('hidden');
    });

    // Funcionalidad para abrir y cerrar el modal del curso de Ciencias
    document.getElementById('openModalCiencias').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('modalCiencias').classList.remove('hidden');
    });

    document.getElementById('closeModalCiencias').addEventListener('click', function() {
        document.getElementById('modalCiencias').classList.add('hidden');
    });

    document.getElementById('modalOverlayCiencias').addEventListener('click', function() {
        document.getElementById('modalCiencias').classList.add('hidden');
    });

    // Funcionalidad para abrir y cerrar el modal del curso de Historia
    document.getElementById('openModalHistoria').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('modalHistoria').classList.remove('hidden');
    });

    document.getElementById('closeModalHistoria').addEventListener('click', function() {
        document.getElementById('modalHistoria').classList.add('hidden');
    });

    document.getElementById('modalOverlayHistoria').addEventListener('click', function() {
        document.getElementById('modalHistoria').classList.add('hidden');
    });

    // Funcionalidad para abrir y cerrar el modal del curso de Idiomas
    document.getElementById('openModalIdiomas').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('modalIdiomas').classList.remove('hidden');
    });

    document.getElementById('closeModalIdiomas').addEventListener('click', function() {
        document.getElementById('modalIdiomas').classList.add('hidden');
    });

    document.getElementById('modalOverlayIdiomas').addEventListener('click', function() {
        document.getElementById('modalIdiomas').classList.add('hidden');
    });
</script>
</main>

@endsection