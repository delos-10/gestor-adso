@extends('layouts.app')
@section('title', 'Crear Aprendiz')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-sm border border-gray-200 mt-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Nuevo Aprendiz</h1>
    
    <form action="{{ route('aprendices.store') }}" method="POST">
        @include('aprendices._form', ['aprendiz' => $aprendiz])
    </form>
    
    <div class="mt-6 pt-4 border-t border-gray-100">
        <a href="{{ route('aprendices.index') }}" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">
            &laquo; Volver al listado
        </a>
    </div>
</div>
@endsection