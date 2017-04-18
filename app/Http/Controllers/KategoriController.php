<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Produk;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('kategori/index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kategori  = new Category;

        $file = $request->file('gambar');
        $destination_path = 'uploads/kategori/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);

        $kategori->nama = $request->namaKategori;
        $kategori->fotoLayout = $destination_path . $filename;
        $kategori->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori = Category::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kategori = Category::findOrFail($id);
        $kategori->nama = $request->namaKategori;
        $kategori->gambar = $request->gambar;
        $kategori->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kategori = Category::findOrFail($id);
        $kategori->delete();
    }
    public function tampilkan($id)
    {
        $kategori = Produk::where('kategori_id', $id)->get();
        return view('kategori/tampilkan', compact('kategori'));
    }
}
