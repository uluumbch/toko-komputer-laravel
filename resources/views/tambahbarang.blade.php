@extends('template.main')
@section('container')
    <div class="m-3 xl:w-96 w-full ">
        <form action="/barang" method="post">
            @csrf
            <div class="mb-3">
                <label for="namaBarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Barang</label>
                <input type="text" id="default-input" placeholder="nama barang" name="nama" value="{{ old('nama') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('nama')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">


                <label for="kategoriBarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kategori
                    Barang</label>
                <select id="kategoriBarang" name="category_id"
                    class="form-select appearance-none
  block
  w-full
  px-3
  py-1.5
  text-base
  font-normal
  text-gray-700
  bg-white
  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
bg-clip-padding bg-no-repeat
  border border-solid border-gray-300
  rounded
  transition
  ease-in-out
  m-0
  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="hargaBarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga
                    Barang</label>
                <input type="text" name="harga" id="hargaBarang" placeholder="1.2000.000"
                    class="px-3 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder-slate-300 text-slate-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                @error('harga')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">


                <label for="stokBarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok
                    Barang</label>
                <input type="text" name="stok_barang" id="stokBarang" placeholder="10"
                    class="px-3 py-3 placeholder-slate-300 text-slate-600 relative dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
                @error('stok_barang')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
        </form>
    </div>
@endsection
