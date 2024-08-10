@extends('layouts.user')
 
@section('title', 'FAQs')
 
@section('contents')
<main class="bg-gray-200">
    <section class="bg-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-8">Preguntas Frecuentes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Pregunta 1 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">¿Cuáles son los requisitos para inscribirme?</h3>
                        <p class="text-gray-700 mb-6">Para inscribirte en nuestros cursos solo necesitas tener acceso a internet y una cuenta de correo electrónico.</p>
                    </div>
                </div>
                <!-- Pregunta 2 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">¿Cómo puedo acceder al contenido de los cursos?</h3>
                        <p class="text-gray-700 mb-6">Una vez te inscribes en nuestros cursos, recibirás acceso a una plataforma en línea donde podrás acceder al contenido de los cursos en cualquier momento y desde cualquier lugar.</p>
                    </div>
                </div>
                <!-- Pregunta 3 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">¿Los cursos ofrecen certificados de finalización?</h3>
                        <p class="text-gray-700 mb-6">Sí, al completar satisfactoriamente un curso, recibirás un certificado de finalización que podrás descargar y compartir en tus redes sociales o incluir en tu currículum vitae.</p>
                    </div>
                </div>
                <!-- Pregunta 4 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">¿Puedo obtener ayuda si tengo problemas con el curso?</h3>
                        <p class="text-gray-700 mb-6">Por supuesto, nuestro equipo de soporte está disponible para ayudarte con cualquier problema técnico o pregunta relacionada con el contenido del curso.</p>
                    </div>
                </div>
                <!-- Pregunta 5 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">¿Hay algún descuento para estudiantes?</h3>
                        <p class="text-gray-700 mb-6">Sí, ofrecemos descuentos especiales para estudiantes. Por favor, ponte en contacto con nuestro equipo de atención al cliente para obtener más información sobre cómo obtener tu descuento.</p>
                    </div>
                </div>
                <!-- Pregunta 6 -->
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">¿Qué sucede si no estoy satisfecho con el curso?</h3>
                        <p class="text-gray-700 mb-6">Si por alguna razón no estás satisfecho con el curso, ofrecemos una garantía de devolución del dinero dentro de un cierto período de tiempo después de la compra.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
