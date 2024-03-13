@extends('plantilla')

@section('contenido')
<div class="flex justify-center items-center h-full">
    <div class="w-full max-w-md">
        <form action="{{ route('estudiantes.update', $student->id) }}" method="POST" class="bg-white shadow-md rounded-lg overflow-hidden my-8 p-4">
            @csrf
            @method('put')
            <h1 class="text-2xl font-bold mt-3 mb-4 text-center uppercase">Actualizar Usuario</h1>

            <label class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-4">
                <span class="text-xs font-medium text-gray-700">Nombre: </span>
                <input type="text" name="name_student" placeholder="Nombre"
                    class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                    value="{{ $student->name_student }}" />
            </label>
            @error('name_student')
                <div style="color: red" class="mb-4">{{ $message }}<br></div>
            @enderror

            <label class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-4">
                <span class="text-xs font-medium text-gray-700">Apellido: </span>
                <input type="text" name="last_student" placeholder="Apellido"
                    class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                    value="{{ $student->last_student }}" />
            </label>
            @error('last_student')
                <div style="color: red" class="mb-4">{{ $message }}<br></div>
            @enderror

            <label class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-4">
                <span class="text-xs font-medium text-gray-700">Matricula: </span>
                <input type="text" name="id_student" placeholder="Matricula"
                    class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                    value="{{ $student->id_student }}" />
            </label>
            @error('id_student')
                <div style="color: red" class="mb-4">{{ $message }}<br></div>
            @enderror

            <label class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-4">
                <span class="text-xs font-medium text-gray-700">Fecha de nacimiento: </span>
                <input type="date" name="birthday"
                    class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                    value="{{ $student->birthday ? \Carbon\Carbon::parse($student->birthday)->format('Y-m-d') : '' }}" />
            </label>
            @error('birthday')
                <div style="color: red" class="mb-4">{{ $message }}<br></div>
            @enderror

            <label class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600 mb-4">
                <span class="text-xs font-medium text-gray-700">Comentarios: </span>
                <textarea name="comments" placeholder="Comentarios" class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm">{{ $student->comments }}</textarea>
            </label>
            @error('comments')
                <div style="color: red" class="mb-4">{{ $message }}<br></div>
            @enderror

            <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline rounded-lg">Actualizar</button>
        </form>
    </div>
</div>
@endsection
