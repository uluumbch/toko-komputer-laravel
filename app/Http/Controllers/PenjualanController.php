<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Barang;
use App\Models\User;
use App\Http\Requests\StorePenjualanRequest;
use App\Http\Requests\UpdatePenjualanRequest;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penjualan', [
            "judul" => "Data Penjualan",
            "user" => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahpenjualan', [
            "judul" => "Tambah Data Penjualan",
            "barang" => Barang::all(),
            "user" => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenjualanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenjualanRequest $request)
    {
        $validasiData = $request->validate([
            'barang_id' => 'required',
            'harga_jual' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $validasiData['total_harga'] = $request->harga_jual * $request->jumlah;
        $hargaBarang = Barang::select('harga')->find($request->barang_id)->harga;
        $hargaJual = (int)$request->harga_jual;
        $validasiData['laba'] = ($hargaJual - $hargaBarang) * $request->jumlah;

        Penjualan::create($validasiData);
        // dd($validasiData, $hargaBarang);
        return redirect('/penjualan')->with('succes', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenjualanRequest  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenjualanRequest $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        Penjualan::destroy($penjualan->id);
        return redirect('/penjualan');
    }
}
