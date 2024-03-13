@extends('plantilla')

@section('contenido')
<x-app-layout>
    <div class="relative">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <img src="images/imagenes.jpg" alt="Imagen" class="w-full h-96 object-cover" srcset="">
        <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white font-bold text-3xl uppercase">¡Bienvenido al Sistema Integral de Calificaciones!</p>
    </div>

    <!-- Carrousel de imágenes -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase">Edificios</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="images/General.jpg" alt="Aspecto 1" class="w-full h-auto">
                    <div class="p-6">
                        <p class="text-gray-800 font-bold text-xl mb-2">Edicio A</p>
                        <p class="text-gray-600">Descripción del aspecto destacado 1. Puedes agregar más detalles aquí.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="images/General.jpg" alt="Aspecto 2" class="w-full h-auto">
                    <div class="p-6">
                        <p class="text-gray-800 font-bold text-xl mb-2">Edificio B</p>
                        <p class="text-gray-600">Descripción del aspecto destacado 2. Puedes agregar más detalles aquí.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de características -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase">Características Clave</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Funcionalidad A</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla leo sit amet ligula dignissim, non vestibulum ex vehicula.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Funcionalidad B</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla leo sit amet ligula dignissim, non vestibulum ex vehicula.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Funcionalidad C</h3>
                    <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla leo sit amet ligula dignissim, non vestibulum ex vehicula.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonios de usuarios -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase">Testimonios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <p class="text-gray-800 text-lg mb-4">"Me encanta este sistema de calificaciones, ¡ha simplificado mucho mi trabajo!"</p>
                    <p class="text-gray-600 text-right">- Juan Pérez</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <p class="text-gray-800 text-lg mb-4">"¡Altamente recomendado! Fácil de usar y muy útil."</p>
                    <p class="text-gray-600 text-right">- María Gómez</p>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-md p-6">
                    <p class="text-gray-800 text-lg mb-4">"¡Excelente servicio al cliente! Siempre responden rápido y resuelven mis problemas."</p>
                    <p class="text-gray-600 text-right">- Carlos Rodríguez</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de preguntas frecuentes -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase">Preguntas Frecuentes</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <input type="checkbox" id="faq1" class="accordion-item__state">
                    <label for="faq1" class="accordion-item__title text-gray-800 cursor-pointer">¿Cómo puedo restablecer mi contraseña?</label>
                    <div class="accordion-item__content text-gray-600">
                        <p>Para restablecer tu contraseña, ve a la página de inicio de sesión y haz clic en "Olvidé mi contraseña". Se te enviará un correo electrónico con instrucciones sobre cómo restablecerla.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" id="faq2" class="accordion-item__state">
                    <label for="faq2" class="accordion-item__title text-gray-800 cursor-pointer">¿Cómo puedo contactar al soporte técnico?</label>
                    <div class="accordion-item__content text-gray-600">
                        <p>Puedes contactar a nuestro equipo de soporte técnico enviando un correo electrónico a support@example.com o completando el formulario de contacto en nuestra página de contacto.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlaces a redes sociales -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase">Síguenos en Redes Sociales</h2>
            <ul class="flex justify-center space-x-6">
                <li><a href="#" class="text-blue-500 hover:text-blue-700">Facebook</a></li>
                <li><a href="#" class="text-blue-500 hover:text-blue-700">Twitter</a></li>
                <li><a href="#" class="text-blue-500 hover:text-blue-700">Instagram</a></li>
            </ul>
        </div>
    </div>

    <!-- Sección de contacto -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 uppercase">Contáctanos</h2>
            <p class="text-lg text-gray-800 mb-4">Para consultas generales, por favor envía un correo electrónico a <a href="mailto:info@example.com" class="text-blue-500 hover:underline">info@example.com</a>.</p>
            <p class="text-lg text-gray-800 mb-4">Para soporte técnico, por favor envía un correo electrónico a <a href="mailto:support@example.com" class="text-blue-500 hover:underline">support@example.com</a> o completa nuestro formulario de contacto.</p>
        </div>
    </div>
</x-app-layout>
@endsection
