@extends('template.main')
@section('container')
    <div class="m-3 xl:w-96 w-full ">
        <form action="/penjualan" method="post">
            @csrf
            <label for="select-nama" class="form-label inline-block mb-2 text-gray-700 text-lg dark:text-gray-200">Nama
                Barang</label>
            <select id="select-nama" name="barang_id"
                class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                @foreach ($barang as $item)
                    @if (old('barang_id') == $item->id)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endif
                @endforeach
            </select>
            <label for="hargaBarang" class="form-label inline-block mb-2 text-gray-700 text-lg dark:text-gray-200 ">Harga
                Jual
                Barang</label>
            <input type="number" name="harga_jual" id="hargaBarang" placeholder="harga"
                class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full appearance-none
                dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            @error('harga')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="stokBarang" class="form-label inline-block mb-2 text-gray-700 text-lg dark:text-gray-200">Jumlah
                Terjual</label>
            <input type="number" name="jumlah" id="stokBarang" placeholder="stok barang"
                class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            @error('stok_barang')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit"
                class="mt-3 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
        </form>
    </div>
    @push('scripts')
        <script>
            $(function() {
                $("select").selectize({
                    create: false,
                    sortField: "text",
                });
            });
        </script>
        </script>
    @endpush
@endsection
