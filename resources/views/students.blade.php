@extends('plantilla')

@section('contenido')
    <div class="container mx-auto max-h-[calc(100vh-160px)] overflow-y-auto">
        <h1 class="text-3xl font-bold mb-4 text-center uppercase mt-8">Lista de Estudiantes</h1>
        @if (session()->has('notificacion'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('notificacion')}}</span>
        </div>
        @endif
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            >
                                Nombre
                            </th>
                            <th
                                class="px-5 py-3 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            >
                                Apellido
                            </th>
                            <th
                                class="px-5 py-3 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            >
                                ID
                            </th>
                            <th
                                class="px-5 py-3 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            >
                                Fecha de Nacimiento
                            </th>
                            <th
                                class="px-5 py-3 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            >
                                Comentarios
                            </th>
                            <th
                                class="px-5 py-3 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                            >
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="hover:bg-blue-100">
                                <td class="px-5 py-5">{{ $student->name_student }}</td>
                                <td class="px-5 py-5">{{ $student->last_student }}</td>
                                <td class="px-5 py-5">{{ $student->id_student }}</td>
                                <td class="px-5 py-5">{{ $student->birthday }}</td>
                                <td class="px-5 py-5">{{ $student->comments }}</td>
                                <td class="px-5 py-5">
                                    <div class="flex">
                                        <a href="{{ route('estudiantes.show', $student->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                                            Detalles
                                        </a>
                                        <a href="{{ route('estudiantes.edit', $student->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                                            Editar
                                        </a>
                                        <a href="{{ route('imprimir.cardex', $student->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                                            PDF
                                        </a>
                                        <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?')">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
