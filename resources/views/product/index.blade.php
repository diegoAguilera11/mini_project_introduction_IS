@extends('layouts.app')

@section('content')
    {{-- {{ $products->count() }} --}}
    {{-- <h3>Listado de productos</h3> --}}
    @if (session('success'))
        <div class="bg-green-300 w-1/2 mx-auto p-2">
            <p class="text-center text-green-800 font-bold">{{ session('success') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-300 w-1/2 mx-auto p-2">
            <p class="text-center text-red-800 font-bold">{{ session('error') }}</p>
        </div>
    @endif

    <div class="flex flex-col">


        <a class="bg-green-400 text-white font-bold  mx-auto my-4 w-1/6 py-4 rounded-sm hover:bg-green-600 transition-all text-center"
            href="{{ route('product.create') }}">
            Agregar
        </a>
        @if ($products->count() > 0)
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Precio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stock
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $product->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $product->price }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $product->stock }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline mx-1">
                                        Editar
                                    </a>

                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline mx-1">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h3 class="font-bold text-cyan-700 text-2xl text-center">No se encuentran productos en el sistema</h3>
        @endif
    @endsection
</div>
