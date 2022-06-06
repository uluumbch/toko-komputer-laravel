@extends('template.main')
@section('container')
    <div class="m-4 ">
        @if (session()->has('succes'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <span class="font-medium">Berhasil!</span> {{ session('succes') }}.
            </div>
        @endif
        @if (session()->has('succesedit'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                <span class="font-medium">Berhasil!</span> {{ session('succesedit') }}.
            </div>
        @endif
        <a href="/barang/create">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                data</button>
        </a>
        <livewire:tabelbarang />
    </div>
@endsection
