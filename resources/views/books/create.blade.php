@extends('books.layout')

@section('content')
    <div class="mx-auto max-w-md bg-white p-6 rounded-md shadow-md">
        <div class="relative flex items-center">
            <h2 class="text-2xl font-semibold mb-4 text-center">Registrar Nuevo Libro</h2>
            <a href="{{ route('books.index') }}" class="text-gray-600 hover:text-gray-800 font-medium mb-4 inline-block absolute right-5">Volver</a>
        </div>


        @if ($errors->any())
            <div class="text-red-600 mb-4">
                <strong>Whoops!</strong> Hubo algunos problemas con tu entrada.<br>
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-semibold">Título:</label>
                <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded-md p-2" placeholder="Título">
            </div>
            <div class="mb-4">
                <label for="editorial" class="block text-sm font-semibold">Editorial:</label>
                <input type="text" name="editorial" id="editorial" class="w-full border border-gray-300 rounded-md p-2" placeholder="Editorial">
            </div>
            <div class="mb-4">
                <label for="detalle" class="block text-sm font-semibold">Detalle:</label>
                <textarea name="detalle" id="detalle" class="w-full border border-gray-300 rounded-md p-2" rows="4" placeholder="Detalle"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Guardar</button>
            </div>
        </form>
    </div>
@endsection
