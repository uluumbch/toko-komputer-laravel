<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
// use App\Http\Controllers\DataTables;
// use Yajra\Datatables\Facades\Datatables;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('databarang', [
            "judul" => "Data Barang",
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
        //
        return view('tambahbarang', [
            "judul" => "Tambah Data Barang",
            'categories' => Category::all(),
            "user" => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => 'required|max:255',
            'category_id' => 'required',
            'harga' => 'required|numeric',
            'stok_barang' => 'required|numeric'
        ]);

        Barang::create($validasiData);
        return redirect('/barang')->with('succes', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('editbarang', [
            "judul" => "edit Data Barang",
            'barang' => $barang,
            'categories' => Category::all(),
            "user" => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validasiData = $request->validate([
            'nama' => 'required|max:255',
            'category_id' => 'required',
            'harga' => 'required|numeric',
            'stok_barang' => 'required|numeric'
        ]);

        Barang::where('id', $barang->id)->update($validasiData);
        return redirect('/barang')->with('succesedit', 'data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::where('id', $barang->id)
            ->delete();

        return redirect('/barang');
    }
}
