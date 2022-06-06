<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategori', [
            'judul' => 'Data Kategori',
            'user' => User::all(),
            'datakategori' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahkategori', [
            'judul' => 'Tambah Data Kategori',
            'user' => User::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $validasiData = $request->validate([
            'name' => 'required|max:255',

        ]);

        Category::create($validasiData);
        return redirect('/kategori')->with('succes', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('editkategori', [
            'judul' => 'Edit kategori',
            'kategori' => $category,
            "user" => User::all()
        ]);
    }

    public function ubahkategori($id)
    {
        return view('editkategori', [
            'judul' => 'Edit Kategori',
            'kategori' => Category::select("*")->where('id', $id)->first(),
            "user" => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validasiData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::where('id', $request->id)->update($validasiData);
        return redirect('/kategori')->with('succesedit', 'data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        Category::destroy($id);
        return redirect('/kategori')->with('succesedit', 'data berhasil dihapus');
    }
}
