@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" novalidate>
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Crear producto</h5>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="name" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" value="{{ $product ? $product->name : '' }}" required>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-lg text-center p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                    <input type="price" name="price" id="price" placeholder="$2000" value="{{ $product ? $product->price : '' }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('price')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-lg text-center p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Stock
                    </label>
                    <input type="stock" name="stock" id="stock" placeholder="" value="{{ $product ? $product->stock : '' }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required>
                    @error('stock')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-lg text-center p-2">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Editar Producto
                </button>
            </form>
        </div>
    </div>
@endsection
