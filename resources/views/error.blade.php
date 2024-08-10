@extends('layouts.user')
 
@section('title', 'Error')
 
@section('contents')

<section class="bg-gray-200 min-h-screen flex items-center justify-center">
    <div class="max-w-xl px-4 py-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-3xl font-bold text-center mb-4">¡Ups! Algo salió mal</h2>
        <p class="text-lg text-gray-700 mb-8">Lo sentimos, parece que ha ocurrido un error.</p>
        <p class="text-gray-600">Puedes volver a <a href="/" class="text-blue-500 hover:underline">nuestra página de inicio</a> o intentarlo más tarde.</p>
    </div>
</section>


@endsection