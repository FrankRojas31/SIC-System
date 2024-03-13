@extends('plantilla')

@section('contenido')
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden my-8 p-4">
    <h2 class="text-xl font-semibold mb-4 text-center uppercase">Detalles del Estudiante</h2>

    <div class="mb-4">
        <label class="block overflow-hidden rounded-md border border-gray-200 px-2 py-1 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-2">
            <span class="text-xs font-medium text-gray-700">Nombre del estudiante:</span>
            <input type="text" id="name_student" name="name_student" value="{{ $student->name_student }}" class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" readonly>
        </label>
    </div>

    <div class="mb-4">
        <label class="block overflow-hidden rounded-md border border-gray-200 px-2 py-1 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-2">
            <span class="text-xs font-medium text-gray-700">Apellido del estudiante:</span>
            <input type="text" id="last_student" name="last_student" value="{{ $student->last_student }}" class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" readonly>
        </label>
    </div>

    <div class="mb-4">
        <label class="block overflow-hidden rounded-md border border-gray-200 px-2 py-1 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-2">
            <span class="text-xs font-medium text-gray-700">ID del Estudiante:</span>
            <input type="text" id="id_student" name="id_student" value="{{ $student->id_student }}" class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" readonly>
        </label>
    </div>

    <div class="mb-4">
        <label class="block overflow-hidden rounded-md border border-gray-200 px-2 py-1 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-2">
            <span class="text-xs font-medium text-gray-700">Fecha de Nacimiento:</span>
            <input type="text" id="birthday" name="birthday" value="{{ $student->birthday ? \Carbon\Carbon::parse($student->birthday)->format('d/m/Y') : 'N/A' }}" class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" readonly>
        </label>
    </div>

    <div class="mb-4">
        <label class="block overflow-hidden rounded-md border border-gray-200 px-2 py-1 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-2">
            <span class="text-xs font-medium text-gray-700">Comentario:</span>
            <textarea id="comments" name="comments" class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm" readonly>{{ $student->comments ?: 'N/A' }}</textarea>
        </label>
    </div>

    <button onclick="window.history.back()" class="block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</button>
</div>
@endsection
