@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    {{-- Mensaje de éxito --}}
    @if(session('ok'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('ok') }}</span>
        </div>
    @endif

    {{-- Encabezado: Título, Búsqueda y Botón Nuevo --}}
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
        <h2 class="text-2xl font-bold text-gray-800">
            Listado de Aprendices
        </h2>

        <div class="flex flex-col sm:flex-row gap-3">
            {{-- Buscador --}}
            <form action="{{ route('aprendices.index') }}" method="GET" class="flex">
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Buscar por nombre o doc..." 
                    class="border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm w-64">
                <button type="submit" class="bg-gray-100 border border-l-0 border-gray-300 text-gray-700 px-4 py-2 rounded-r-md hover:bg-gray-200 text-sm font-medium">
                    Buscar
                </button>
            </form>

            {{-- Botón Nuevo --}}
            <a href="{{ route('aprendices.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm text-sm flex items-center justify-center transition duration-150 ease-in-out">
                + Nuevo Aprendiz
            </a>
        </div>
    </div>

    {{-- Contenedor de la Tabla --}}
    <div class="bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Documento</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ficha ID</th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($aprendices as $aprendiz)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $aprendiz->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $aprendiz->nombre }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $aprendiz->documento }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $aprendiz->correo }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $aprendiz->ficha_id ?? 'N/A' }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('aprendices.edit', $aprendiz->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                                
                                <form action="{{ route('aprendices.destroy', $aprendiz->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Está seguro de eliminar este aprendiz?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        {{-- Paginación --}}
        <div class="px-6 py-4 border-t border-gray-200 bg-white">
            {{ $aprendices->links() }}
        </div>
    </div>
</div>
@endsection