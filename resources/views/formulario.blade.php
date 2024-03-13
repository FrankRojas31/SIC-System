@extends('plantilla')

@section('contenido')
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden my-8 p-4">
    <h1 class="mb-6 text-center uppercase text-2xl font-bold text-gray-800">Registrar Alumno</h1>
    <div id="formulario">
        <form action="{{url('procesar_formulario')}}" method="POST" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-xs font-medium text-gray-700">Nombre:</label>
                <input
                    type="text"
                    id="name"
                    name="name_student"
                    placeholder="Ingrese el nombre del alumno"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                />
                @error('name_student')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="last" class="block text-xs font-medium text-gray-700">Apellido:</label>
                <input
                    type="text"
                    id="last"
                    name="last_student"
                    placeholder="Ingrese el apellido del alumno"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                />
                @error('last_student')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="id" class="block text-xs font-medium text-gray-700">Matrícula:</label>
                <input
                    type="text"
                    id="id"
                    name="id_student"
                    placeholder="Ingrese la matrícula del alumno"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                />
                @error('id_student')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="birthday" class="block text-xs font-medium text-gray-700">Fecha de Nacimiento:</label>
                <input
                    type="date"
                    id="birthday"
                    name="birthday"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                />
                @error('birthday')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="comments" class="block text-xs font-medium text-gray-700">Comentarios:</label>
                <textarea
                    id="comments"
                    name="comments"
                    placeholder="Ingrese comentarios adicionales (opcional)"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500"
                ></textarea>
                @error('comments')
                <div class="mt-1 text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">Registrar</button>
        </form>
    </div>
</div>
@endsection
