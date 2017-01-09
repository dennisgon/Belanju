<?php

namespace App\Http\Controllers;
use App\Toko;
use Illuminate\Http\Request;
use Auth;
use App\User;

class TokoController extends Controller
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
        return view('toko/register');
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
        $toko = new Toko;
        $toko->nama = $request->shop_name;
        $toko->description = $request->shop_description;
        $toko->tagline = $request->tag_line;
        $toko->tlp = $request->telepon;

        $file = $request->file('ktp');
        $destination_path = 'uploads/toko/ktp';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        $toko->sampulToko = $destination_path . $filename;

        $file1 = $request->file('logo');
        $destination_path1 = 'uploads/toko/logo';
        $filename1 = str_random(6).'_'.$file1->getClientOriginalName();
        $file1->move($destination_path1, $filename1);
        $toko->Tandapengenal = $request->shop_description;

        $file2 = $request->file('sampul');
        $destination_path2 = 'uploads/toko/sampul';
        $filename2 = str_random(6).'_'.$file2->getClientOriginalName();
        $file2->move($destination_path2, $filename2);
        $toko->imagetoko =  $destination_path . $filename;

        $toko->alamat = $request->alamat;
        $toko->kota = $request->kota;
        $toko->kecamatan = $request->kecamatan;
        $toko->provinsi = $request->provinsi;
        $toko->kelurahaan = $request->kelurahaan;

        $toko->save();
        $user = User::find(Auth::user()->id);
        $toko->users()->attach($user);
        // $

        // $data['logo'] = $destination_path . $filename;
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
