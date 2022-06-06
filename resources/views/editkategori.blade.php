@extends('template.main')
@section('container')
    <div class="container m-4 w-full md:w-1/2">
        {{-- {{ dd($kategori) }} --}}

        <form action="/kategori/{{ $kategori->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-6">
                <input type="hidden" name="id" value="{{ $kategori->id }}">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Kategori</label>
                <input type="text" id="default-input" name="name" value="{{ old('name', $kategori->name) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
        </form>
    </div>
@endsection
