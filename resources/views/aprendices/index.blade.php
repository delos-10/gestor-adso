<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor ADSO - Aprendices</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Listado de Aprendices</h1>
            <a href="{{ route('aprendices.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                + Nuevo Aprendiz
            </a>
        </div>

        @if(session('ok'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('ok') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="p-3 font-semibold text-gray-700">ID</th>
                        <th class="p-3 font-semibold text-gray-700">Nombre</th>
                        <th class="p-3 font-semibold text-gray-700">Documento</th>
                        <th class="p-3 font-semibold text-gray-700">Correo</th>
                        <th class="p-3 font-semibold text-gray-700">Ficha ID</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($aprendices as $aprendiz)
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="p-3 text-gray-600">{{ $aprendiz->id }}</td>
                            <td class="p-3 font-medium text-gray-900">{{ $aprendiz->nombre }}</td>
                            <td class="p-3 text-gray-600">{{ $aprendiz->documento }}</td>
                            <td class="p-3 text-gray-600">{{ $aprendiz->correo }}</td>
                            <td class="p-3 text-gray-600">{{ $aprendiz->ficha_id ?? 'N/A' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-4 text-center text-gray-500">No hay aprendices registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $aprendices->links() }}
        </div>
    </div>
</body>
</html>