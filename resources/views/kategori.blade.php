@extends('template.main')
@section('container')
    <div class="container m-4">
        @if (session()->has('succes'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <span class="font-medium">Berhasil!</span> {{ session('succes') }}.
            </div>
        @endif


        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a
                href="/kategori/create">Tambah Data</a></button>
        <table class="table-auto w-full lg:w-1/2 text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-lg text-gray-700 uppercase bg-gray-100 dark:bg-gray-900 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datakategori as $kategori)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $kategori->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
