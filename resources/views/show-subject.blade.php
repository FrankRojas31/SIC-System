@extends('plantilla')

@section('contenido')
<h1 class="text-3xl mb-4 uppercase">Lista de Unidades</h1>
    <div class="overflow-x-auto mb-5">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-300">ID</th>
                    <th class="px-4 py-2 bg-gray-300">Nombre de la Unidad</th>
                    <th class="px-4 py-2 bg-gray-300">Objetivo</th>
                    <th class="px-4 py-2 bg-gray-300">ID del Sujeto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($units as $unit)
                <tr>
                    <td class="border px-4 py-2">{{ $unit->id }}</td>
                    <td class="border px-4 py-2">{{ $unit->unit_name }}</td>
                    <td class="border px-4 py-2">{{ $unit->objective }}</td>
                    <td class="border px-4 py-2">{{ $unit->subject_id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h1 class="text-3xl mb-4 mt-10">Lista de Asignaturas</h1>
    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-300">ID</th>
                    <th class="px-4 py-2 bg-gray-300">Nombre de la Unidad</th>
                    <th class="px-4 py-2 bg-gray-300">Objetivo</th>
                    <th class="px-4 py-2 bg-gray-300">ID del Sujeto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subject as $subjects)
                <tr>
                    <td class="border px-4 py-2">{{ $subjects->id }}</td>
                    <td class="border px-4 py-2">{{ $subjects->subject_name }}</td>
                    <td class="border px-4 py-2">{{ $subjects->objective }}</td>
                    <td class="border px-4 py-2">{{ $subjects->total_hours }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
