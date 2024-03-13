<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="relative bg-gray-100">
    <header class="bg-green-500 shadow-lg">
        <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 sm:py-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-white mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <h1 class="text-white text-lg font-bold">SIC</h1>
            </div>
            <nav class="flex items-center">
                <a href="/dashboard" class="text-white font-bold px-4 py-2 rounded hover:bg-green-600">Dashboard</a>
                <a href="/alumno" class="text-white font-bold px-4 py-2 rounded hover:bg-green-600">Registrar Alumnos</a>
                <a href="/estudiantes" class="text-white font-bold px-4 py-2 rounded hover:bg-green-600">Estudiantes</a>
                <a href="/profile" class="text-white font-bold px-4 py-2 rounded hover:bg-green-600">Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-white font-bold px-4 py-2 rounded hover:bg-green-600 ml-4">Cerrar Sesión</button>
                </form>
            </nav>
        </div>
    </header>
    <main class="min-h-screen">
        @yield('contenido')
    </main>
    <footer class="bg-green-500 py-3 text-center text-white font-bold">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between items-center">
                <p>© {{ date('Y') }} Sistema Integral de Calificaciones. Todos los derechos reservados.</p>
                <nav>
                    <a href="#" class="text-gray-300 hover:text-white">Términos de Servicio</a>
                    <span class="text-gray-300 mx-2">|</span>
                    <a href="#" class="text-gray-300 hover:text-white">Política de Privacidad</a>
                </nav>
            </div>
        </footer>
</body>
</html>
