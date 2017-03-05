<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Produk;
use App\Toko;
use App\Gambar;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('pakaian/create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request->file('ktp'););
        //
        $produk = new Produk();
        $produk->hargaSatuan = $request->harga;
        $produk->namaPakaian = $request->nama;
        $produk->kategoriId = $request->kategori;
        $produk->deskripsiPakaian = $request->desk;
        $produk->deskripsiSingkat = $request->desksing;
        $produk->warna = $request->warna;
        $produk->panjang = $request->panjang;
        $produk->lebar = $request->lebar;
        $produk->jenisKelamin = $request->jlk;
        $tokoId = Toko::where('nama','=',session()->get('tokos')[0])->firstOrFail();;
        $produk->stok = $request->stok;
        $produk->tokoId = $tokoId->id;
        $produk->save();
        $insertedId = $produk->id;

        $gambar = new Gambar();
        $file = $request->file('logo1');
        $destination_path = 'uploads/pakaian/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        $gambar->gambar = $destination_path . $filename;
        $gambar->statusGambar = "pertama";
        $gambar->pakaianId = $insertedId;
        $gambar->save();

        $gambar1 = new Gambar();
        $file1 = $request->file('logo2');
        $destination_path = 'uploads/pakaian/image/';
        $filename = str_random(6).'_'.$file1->getClientOriginalName();
        $file1->move($destination_path, $filename);
        $gambar1->gambar = $destination_path . $filename;
        $gambar1->statusGambar = "kedua";
        $gambar1->pakaianId = $insertedId;
        $gambar1->save();

        $gambar2 = new Gambar();
        $file2 = $request->file('logo3');
        $destination_path = 'uploads/pakaian/image/';
        $filename = str_random(6).'_'.$file2->getClientOriginalName();
        $file2->move($destination_path, $filename);
        $gambar2->gambar = $destination_path . $filename;
        $gambar2->statusGambar = "ketiga";
        $gambar2->pakaianId = $insertedId;
        $gambar2->save();

        $gambar3 = new Gambar();
        $file4 = $request->file('logo4');
        $destination_path = 'uploads/pakaian/image/';
        $filename = str_random(6).'_'.$file4->getClientOriginalName();
        $file4->move($destination_path, $filename);
        $gambar3->gambar = $destination_path . $filename;
        $gambar3->statusGambar = "keempat";
        $gambar3->pakaianId = $insertedId;
        $gambar3->save();

        $gambar4 = new Gambar();
        $file4 = $request->file('logo5');
        $destination_path = 'uploads/pakaian/image/';
        $filename = str_random(6).'_'.$file4->getClientOriginalName();
        $file4->move($destination_path, $filename);
        $gambar4->gambar = $destination_path . $filename;
        $gambar4->statusGambar = "kelima";
        $gambar4->pakaianId = $insertedId;
        $gambar4->save();
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
        $pakaian = Produk::find($id);
        return view('pakaian/show', compact('pakaian'));
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
    }
}
