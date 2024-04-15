@extends('books.layout')

@section('content')
    <div class="mx-auto max-w-md bg-white p-6 rounded-md shadow-md">
        <div class="relative flex items-center">
            <h2 class="text-2xl font-semibold mb-4 text-center">Ver libro</h2>
            <a href="{{ route('books.index') }}" class="text-gray-600 hover:text-gray-800 font-medium mb-4 inline-block absolute right-5">Volver</a>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold">Título:</label>
            <p class="text-gray-800">{{ $book->nombre }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-semibold">Editorial:</label>
            <p class="text-gray-800">{{ $book->editorial }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-semibold">Detalle:</label>
            <p class="text-gray-800">{{ $book->detalle }}</p>
        </div>
    </div>
@endsection
