@extends('plantilla')

@section('contenido')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="text-2xl font-semibold mb-4">Actualizar Información de Perfil</div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="text-2xl font-semibold mb-4">Cambiar Contraseña</div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="text-2xl font-semibold mb-4">Eliminar Usuario</div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
