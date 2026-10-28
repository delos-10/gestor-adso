@csrf

@if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
        <strong class="font-bold">Errores:</strong>
        <ul class="list-disc pl-5 mt-1 text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
    <input class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        id="nombre" type="text" name="nombre" value="{{ old('nombre', $aprendiz->nombre ?? '') }}">
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="documento">Documento</label>
    <input class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        id="documento" type="text" name="documento" value="{{ old('documento', $aprendiz->documento ?? '') }}">
</div>

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">Correo</label>
    <input class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        id="correo" type="email" name="correo" value="{{ old('correo', $aprendiz->correo ?? '') }}">
</div>

<div class="mb-6">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="ficha_id">Ficha</label>
    <input class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        id="ficha_id" type="number" name="ficha_id" value="{{ old('ficha_id', $aprendiz->ficha_id ?? '') }}">
</div>

<div class="flex items-center gap-4 mt-6">
    <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md shadow-sm transition duration-150 ease-in-out" type="submit">
        Guardar
    </button>
</div>